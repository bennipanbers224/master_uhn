@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="font-family: 'Lucida Bright', sans-serif; font-size: 24px; font-weight: bold; color: #333;"
            >Mahasiswa</h1>
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
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th>Umur</th>
                    <th>Status Nikah</th>
                    <th>IPS 1</th>
                    <th>IPS 2</th>
                    <th>IPS 3</th>
                    <th>IPS 4</th>
                    <th>IPS 5</th>
                    <th>IPS 6</th>
                    <th>IPS 7</th>
                    <th>IPS 8</th>
                    <th>IPK</th>
                    <th>Status Kelulusan</th>
                
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($dataMahasiswa as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->jenis_kelamin}}</td>
                        <td>{{$student->status}}</td>
                        <td>{{$student->umur}}</td>
                        <td>{{$student->status_nikah}}</td>
                        <td>{{$student->ips1}}</td>
                        <td>{{$student->ips2}}</td>
                        <td>{{$student->ips3}}</td>
                        <td>{{$student->ips4}}</td>
                        <td>{{$student->ips5}}</td>
                        <td>{{$student->ips6}}</td>
                        <td>{{$student->ips7}}</td>
                        <td>{{$student->ips8}}</td>
                        <td>{{$student->ipk}}</td>
                        <td>{{$student->status_kelulusan}}</td>
                    </tr>
                    @endforeach
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
    <!-- /.content -->
</div>
@endsection