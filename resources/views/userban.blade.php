@extends('layout')

@section('title', 'home')

@section('content')

<h1> Hoi </h1>

	@foreach ($userban as $row)

	<li>{{$row->id}}</li>
	<li>{{$row->firstname}}</li>
	<li>{{$row->lastname}}</li>
	<li>{{$row->description}}</li>

	@endforeach

@endsection