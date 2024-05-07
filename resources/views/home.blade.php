@extends('layouts.app')

@section('page-title','Home')

@section('content')
<h1>Home</h1>

@foreach($comics as $comic)

<ul>
    @foreach($comic as $comicDetails)
    <li>{{$comicDetails}}</li>
    @endforeach
</ul>

@endforeach

@endsection