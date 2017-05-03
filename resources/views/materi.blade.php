
@extends('master')

@section('konten')
	ini materi


	@if(count($materis))
	<ul>
		@foreach($materis as $materi)
			<li> <a href="materi/{{$materi->id}}"> {{ $materi->nama }}</a></li>
		@endforeach
	</ul>
	@endif
@stop