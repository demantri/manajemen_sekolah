<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User_level;
use Illuminate\Http\Request;

class MasterdataController extends Controller
{

    public function index_siswa()
    {
        $data = Siswa::all();
        return view('masterdata.siswa.index', compact('data'));
    }

    public function form_siswa()
    {
        # code...
        $user = User_level::all();
        return view('masterdata.siswa.form', compact('user'));
    }

    public function save_siswa(Request $request)
    {
        # code...
        // Siswa::create($request->all());
        // ubah disini
        $path = $request->file('foto_siswa')->store('public/images');
        // dd($path);

        $siswa = new Siswa;

        $siswa->nis = $request->nis;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
        $siswa->kelas = $request->kelas;
        $siswa->status = $request->status;
        $siswa->tahun_ajaran_awal = $request->tahun_ajaran_awal;
        $siswa->id_user = $request->id_user;
        $siswa->foto_siswa = $path;
        $siswa->save();

        return redirect('/siswa')->with('success', 'Data berhasil ditambahkan');
    }

    public function form_edit_siswa($id)
    {
        # code...
        $user = User_level::all();
        $siswa = Siswa::where('id', $id)->first();

        // dd($siswa);

        return view('masterdata.siswa.form_edit', compact('user', 'siswa'));
    }

    public function index_user()
    {
        $data = User_level::all();
        return view('masterdata.user.index', compact('data'));
    }

    public function save_user(Request $request)
    {
        $request->validate([
            'user_level' => 'required'
        ]);

        User_level::create($request->all());
        return redirect('/user')->with('success', 'Data berhasil ditambahkan.');
    }

}
