
@extends('master')

@section('konten')


	<h2> {{$materi->nama}} </h2>
	<p>
		{{$materi->desc}}
	</p>
	<p>
		{{$materi->created_at}}
	</p>
@stop