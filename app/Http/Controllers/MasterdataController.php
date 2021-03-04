<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Status;
use App\Models\TahunAjaran;
use App\Models\User_level;
use Illuminate\Http\Request;

class MasterdataController extends Controller
{

    public function index_siswa()
    {
        // $data = Siswa::all();
        $data = Siswa::select('siswa.*', 'user_level', 'tahun_ajaran', 'kelas', 'status', 'status.id as id_status')
        ->join('user', 'user.id', '=', 'siswa.id_user')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id')
        ->join('status', 'siswa.id_status', '=', 'status.id')
        ->join('tahun_ajaran', 'siswa.id_tahun_ajaran_awal', '=', 'tahun_ajaran.id')
        ->get();
        // dd($data);
        return view('masterdata.siswa.index', compact('data'));
    }

    public function form_siswa()
    {
        $status = Status::all();
        $kelas = Kelas::all();
        $tahun_ajaran = TahunAjaran::all();
        $user = User_level::all();

        return view('masterdata.siswa.form', compact('user', 'status', 'kelas', 'tahun_ajaran'));
    }

    public function save_siswa(Request $request)
    {
        # code...
        // Siswa::create($request->all());
        // ubah disini
        // $path = $request->file('foto_siswa')->store('public/images');

        // validasi dulu kalo null, sementara
        if ($request->file('foto_siswa') == null) {
            $path = null ;
        } else {
            $path = $request->file('foto_siswa')->store('public/images');
        }
        $siswa = new Siswa;

        $siswa->nis = $request->nis;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->id_status = $request->id_status;
        $siswa->id_tahun_ajaran_awal = $request->id_tahun_ajaran_awal;
        $siswa->id_user = $request->id_user;
        $siswa->foto_siswa = $path;
        $siswa->no_telp_siswa = $request->no_telp_siswa;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->no_telp_ayah = $request->no_telp_ayah;
        $siswa->no_telp_ibu = $request->no_telp_ibu;

        $siswa->save();

        return redirect('/siswa')->with('success', 'Data berhasil ditambahkan');
    }

    public function form_edit_siswa($id)
    {
        // ambil data dari master
        $user = User_level::all();
        $status = Status::all();
        $kelas = Kelas::all();
        $tahun_ajaran = TahunAjaran::all();

        // get id
        $siswa = Siswa::where('id', $id)->first();
        // dd($siswa);
        return view('masterdata.siswa.form_edit', compact('user', 'siswa', 'kelas', 'status', 'tahun_ajaran'));
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
        $data->id_kelas = $request->id_kelas;
        $data->id_status = $request->id_status;
        $data->id_tahun_ajaran_awal = $request->id_tahun_ajaran_awal;
        $data->id_user = $request->id_user;
        $data->no_telp_siswa = $request->no_telp_siswa;
        $data->nama_ayah = $request->nama_ayah;
        $data->nama_ibu = $request->nama_ibu;
        $data->no_telp_ayah = $request->no_telp_ayah;
        $data->no_telp_ibu = $request->no_telp_ibu;
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

    // status
    public function index_status()
    {
        $data = Status::all();
        return view('masterdata.status.index', compact('data'));
    }

    public function save_status(Request $request)
    {
        $request->validate([
            'status' => 'required|unique:status'
        ]);

        Status::create($request->all());
        return redirect('/status')->with('success', 'Data berhasil ditambahkan');
    }

    public function update_status($id, Request $request)
    {
        $data = Status::find($id);
        $data->status = $request->status;
        $data->save();

        return redirect('/status')->with('success', 'Data berhasil diupdate.');
    }

    public function delete_status($id)
    {
        Status::where('id', $id)
        ->delete();

        return redirect('/status')->with('success', 'Data berhasil dihapus.');
    }
    // end status

    // tahun ajaran
    public function index_tahun_ajaran()
    {
        $data = TahunAjaran::all();
        return view('masterdata.tahun_ajaran.index', compact('data'));
    }

    public function save_tahun_ajaran(Request $request)
    {
        $request->validate([
            'tahun_ajaran' => 'required|unique:tahun_ajaran|max:4',
            'biaya' => 'required|numeric'
        ]);

        TahunAjaran::create($request->all());
        return redirect('/tahun_ajaran')->with('success', 'Data berhasil ditambahkan');
    }

    public function update_tahun_ajaran($id, Request $request)
    {
        $data = TahunAjaran::find($id);

        $data->tahun_ajaran = $request->tahun_ajaran;
        $data->biaya = $request->biaya;
        $data->save();

        return redirect('/tahun_ajaran')->with('success', 'Data berhasil diupdate.');
    }

    public function delete_tahun_ajaran($id)
    {
        TahunAjaran::where('id', $id)
        ->delete();

        return redirect('/tahun_ajaran')->with('success', 'Data berhasil dihapus.');
    }
    // end tahun ajaran

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
