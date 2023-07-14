<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Penugasan;
use App\Charts\JenisChart;
use App\Charts\KomplainStat;
use App\Charts\penyelesaian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Charts\KomplainMerkChart;
use App\Charts\StatistikKomplain;
use Illuminate\Support\Facades\Validator;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class ManagerController extends Controller
{
    public function index(Request $request, KomplainMerkChart $komplainmerk, KomplainStat $stat, JenisChart $komplainjenis)
    {
        $total=Barang::all()->count();
        $komplainIn = Barang::whereNotIn('status', ['pending', 'approved'])->count();
        $selesai = Barang::whereIn('status', ['gantibaru', 'selesai'])->count();
        $gagal = Barang::where('status', 'rejected')->count();



        $komplain=Penugasan::all();

        return view('1_manager_dashboard', ['KomplainMerkChart' => $komplainmerk->build(),
        'total' => $total,
        'komplainIn' => $komplainIn,
        'selesai' => $selesai,
        'gagal' => $gagal,
        'KomplainStat' => $stat->build(),
        'komplain' => $komplain,
        'JenisChart' => $komplainjenis->build()
        ]);
    }


    public function staff_stat(){
        $staff = User::where('id_role', 2)->get();


        return view('1_manager_staff', compact('staff'));
    }

    public function rerata($id, penyelesaian $admin)
    {

        $user=User::find($id);

        if ($user) {
            $admin = Penugasan::join('barang', 'penugasan.id_barang', '=', 'barang.id')
            ->join('users', 'penugasan.id_user', '=', 'users.id')
            ->where('penugasan.id_user', $user->id)
            ->select('penugasan.id', 'barang.id as id_barang', 'users.id as id_user', 'penugasan.created_at', 'penugasan.tanggal_selesai')
            ->get();

            $totalBarang = $admin->count();
            $totalSelisih = 0;

            foreach ($admin as $item) {
                $created_at = Carbon::parse($item->created_at)->startOfDay();
                $tanggal_selesai = Carbon::parse($item->tanggal_selesai)->startOfDay();
                $selisih = $created_at->diffInDays($tanggal_selesai);
                $totalSelisih += $selisih;
            }

            $rataRataSelisih = ($totalBarang > 0) ? $totalSelisih / $totalBarang : 0;


            //

            $jumlahBarangPerBulan = [];

            foreach ($admin as $selesai) {
                $tanggal_selesai = Carbon::parse($item->tanggal_selesai);
                $bulan = $tanggal_selesai->format('F');

                if (!isset($jumlahBarangPerBulan[$bulan])) {
                    $jumlahBarangPerBulan[$bulan] = 0;
                }

                $jumlahBarangPerBulan[$bulan]++;
            }

            $chart = new penyelesaian(new LarapexChart);
        $chartData = $chart->build();

        $bulanLabels = array_keys($jumlahBarangPerBulan);
        $jumlahBarang = array_values($jumlahBarangPerBulan);

        return view('1_manager_staffdetail', [
            'penyelesaian' => $chartData,
            'admin' => $admin,
            'totalBarang' => $totalBarang,
            'rataRataSelisih' => $rataRataSelisih,
            'jumlahBarangPerBulan' => $jumlahBarangPerBulan,
            'bulanLabels' => $bulanLabels,
            'jumlahBarang'=> $jumlahBarang
        ]);
        }
        else {
            // Handle jika user dengan ID tertentu tidak ditemukan
        }
    }



}
