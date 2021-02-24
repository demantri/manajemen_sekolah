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
                    <h5 class="card-header-title">Tabel Siswa</h5>
                    <div class="toolbar ml-auto">
                        <a href="/siswa/add" class="btn btn-sm btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-10">
                                    <th>#</th>
                                    <th>NIS</th>
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
                                        <td>{{$item->user_level}}</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-sm btn-space btn-warning">Ubah</a>
                                            <a href="" class="btn btn-sm btn-space btn-secondary">Hapus</a>
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
