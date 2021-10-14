<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
        
     
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                  Bienvenidos!...
                </div>
                <div class="row">
                    <form action="{{ route('personas.cargar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($message = Session::get('mensaje'))
                        <p> {{ $message }}</p>
                    @endif
                 <input type="file" name="file">
                 <button>Importar personas</button>

                    </form>
                </div>

                

                <div class="links">                   
                   

                    <a href="{{ route('personas.index')}}">Cargar</a>  

                    <a href="{{ route('personas.list')}}">Listado</a>  
                </div>
        </div>
    </body>
</html>