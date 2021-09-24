<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Keterangan_hadir;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function absensi_pegawai()
    {
        // return "Ini Index";
        return view('absensi.absensi_pegawai');
    }

    public function absensi_murid()
    {
        // return "Ini Index";
        $list = Absensi::select('detail_absensi.*', 'siswa.nama_lengkap', 'siswa.nis')
        ->join('siswa', 'siswa.id', '=', 'detail_absensi.d_id_murid')
        ->where('d_id_guru', NULL)
        ->get();

        $ket = $this->get_status();
        // dd($ket);
        // dd($list);
        return view('absensi.absensi_murid', compact('list', 'ket'));
    }

    public function get_status()
    {
        # code...
        $ket = Keterangan_hadir::all();
        return $ket;
    }
}
