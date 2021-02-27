<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User_level;
use Illuminate\Http\Request;

class MasterdataController extends Controller
{

    public function index_siswa()
    {
        // $data = Siswa::all();
        $data = Siswa::select('siswa.*', 'user_level')
        ->join('user', 'user.id', '=', 'siswa.id_user')
        ->get();
        // dd($data);
        return view('masterdata.siswa.index', compact('data'));
    }

    public function form_siswa()
    {
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
        $user = User_level::all();
        $siswa = Siswa::where('id', $id)->first();
        // dd($siswa);

        return view('masterdata.siswa.form_edit', compact('user', 'siswa'));
    }

    public function update_siswa($id, Request $request)
    {
        $data = Siswa::find($id);
        if ($request->hasFile('foto_siswa')) {
            // validasi disini, tapi di komen dulu
            // $request->validate([
            //     'foto_siswa' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // ]);
            $path = $request->file('foto_siswa')->store('public/images');
            $data->foto_siswa = $path;
        }
        $data->nis = $request->nis;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->kelas = $request->kelas;
        $data->status = $request->status;
        $data->tahun_ajaran_awal = $request->tahun_ajaran_awal;
        $data->id_user = $request->id_user;
        $data->save();

        return redirect('/siswa')->with('success', 'Data berhasil diupdate.');
    }

    public function delete_siswa($id)
    {
        Siswa::where('id', $id)
        ->delete();

        return redirect('/siswa')->with('success', 'Data berhasil dihapus.');
    }

    // end master data siswa

    // kelas
    public function index_kelas()
    {
        $data = Kelas::all();
        return view('masterdata.kelas.index', compact('data'));
    }

    public function save_kelas(Request $request)
    {
        # code...
        $request->validate([
            'kelas' => 'required|unique:kelas'
        ]);

        Kelas::create($request->all());
        return redirect('/kelas')->with('success', 'Data berhasil ditambahkan');
    }

    public function update_kelas($id, Request $request)
    {
        $data = Kelas::find($id);
        $data->kelas = $request->kelas;
        $data->save();

        return redirect('/kelas')->with('success', 'Data berhasil diupdate.');
    }

    public function delete_kelas($id)
    {
        Kelas::where('id', $id)
        ->delete();

        return redirect('/kelas')->with('success', 'Data berhasil dihapus.');
    }
    // end kelas

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
