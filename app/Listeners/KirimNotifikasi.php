<?php

namespace App\Listeners;

use App\Events\PenugasanSelesai;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class KirimNotifikasi implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(PenugasanSelesai $event)
    {
        $penugasan = $event->penugasan;
        $barang = $penugasan->barang;

        if ($barang->status === 'selesai' || $barang->status === 'dikirim') {
            if ($penugasan->tanggal_selesai !== null) {
             $notifikasi = new Notifikasi();
            $notifikasi->pesan = 'Penugasan selesai';
            $notifikasi->penugasan_id = $penugasan->id;
            $notifikasi->save();
            }
        }
    }
}
