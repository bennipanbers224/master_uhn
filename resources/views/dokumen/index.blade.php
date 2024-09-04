@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="font-family: 'Lucida Bright', sans-serif; font-size: 24px; font-weight: bold; color: #333;"
            >Upload Dokumen</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Table content -->
        <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Mahasiswa Calon Wisudawan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>NIM</th>
                        <td>11417020</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>Gabriel Benni Pernadi Panjaitan</td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td>D4 Teknik Rekayasa Perangkat Lunak</td>
                    </tr>
                    <tr>
                        <th>Tanggal Masuk</th>
                        <td>2017-08-07</td>
                    </tr>
                    <tr>
                        <th>Tanggal Lulus</th>
                        <td>2021-08-20</td>
                    </tr>
                    <tr>
                        <th>Lama Studi</th>
                        <td>8 Semester</td>
                    </tr>
                    <tr>
                        <th>Status Pengajuan Dokumen</th>
                        <td>Belum diajukan</td>
                    </tr>
                    </thead>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Upload Dokumen Calon Wisudawan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama file</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Surat Bukti Penyerahan Artefak</td>
                                <td>-</td>
                                <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Upload Dokumen</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Surat Pernyataan PPKHA</td>
                                <td>-</td>
                                <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Upload Dokumen</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Surat Bebas Sanksos/Jam Karya</td>
                                <td>-</td>
                                <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Upload Dokumen</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Surat Pernyataan BAAF</td>
                                <td>-</td>
                                <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Upload Dokumen</button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Poto</td>
                                <td>-</td>
                                <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Upload Dokumen</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
      <!-- /.container-fluid -->
    </section>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload Dokumen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>

    <!-- /.content -->
</div>
@endsection