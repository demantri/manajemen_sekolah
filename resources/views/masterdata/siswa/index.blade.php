@extends('layout.template')

@section('page-header-title', 'Menu Siswa')
@section('tab_menu', 'Masterdata')
@section('sub_tab_menu', 'Siswa')

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

        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Tambah User</h5>
                <div class="card-body">
                    <div id="notif">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </div>

                    <form id="form" data-parsley-validate="" novalidate="" method="POST" action="/user/save">
                        @csrf
                        <div class="form-group row">
                            <label for="user" class="col-3 col-lg-2 col-form-label text-right">User Level</label>
                            <div class="col-9 col-lg-10">
                                <input id="user" type="text" required="" data-parsley-type="user" placeholder="User Level" class="form-control" name="user_level" autocomplete="off">
                                @if ($errors->has('user_level'))
                                    <span class="text-danger">{{ $errors->first('user_level') }}</span>
                                @endif
                            </div>
                        </div>
                        {{-- <hr> --}}
                        <div class="row pt-2 pt-sm-5 mt-1">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                <label class="be-checkbox custom-control">
                                    {{-- <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span> --}}
                                </label>
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-success btn-sm">Simpan</button>
                                </p>
                            </div>
                        </div>
                    </form>
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
