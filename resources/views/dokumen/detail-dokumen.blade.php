@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <iframe src="{{ asset($file) }}" width="100%" height="600px"></iframe>
</div>
@endsection