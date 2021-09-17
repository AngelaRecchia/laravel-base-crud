@php
   $pg_title = 'Edit ' . $comic->title;
@endphp
@extends('layout.home')

@section('title', $pg_title)

@section('content')
    <div class="container">
        <h2 class="my-3">Edit {{$comic->title }}</h2>

        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-2 form-group row">
              <label for="title" class="col-form-label col-2">Title</label>
              <div class="col-10">
                <input type="text" name="title" class="form-control" id="title" value="{{ $comic->title }}">
              </div>
            </div>

            <div class="mb-2 form-group row">
                <label for="author" class="col-form-label col-2">Author</label>
                <div class="col-10">
                    <input type="text" name="author" class="form-control" id="author" value="{{ $comic->author }}">
                </div>
            </div>

            <div class="mb-2 form-group row">
                <label for="year" class="col-form-label col-2">Year</label>
                <div class="col-10">
                    <input type="text" name="year" class="form-control" id="year" value="{{ $comic->year }}">
                </div>
            </div>

            <div class="mb-2 form-group row">
                <label for="image" class="col-form-label col-2">Image</label>
                <div class="col-10">
                    <input type="text" name="image" class="form-control" id="image" value="{{ $comic->image }}">
                </div>
            </div>

            <div class="mb-2 form-group row">
                <label for="descr" class="col-form-label col-2">Description</label>
                <div class="col-10">
                    <textarea name="descr" id="descr" cols="30" rows="8" class="form-control">{{ $comic->description }}</textarea>
                </div>
            </div>

            <div class="mb-2 form-group row">
                <label for="price" class="col-form-label col-2">Price</label>
                <div class="col-10">
                    <input type="text" name="price" class="form-control" id="image" value="{{ $comic->image }}">
                </div>
            </div>

            <div class="right my-3">
                <button type="submit" class="btn btn-light">Submit</button>
            </div>
            
          </form>
    </div>
    
@endsection