@extends('layouts.app')

@section('page-title','Comics details')

@section('content')
<section id="comic">
    <h2 class="text-center text-light py-4">Comic informations</h2>

    <div class="container">
        <div class="row row-cols-2 py-4">
            <div class="col text-center">
                <img src="{{$comic['thumb']}}" alt="" class="mw-100">
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <ul class="list-unstyled my-2">
                    <li class="my-5">
                        <h3 class="text-center">{{$comic['title']}}</h3>
                    </li>
                    <li class="my-5">
                        {{$comic['description']}}
                    </li>
                    <li class="my-5">
                        <strong>Series:</strong> {{$comic['series']}}
                    </li>
                    <li class="my-5">
                        <strong>Type:</strong> {{$comic['type']}}
                    </li>
                    <li class="my-5">
                        <strong>Price:</strong> {{$comic['price']}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection