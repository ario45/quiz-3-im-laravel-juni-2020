extends('layouts.master')

@section('content')
@foreach($artikel as $key => $hasil)
<h2>{{$hasil->judul}}</h2>

<div>
<p> {{$hasil->nama}}</p>
</div>

@endsection