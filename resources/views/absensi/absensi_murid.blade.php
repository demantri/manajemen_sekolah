@extends('layout.template')

@section('page-header-title', 'Absensi Murid')
@section('tab_menu', 'Absensi')
@section('sub_tab_menu', 'List Absensi')
@section('tab_name', 'Absensi')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h3 class="card-header-title">List Absensi</h3>
                    <div class="toolbar ml-auto">
                        {{-- <a href="/siswa/add" class="btn btn-sm btn-primary">Tambah Data</a> --}}
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
                        <table class="table table-striped table-bordered first">
                            <thead class="bg-light">
                                <tr class="border-10">
                                    <th>#</th>
                                    <th>NIS</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jam Masuk</th>
                                    <th>Jam Keluar</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($list as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->nis}}</td>
                                    <td>{{$item->nama_lengkap}}</td>
                                    <td>{{$item->jam_masuk}}</td>
                                    <td>{{$item->jam_keluar}}</td>
                                    <td class="text-center">
                                        <select name="" id="" class="form-control ">
                                            <option value="">Hadir</option>
                                            <option value="">Alfa</option>
                                            <option value="">Izin</option>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-primary">Detail</button>
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

    <!-- <script>
        $(document).ready(function() {
            $("#notif").fadeTo(2000, 500).slideUp(500, function(){
                $("#notif").slideUp(500);
            });
        })
    </script> -->
@endsection
