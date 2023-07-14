<?php

namespace App\Charts;

use App\Models\Barang;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class KomplainStat
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\RadialChart
    {
        $stat=Barang::get();
        $data = [
            $stat->where('status', 'rejected')->count(),
            $stat->whereNotIn('status', ['pending', 'rejected'])->count(),
            $stat->where('status', 'pending')->count(),
        ];

        $label = [
            'Gagal',
            'Sukses',
            'Pending',
        ];

        return $this->chart->radialChart()
            ->setTitle('Status Komplain')
            ->setSubtitle('Total Status Komplain')
            ->addData($data)
            ->setLabels($label)
            ->setColors(['#D32F2F', '#03A9F4']);
    }
}
