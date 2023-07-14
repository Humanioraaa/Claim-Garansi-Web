<?php

namespace App\Charts;

use App\Models\Barang;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class JenisChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $komplaijenis=Barang::get();
        $jenis = [
            $komplaijenis->where('jenis_barang', 'laptop')->count(),
            $komplaijenis->where('jenis_barang', 'phone')->count(),
            $komplaijenis->where('jenis_barang', 'pc')->count(),
            $komplaijenis->where('jenis_barang', 'monitor')->count(),
        ];


        $label =[
            'laptop',
            'phone',
            'pc',
            'monitor',
        ];

        return $this->chart->donutChart()
            ->setTitle('')
            ->setSubtitle('')
            ->addData($jenis)
            ->setLabels($label);
    }
}
