@extends('layout.template')

@section('page-header-title', 'Menu Absensi')
@section('tab_menu', 'Absensi')
@section('sub_tab_menu', 'Input Absensi')
@section('tab_name', 'Absensi')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h3 class="card-header-title">Daftar Absensi</h3>
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
                        {{-- <table class="table"> --}}
                        <table class="table table-striped table-bordered first">
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
