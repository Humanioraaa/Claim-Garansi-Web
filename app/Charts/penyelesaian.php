<?php

namespace App\Charts;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Barang;
use App\Models\Penugasan;

class penyelesaian
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {



        $admin = Penugasan::join('barang', 'penugasan.id_barang', '=', 'barang.id')
        ->join('users', 'penugasan.id_user', '=', 'users.id')
        ->select('penugasan.id', 'barang.id as id_barang', 'users.id as id_user', 'penugasan.created_at', 'penugasan.tanggal_selesai')
        ->groupBy('penugasan.id', 'barang.id', 'users.id', 'penugasan.created_at', 'penugasan.tanggal_selesai')
        ->get();

        $jumlahBarangPerBulan = [];

        foreach ($admin as $item) {
            $tanggal_selesai = Carbon::parse($item->tanggal_selesai);
            $bulan = $tanggal_selesai->format('F');

            if (!isset($jumlahBarangPerBulan[$bulan])) {
                $jumlahBarangPerBulan[$bulan] = 0;
            }

            $jumlahBarangPerBulan[$bulan]++;
        }

        $bulanLabels = array_keys($jumlahBarangPerBulan);
        $jumlahBarang = array_values($jumlahBarangPerBulan);

        return $this->chart->lineChart()
            ->setTitle('Jumlah Barang yang Diselesaikan per Bulan')
            ->setXAxis($bulanLabels)
            ->addData('Jumlah Barang', $jumlahBarang);

    }
}
