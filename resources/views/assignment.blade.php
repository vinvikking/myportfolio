@extends('layout')

@section('title', 'home')

@section('content')

<h1> Hoi </h1>

	@foreach ($assigments as $row)

	<li>{{$row->project_name}}</li>
	<li>{{$row->description}}</li>
	<li>{{$row->image_url}}</li>

	@endforeach

@endsection