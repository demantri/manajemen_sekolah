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

                    <form id="form" data-parsley-validate="" novalidate="" method="POST" action="/siswa/{{$siswa->id}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            {{-- form kiri --}}
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <input type="hidden" value="{{$siswa->id}}">

                                <div class="form-group row">
                                    <label for="nis" class="col-3 col-lg-2 col-form-label text-right">NIS</label>
                                    <div class="col-9 col-lg-10">
                                        <input type="text" id="nis" class="form-control" name="nis" placeholder="Nomor Induk Siswa" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{$siswa->nis}}">
                                        @if ($errors->has('nis'))
                                            <span class="text-danger">{{ $errors->first('nis') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_lengkap" class="col-3 col-lg-2 col-form-label text-right">Nama Lengkap</label>
                                    <div class="col-9 col-lg-10">
                                        <input id="nama_lengkap" type="text" required="" placeholder="Nama Lengkap" class="form-control" name="nama_lengkap" autocomplete="off" value="{{$siswa->nama_lengkap}}">
                                        @if ($errors->has('nama_lengkap'))
                                            <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-3 col-lg-2 col-form-label text-right">Tempat Lahir</label>
                                    <div class="col-9 col-lg-10">
                                        <input id="tempat_lahir" type="text" required="" placeholder="Tempat Lahir" class="form-control" name="tempat_lahir" autocomplete="off" value="{{$siswa->tempat_lahir}}">
                                        @if ($errors->has('tempat_lahir'))
                                            <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-3 col-lg-2 col-form-label text-right">Tanggal Lahir</label>
                                    <div class="col-9 col-lg-10">
                                        <input id="tanggal_lahir" type="date" required="" placeholder="Tanggal Lahir" class="form-control" name="tanggal_lahir" autocomplete="off" value="{{$siswa->tanggal_lahir}}">
                                        @if ($errors->has('tanggal_lahir'))
                                            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_telp_siswa" class="col-3 col-lg-2 col-form-label text-right">No. Telp Siswa</label>
                                    <div class="col-9 col-lg-10">
                                        <input id="no_telp_siswa" type="text" required="" placeholder="No. Telp Siswa" class="form-control" name="no_telp_siswa" autocomplete="off" value="{{$siswa->no_telp_siswa}}">
                                        @if ($errors->has('no_telp_siswa'))
                                            <span class="text-danger">{{ $errors->first('no_telp_siswa') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-3 col-lg-2 col-form-label text-right">Alamat</label>
                                    <div class="col-9 col-lg-10">
                                        <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control" placeholder="Alamat Lengkap" autocomplete="off">{{htmlspecialchars($siswa->alamat)}}</textarea>
                                        @if ($errors->has('alamat'))
                                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group row">
                                    <label for="nama_ayah" class="col-3 col-lg-2 col-form-label text-right">Orang tua</label>
                                    <div class="col-9 col-lg-5">
                                        <input id="nama_ayah" type="text" required="" placeholder="Nama Ayah" class="form-control" name="nama_ayah" autocomplete="off" value="{{$siswa->nama_ayah}}">
                                        @if ($errors->has('nama_ayah'))
                                            <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-9 col-lg-5">
                                        <input id="nama_ibu" type="text" required="" placeholder="Nama Ibu" class="form-control" name="nama_ibu" autocomplete="off" value="{{$siswa->nama_ibu}}">
                                        @if ($errors->has('nama_ibu'))
                                            <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_telp_ayah" class="col-3 col-lg-2 col-form-label text-right">No. Telp</label>
                                    <div class="col-9 col-lg-5">
                                        <input id="no_telp_ayah" type="text" required="" placeholder="No. Telp Ayah" class="form-control" name="no_telp_ayah" autocomplete="off" value="{{$siswa->no_telp_ayah}}">
                                        @if ($errors->has('no_telp_ayah'))
                                            <span class="text-danger">{{ $errors->first('no_telp_ayah') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-9 col-lg-5">
                                        <input id="no_telp_ibu" type="text" required="" placeholder="No. Telp Ibu" class="form-control" name="no_telp_ibu" autocomplete="off" value="{{$siswa->no_telp_ibu}}">
                                        @if ($errors->has('no_telp_ibu'))
                                            <span class="text-danger">{{ $errors->first('no_telp_ibu') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- form kanan --}}
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group row">
                                    <label for="kelas" class="col-3 col-lg-2 col-form-label text-right">Kelas</label>
                                    <div class="col-9 col-lg-10">
                                        <select name="id_kelas" id="kelas" class="form-control">
                                            <option value="">Pilih Kelas</option>
                                            @foreach ($kelas as $item)
                                            <option value="{{$item->id}}"
                                                <?php if($siswa->id_kelas == $item->id){echo 'selected';}?>>Kelas {{$item->kelas}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('kelas'))
                                            <span class="text-danger">{{ $errors->first('kelas') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tahun_ajaran_awal" class="col-3 col-lg-2 col-form-label text-right">Tahun Ajaran</label>
                                    <div class="col-9 col-lg-10">
                                        <select name="id_tahun_ajaran_awal" id="tahun_ajaran_awal" class="form-control">
                                            <option value="">Pilih Tahun Ajaran</option>
                                            @foreach ($tahun_ajaran as $item)
                                            <option value="{{$item->id}}"
                                                <?php if($siswa->id_tahun_ajaran_awal == $item->id){echo 'selected';}?>>{{$item->tahun_ajaran}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('tahun_ajaran_awal'))
                                            <span class="text-danger">{{ $errors->first('tahun_ajaran_awal') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-3 col-lg-2 col-form-label text-right">Status</label>
                                    <div class="col-9 col-lg-10">
                                        <select name="id_status" id="status" class="form-control">
                                            <option value="">Pilih Status</option>
                                            @foreach ($status as $item)
                                            <option value="{{$item->id}}"
                                                <?php if($siswa->id_status == $item->id){echo 'selected';}?>>{{$item->status}}</option>
                                            @endforeach
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
                                            <option value="{{$item->id}}"<?php if($siswa->id_user == $item->id){echo 'selected';}?>>{{$item->user_level}}</option>
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
                                        @if (is_null($siswa->foto_siswa))
                                            <img style="padding-top: 15px" src="{{asset('template/')}}/assets/images/avatar-null.png" height="150" width="150" alt="" />
                                        @else
                                            <img style="padding-top: 15px" src="{{ Storage::url($siswa->foto_siswa) }}" height="150" width="150" alt="" />
                                        @endif

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
