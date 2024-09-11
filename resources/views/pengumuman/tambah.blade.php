@extends('layout.main')
@section('content')
<!--content wrapper-->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pengumuman</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pengumuman</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Penambahan Pengumuman</h3>
            </div>
           <!-- /.card-header -->
           <div class="card-body">
              <table class="table table-bordered table-hover">
              <thead>
              <tr>
                  <th>Lembaga</th>
                  <td>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Pilih Lembaga</option>
                      <option>Fakultas Teknik</option>
                      <option>Fakultas Hukum</option>
                      <option>Fakultas Bahasa dan Seni</option>
                      <option>Fakultas Keguruan dan Ilmu Pendidikan</option>
                      <option>Fakultas Ilmu Sosial dan Politik</option>
                      <option>FAkultas Peternakan</option>
                    </select>
                  </td>
              </tr>
              <tr>
                  <th>Judul Berita</th>
                  <td>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Berita">
                  </div>
                  </td>
              </tr>
              <tr>
                  <th>Rilis</th>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservation">
                    </div>
                  </td>
              </tr>
              </thead>
              </table>
           </div>
          </div>
       </div>
      </div>
    </div>
  </section>

      <!-- Isi Berita -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Berita
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <textarea id="summernote">
                  Place <em>some</em> <u>text</u> <strong>here</strong>
                </textarea>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
</div>
@endsection


