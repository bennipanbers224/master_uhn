@extends('layout.main')
@section('content')
    @if(session('alert'))
        <script>
            alert('{{ session('alert') }}');
        </script>
    @endif

    @if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>
    @endif
    <div style="background:white;" class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-family: 'Lucida Bright', sans-serif; font-size: 24px; font-weight: bold; color: #333;"
                    >Update Data Wisudawan</h1>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @foreach($wisudawan as $wisudawan)
        <section class="content">
            <form action="/update-wisudawan" method="post">
                @csrf
                <input type="hidden" value="{{$wisudawan->id}}" name="id" class="form-control" required/>
                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">Nama</label>
                            <input type="text" value="{{$wisudawan->name}}" name="nama" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example2">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" aria-label="Default select example">
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">Nama Ayah</label>
                            <input type="text" value="{{$wisudawan->ayah_kandung}}" name="ayah" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example2">Nama Ibu</label>
                            <input type="text" value="{{$wisudawan->ibu_kandung}}" name="ibu" class="form-control" required/>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">Fakultas</label>
                            <select name="fakultas" class="form-control" aria-label="Default select example">
                                <option value="Fakultas Hukum">Fakultas Hukum</option>
                                <option value="Fakultas Teknik">Fakultas Teknik</option>
                                <option value="Fakultas Bahasa dan Seni">Fakultas Bahasa dan Seni</option>
                                <option value="Fakultas Keguruan dan Ilmu Pendidikan">Fakultas Keguruan dan Ilmu Pendidikan</option>
                                <option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
                                <option value="Fakultas Peternakan">Fakultas Peternakan</option>
                                <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                                <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                                <option value="Fakultas Hukum">Fakultas Kedokteran</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example2">Program Studi</label>
                            <select name="prodi" class="form-control" aria-label="Default select example">
                                <option value="Ilmu Hukum">Ilmu Hukum</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Sastra Inggris">Sastra Inggris</option>
                                <option value="Musik">Musik</option>
                                <option value="Keguruan dan Pendidikan">Keguruan dan Pendidikan</option>
                                <option value="Pendidikan Bahasa Indonesia">Pendidikan Bahasa Indonesia</option>
                                <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                <option value="Bisnis">Bisnis</option>
                                <option value="Ilmu Administrasi">Ilmu Administrasi</option>
                                <option value="Perpajakan">Perpajakan</option>
                                <option value="Peternakan">Peternakan</option>
                                <option value="Perikanan">Perikanan</option>
                                <option value="Agroteknologi">Agroteknologi</option>
                                <option value="Agribisnis">Agribisnis</option>
                                <option value="Teknik Pertanian">Teknik Pertanian</option>
                                <option value="Fakultas Hukum">Fakultas Hukum</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Ilmu Politik">Ilmu Politik</option>
                                <option value="Ilmu Administrasi">Ilmu Administrasi</option>
                                <option value="Administrasi Perpajakan">Administrasi Perpajakan</option>
                                <option value="Pendidikan Kedokteran">Pendidikan Kedokteran</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">Nomor Induk Mahasiswa</label>
                            <input type="number" value="{{$wisudawan->nim}}" name="nim" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example2">Umur</label>
                            <input type="number" value="{{$wisudawan->umur}}" name="umur" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">IPK</label>
                            <input type="text" value="{{$wisudawan->ipk}}" name="ipk" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">Lama Studi</label>
                            <input type="text" value="{{$wisudawan->lama_studi}}" name="lama_studi" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example2">Status Kelulusan</label>
                            <input type="text" value="{{$wisudawan->status_kelulusan}}" name="status_kelulusan" class="form-control" required/>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-primary btn-block mb-4">Update</button>
            </form>
        </section>
        @endforeach
    </div>
@endsection