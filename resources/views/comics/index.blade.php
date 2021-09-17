@extends('layout.home')
@section('title', 'Comics')

@section('content')
    <div id="comics">
        
        @if (session('edit'))
        <div class="alert alert-success">
          {{ session('edit') }}
        </div>
        @endif
        @if (session('deleted'))
        <div class="alert alert-success">
          {{ session('deleted') }}
        </div>
        @endif

        <table class="table table-striped table-dark vh-100 mb-0">
          <thead>
            <tr>
                @foreach ($fields as $field)
                    <th scope="col">{{ucfirst($field)}}</th>
                @endforeach
                <th></th>
            </tr>
          </thead>
          <tbody>

                @if(!count($comics))
                <tr>
                    <td colspan="100%" class="text-center pt-5">There are no comics to show</td>
                </tr>
                @endif
                @foreach($comics as $comic)
                <tr>
                
                    @foreach($fields as $field)
                    <td>
                        {{$comic->$field}}
                    </td>                  
                    @endforeach
                    <td>
                        <div class="btn-cont d-flex flex-column">

                            <a href="{{route('comics.show', $comic->id)}}">
                                <div class="icon">
                                    <i class="far fa-eye"></i>
                                </div>
                            </a>

                            <a href="{{route('comics.edit', $comic->id)}}">
                                <div class="icon">
                                    <i class="far fa-edit"></i>
                                </div>
                            </a>

                            <form action="{{ route ('comics.destroy',  $comic->id) }} " method="post"   class="d-inline-block" name="delete">
                                @csrf
                                @method('DELETE')

                                <div class="icon" onClick="document.forms['delete'].submit();">
                                    <i class="fas fa-trash"></i>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
          </tbody>
        </table>

        <div id="row-add">
            <a href="{{route('comics.create')}}">
                <div class="icon create">
                    <i class="fas fa-plus"></i>
                </div>
            </a>
        </div>
    </div>
@endsection