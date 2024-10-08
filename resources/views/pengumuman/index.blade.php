@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="font-family: 'Lucida Bright', sans-serif; font-size: 24px; font-weight: bold; color: #333;">
            <i class="nav-icon fas fa-info-circle"></i>
            Pengumuman
            </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Table content -->
   <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header"  style="background-color: #235d7e; color: white;">
         <marquee behavior="scroll" direction = "left">
            <h3 class="card-title" style="letter-spacing: 3px;  font-family: 'Lucida Bright', sans-serif; font-size: 20px; font-weight: bold; color: #dfd4d4;">
                Pro Deo et Patria 
                <img src="{{ asset('lte/dist/img/nommensen.png') }}" alt="AdminLTE Logo" style="margin: 0 25px; width: 40px; height: auto;">
                Bagi Tuhan dan Ibu Pertiwi
            </h3>
         </marquee>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Lembaga</th>
              <th>Berita</th>
              <th>Rilis</th>
              <th>Setting
                <a href="/tambah-pengumuman" class="btn btn-success btn-sm" style="margin-left: 10px;">
                  <i class="fas fa-plus"></i> Tambah
                </a>
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Fakultas Kedokteran</td>
              <td>Jadwal Pendaftaran Wisudawan Program Studi S1-Kedokteran</td>
              <td>15/09/2024</td>
            <td class="project-actions text-left">
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
            </td>
            </tr>
            <tr>
              <td>Fakultas Kedokteran</td>
              <td>Pendaftaran studi lanjut Magister bagi mahasiswa berprestasi</td>
              <td>15/09/2024</td>
            <td class="project-actions text-left">
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
            </td>
            </tr>
            <tr>
              <td>Fakultas Teknik</td>
              <td>Batas pendaftaran wisuda program studi Teknik Elektro</td>
              <td>15/09/2024</td>
            <td class="project-actions text-left">
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
            </td>
            </tr>
            <tr>
              <td>Fakultas Teknik</td>
              <td>Batas Pendaftaran wisuda program studi Teknik Mesin</td>
              <td>15/09/2024</td>
            <td class="project-actions text-left">
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
            </td>
            </tr>
            <tr>
              <td>Fakultas Teknik</td>
              <td>Beasiswa studi lanjut magister bagi mahasiswa berprestasi prodi S1-Teknik mesin</td>
              <td>15/09/2024</td>
            <td class="project-actions text-left">
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
            </td>
            </tr>
            <tr>
              <td>Sekolah Vokasi</td>
              <td>Batas Pendaftaran mahasiswa D3/D4 seluruh program studi sekolah vokasi</td>
              <td>15/09/2024</td>
              <td class="project-actions text-left">
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
            </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
              <th>Lembaga</th>
              <th>Berita</th>
              <th>Rilis</th>
              <th>Setting</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
</div>
@endsection