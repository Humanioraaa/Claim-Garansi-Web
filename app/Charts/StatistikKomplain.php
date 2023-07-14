<?php

namespace App\Charts;

use App\Models\Barang;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class StatistikKomplain
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $stat=Barang::get();
        $gagal = [
            $stat->where('status', 'rejected')->count(),
        ];

        $berhasil = [
            $stat->whereNotIn('status', ['pending', 'rejected'])->count(),
        ];

        $pending = [
            $stat->where('status', 'pending')->count(),
        ];


        return $this->chart->lineChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
            ->addData($berhasil)
            ->addData($pending)
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
