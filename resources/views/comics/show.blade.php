@extends('layout.home')

@section('title', $comic->title)

@section('content')

    <div class="container">
       
        <a href="{{route('comics.index')}}">
            <div class="icon back">
                <i class="fas fa-angle-left"></i>
            </div>
        </a>
        
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ $comic->image }}" alt="{{ $comic->title }}" class="poster">
            </div>

            <div class="col-md-6">
                <h1 class="mb-5">{{$comic->title}}</h1>
                <div class="author">{{$comic->author}}</div>
                <div class="year">{{$comic->year}}</div>
                <blockquote class="mt-5 px-5 ">{{ $comic->description }}</blockquote>
            </div>
        </div>

    </div>

@endsection