@extends('layout.template')

@section('page-header-title', 'Masterdata')
@section('tab_menu', 'Siswa')
@section('sub_tab_menu', 'Form Siswa')
@section('tab_name', 'Tambah Siswa')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h3 class="card-header-title">Tabel Siswa</h3>
                    {{-- <div class="toolbar ml-auto">
                        <a href="/siswa/add" class="btn btn-sm btn-primary">Tambah Data</a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div id="notif">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </div>

                    <form id="form" enctype="multipart/form-data" data-parsley-validate="" novalidate="" method="POST" action="/siswa/save">
                        @csrf

                        <div class="row">
                            {{-- form kiri --}}
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group row">
                                    <label for="nis" class="col-3 col-lg-2 col-form-label text-right">Nomor Induk Siswa</label>
                                    <div class="col-9 col-lg-10">
                                        {{-- <input id="nik" type="number" min="0" required="" placeholder="Nomor Induk Siswa" class="form-control" name="nik" autocomplete="off"> --}}
                                        <input type="text" id="nis" class="form-control" name="nis" placeholder="Nomor Induk Siswa" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                        @if ($errors->has('nis'))
                                            <span class="text-danger">{{ $errors->first('nis') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_lengkap" class="col-3 col-lg-2 col-form-label text-right">Nama Lengkap</label>
                                    <div class="col-9 col-lg-10">
                                        <input id="nama_lengkap" type="text" required="" placeholder="Nama Lengkap" class="form-control" name="nama_lengkap" autocomplete="off">
                                        @if ($errors->has('nama_lengkap'))
                                            <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-3 col-lg-2 col-form-label text-right">Tempat Lahir</label>
                                    <div class="col-9 col-lg-10">
                                        <input id="tempat_lahir" type="text" required="" placeholder="Tempat Lahir" class="form-control" name="tempat_lahir" autocomplete="off">
                                        @if ($errors->has('tempat_lahir'))
                                            <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-3 col-lg-2 col-form-label text-right">Tanggal Lahir</label>
                                    <div class="col-9 col-lg-10">
                                        <input id="tanggal_lahir" type="date" required="" placeholder="Tanggal Lahir" class="form-control" name="tanggal_lahir" autocomplete="off">
                                        @if ($errors->has('tanggal_lahir'))
                                            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-3 col-lg-2 col-form-label text-right">Alamat</label>
                                    <div class="col-9 col-lg-10">
                                        {{-- <input id="alamat" type="text" required="" placeholder="Alamat lengkap" class="form-control" name="alamat" autocomplete="off"> --}}
                                        <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control" placeholder="Alamat Lengkap" autocomplete="off"></textarea>
                                        @if ($errors->has('alamat'))
                                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kelas" class="col-3 col-lg-2 col-form-label text-right">Kelas</label>
                                    <div class="col-9 col-lg-10">
                                        {{-- <input id="kelas" type="text" required="" placeholder="Kelas" class="form-control" name="kelas" autocomplete="off"> --}}
                                        <select name="kelas" id="kelas" class="form-control">
                                            <option value="">Pilih Kelas</option>
                                            @for ($i = 1; $i <= 6; $i++)
                                            <option value="{{$i}}">{{'Kelas'. '-' .$i}}</option>
                                            @endfor
                                        </select>
                                        @if ($errors->has('kelas'))
                                            <span class="text-danger">{{ $errors->first('kelas') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- form kanan --}}
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group row">
                                    <label for="tahun_ajaran_awal" class="col-3 col-lg-2 col-form-label text-right">Tahun Ajaran</label>
                                    <div class="col-9 col-lg-10">
                                        <select name="tahun_ajaran_awal" id="tahun_ajaran_awal" class="form-control">
                                            <option value="">Pilih Tahun Ajaran</option>
                                            @for ($i = date('Y'); $i <= date('Y'); $i++)
                                            <option value="{{$i}}">{{ $i.'/'.date('Y', strtotime('1 year'))}}</option>
                                            @endfor
                                        </select>
                                        @if ($errors->has('tahun_ajaran_awal'))
                                            <span class="text-danger">{{ $errors->first('tahun_ajaran_awal') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-3 col-lg-2 col-form-label text-right">Status</label>
                                    <div class="col-9 col-lg-10">
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Pilih Status</option>
                                            {{-- blm buat master nya --}}
                                            <option value="1">Siswa Baru</option>
                                            <option value="2">Siswa Pindahan</option>
                                            <option value="3">Siswa Tidak Aktif</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_user" class="col-3 col-lg-2 col-form-label text-right">User Level</label>
                                    <div class="col-9 col-lg-10">
                                        <select name="id_user" id="id_user" class="form-control">
                                            <option value="">Pilih User Level</option>
                                            @foreach ($user as $item)
                                            <option value="{{$item->id}}">{{$item->user_level}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('id_user'))
                                            <span class="text-danger">{{ $errors->first('id_user') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="foto_siswa" class="col-3 col-lg-2 col-form-label text-right">Foto Siswa</label>
                                    <div class="col-9 col-lg-10">
                                        <input id="foto_siswa" type="file" required="" placeholder="Foto Siswa" class="form-control" name="foto_siswa" autocomplete="off">
                                        @if ($errors->has('foto_siswa'))
                                            <span class="text-danger">{{ $errors->first('foto_siswa') }}</span>
                                        @endif
                                    </div>
                                </div>
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

    <script>
        $(document).ready(function() {
            $("#notif").fadeTo(2000, 500).slideUp(500, function(){
                $("#notif").slideUp(500);
            });
        })
    </script>
@endsection
