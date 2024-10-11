@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <br>
        <div class="card text-center">
            <div class="card-header">
                <h3>{{$data->judul}}</h3>
                <p>Tanggal Publish : {{$data->tanggal}}</p>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Isi:</h5>
            <br>
            <p class="card-text">{!! $data->content !!}</p>
        </div>
</div>

@endsection