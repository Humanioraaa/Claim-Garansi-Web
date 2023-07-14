<?php

namespace App\Charts;

use App\Models\Barang;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class KomplainMerkChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $komplainmerk=Barang::get();
        $merk = [
            $komplainmerk->where('merk_barang', 'asus')->count(),
            $komplainmerk->where('merk_barang', 'dell')->count(),
            $komplainmerk->where('merk_barang', 'lenovo')->count(),
            $komplainmerk->where('merk_barang', 'msi')->count(),
            $komplainmerk->where('merk_barang', 'samsung')->count(),
            $komplainmerk->where('merk_barang', 'apple')->count(),
            $komplainmerk->where('merk_barang', 'acer')->count(),
        ];


        $label =[
            'asus',
            'dell',
            'lenovo',
            'msi',
            'samsung',
            'apple',
            'acer',
        ];

        return $this->chart->pieChart()
            ->setTitle('')
            ->setSubtitle(date('Y'))
            ->addData($merk)
            ->setLabels($label);
    }


}
