@extends('layout.template')

@section('page-header-title', 'Menu Kelas')
@section('tab_menu', 'Masterdata')
@section('sub_tab_menu', 'Kelas')
@section('tab_name', 'Menu Kelas')

@section('content')
    <div class="row">
        <div class="col-xl-8 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h3 class="card-header-title">Tabel Kelas</h3>
                    <div class="toolbar ml-auto">
                        {{-- <a href="/kelas/add" class="btn btn-sm btn-primary">Tambah Data</a> --}}
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
                                    <th style="width:15px">#</th>
                                    <th>Kelas</th>
                                    <th style="width:15px" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{'Kelas'}} {{$item->kelas}}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button data-toggle="modal" data-target="#modal-{{$item->id}}" class="btn btn-sm btn-space btn-warning">Ubah</button>
                                                <a href="/kelas/delete/{{$item->id}}" onclick="return confirm('Data yang sudah dihapus, tidak dapat dikembalikan. Apakah yakin?')" class="btn btn-sm btn-space btn-secondary">Hapus</a>
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

        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h3 class="card-header-title">Form Kelas</h3>
                </div>
                <div class="card-body">

                    <form id="form" data-parsley-validate="" novalidate="" method="POST" action="/kelas/save">
                        @csrf

                        <div class="form-group row">
                            <label for="kelas" class="col-3 col-lg-2 col-form-label text-right">Kelas</label>
                            <div class="col-9 col-lg-10">
                                <input id="kelas" type="text" required="" placeholder="Kelas" class="form-control" name="kelas" autocomplete="off">
                                @if ($errors->has('kelas'))
                                    <span class="text-danger">{{ $errors->first('kelas') }}</span>
                                @endif
                            </div>
                        </div>

                        {{-- <hr> --}}
                        <div class="row pt-2 pt-sm-5 mt-1">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                <label class="be-checkbox custom-control"></label>
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <a href="/siswa" class="btn btn-space btn-sm btn-light">Kembali</a>
                                    <button type="submit" class="btn btn-space btn-success btn-sm">Simpan</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('masterdata.kelas.modal_form')

    <script>
        $(document).ready(function() {
            $("#notif").fadeTo(2000, 500).slideUp(500, function(){
                $("#notif").slideUp(500);
            });
        })
    </script>
@endsection
