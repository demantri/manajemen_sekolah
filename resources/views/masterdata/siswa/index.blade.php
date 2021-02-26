@extends('layout.template')

@section('page-header-title', 'Menu Siswa')
@section('tab_menu', 'Masterdata')
@section('sub_tab_menu', 'Siswa')
@section('tab_name', 'Menu Siswa')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h3 class="card-header-title">Tabel Siswa</h3>
                    <div class="toolbar ml-auto">
                        <a href="/siswa/add" class="btn btn-sm btn-primary">Tambah Data</a>
                    </div>
                </div>
                {{-- <div class="card-header"> --}}
                    <div id="notif">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </div>
                {{-- </div> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- <table class="table"> --}}
                        <table class="table table-striped table-bordered first">
                            <thead class="bg-light">
                                <tr class="border-10">
                                    <th>#</th>
                                    <th>NIS</th>
                                    <th>Foto Siswa</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                    <th>Tahun Ajaran Awal</th>
                                    <th>Status</th>
                                    <th>ID User Level</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->nis}}</td>
                                        <td class="text-center">
                                            <div class="m-r-10">
                                                @if (is_null($item->foto_siswa))
                                                    <img src="{{asset('template/')}}/assets/images/avatar-null.png" alt="user" class="rounded" width="45" height="55">
                                                @else
                                                    <img src="{{ Storage::url($item->foto_siswa) }}" alt="user" class="rounded" width="45" height="55">
                                                @endif
                                            </div>
                                        </td>
                                        <td>{{$item->nama_lengkap}}</td>
                                        <td>{{$item->tempat_lahir}}</td>
                                        <td>{{$item->tanggal_lahir}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>{{$item->kelas}}</td>
                                        <td>{{$item->tahun_ajaran_awal}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>{{$item->user_level}}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="/siswa/{{$item->id}}/edit" class="btn btn-sm btn-space btn-warning">Ubah</a>
                                                <a href="/siswa/delete/{{$item->id}}" onclick="return confirm('Data yang sudah dihapus, tidak dapat dikembalikan. Apakah yakin?')" class="btn btn-sm btn-space btn-secondary">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#notif").fadeTo(2000, 500).slideUp(500, function(){
                $("#notif").slideUp(500);
            });
        })
    </script>
@endsection
