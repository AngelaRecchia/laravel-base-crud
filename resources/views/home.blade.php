@php
    $fields = ['title', 'author', 'year', 'description', 'price'];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Comics</title>
</head>
<body>
    <div id="comics">
        
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bx" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316l-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4s4 1.794 4 4s-1.794 4-4 4z" fill="currentColor"></path><path d="M12 10c-1.084 0-2 .916-2 2s.916 2 2 2s2-.916 2-2s-.916-2-2-2z" fill="currentColor"></path></svg>
                                
                                </div>
                            </a>

                            <a href="{{route('comics.edit', $comic->id)}}">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--whh" width="32.07" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1025 1023"><path d="M896.428 1023h-768q-53 0-90.5-37.5T.428 895V127q0-53 37.5-90t90.5-37h576l-128 127h-384q-27 0-45.5 19t-18.5 45v640q0 27 19 45.5t45 18.5h640q27 0 45.5-18.5t18.5-45.5V447l128-128v576q0 53-37.5 90.5t-90.5 37.5zm-576-464l144 144l-208 64zm208 96l-160-159l479-480q17-16 40.5-16t40.5 16l79 80q16 16 16.5 39.5t-16.5 40.5z" fill="currentColor"></path></svg>
                                </div>
                            </a>

                            <form action="{{ route ('comics.destroy',  $comic->id) }} " method="post"  class="d-inline-block" name="delete">
                                @csrf
                                @method('DELETE')

                                <div class="icon" onClick="document.forms['delete'].submit();">
                                    <a href="{{route('comics.destroy', $comic->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--zmdi" width="25.34" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 304 384"><path d="M21 341V85h256v256q0 18-12.5 30.5T235 384H64q-18 0-30.5-12.5T21 341zM299 21v43H0V21h75L96 0h107l21 21h75z" fill="currentColor"></path></svg>
                                    </a>
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
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="currentColor"></path></svg>
                </div>
            </a>                
            
        </div>
    </div>
</body>
</html>