<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

        <!-- Styles -->
       
       
    </head>
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="'+title+'" />' );
    } );
    
    // DataTable
    var table = $('#example').DataTable({
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
    
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
    
});
    
      

    </script>
    <body>
       
            <div class="content">
                <div class="title m-b-md">
                  Bienvenidos!...
                </div>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Nacionalidad</th>
                            <th>Fecha</th>
                            <th>Sexo</th>
                           
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ( $Personas as $perlis )
                            
                                           
                        <tr>
                            <td>{{$perlis->nombre}}</td>
                            <td>{{$perlis->apellido}}</td>
                            <td>{{$perlis->nacionalidad}}</td>
                            <td>{{$perlis->fechaContrato}}</td>
                            <td>{{$perlis->sexo}}</td>
                          
                        </tr>
                        @endforeach  
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Nacionalidad</th>
                            <th>Fecha</th>
                            <th>Sexo</th>
                           
                        </tr>
                    </tfoot>
                </table>



                

                <div class="links">                   
                    <a href="{{ route('personas.index')}}">Cargar</a>  
                </div>
        </div>

        
    </body>
    
</html>
