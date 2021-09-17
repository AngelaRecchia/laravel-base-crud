  
@extends('layout.home')

@section('title', 'Add Comic')

@section('content')
    <div class="container mt-2">
        <h2 class="my-4">Add a comic</h2>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-2 form-group row">
                <label for="title" class="col-form-label col-2">Title</label>
                <div class="col-10">
                  <input type="text" name="title" class="form-control" id="title">
                </div>
              </div>
  
              <div class="mb-2 form-group row">
                  <label for="author" class="col-form-label col-2">Author</label>
                  <div class="col-10">
                      <input type="text" name="author" class="form-control" id="author">
                  </div>
              </div>
  
              <div class="mb-2 form-group row">
                  <label for="year" class="col-form-label col-2">Year</label>
                  <div class="col-10">
                      <input type="text" name="year" class="form-control" id="year">
                  </div>
              </div>
  
              <div class="mb-2 form-group row">
                  <label for="image" class="col-form-label col-2">Image</label>
                  <div class="col-10">
                      <input type="text" name="image" class="form-control" id="image">
                  </div>
              </div>
  
              <div class="mb-2 form-group row">
                  <label for="description" class="col-form-label col-2">Description</label>
                  <div class="col-10">
                      <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                  </div>
              </div>

            <div class="mb-2 form-group row">
                <label for="price" class="col-form-label col-2">Price</label>
                <div class="col-10">
                    <input type="text" name="price" class="form-control" id="image">
                </div>
            </div>
  
              <div class="right my-3">
                  <button type="submit" class="btn btn-light">Submit</button>
              </div>
              
          </form>
    </div>
    
@endsection