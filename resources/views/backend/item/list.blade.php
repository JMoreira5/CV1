<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700' rel='stylesheet' type='text/css'>
<html>

<head> 
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listado item</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            background-size: 2000px;
            background-repeat: no-repeat;
        }
        
    </style>
</head>
</head>

<body background="http://www.worldfortravel.com/wp-content/uploads/2013/07/Mus%C3%A9e-du-Louvre-Inside-View.jpg">

<?php
use App\Http\Controllers\Backend;
?>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('/') }}">Museo</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('items') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado Items</a></li>
                <li><a href="{{ URL::to('item/crear') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Crear nuevo item</a>
            </ul>
        </div>
    </nav>
    @include('flash::message')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            @if (count($items) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Todos los Items
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped item-table">
                            <thead>
                                <th>Imagen:</th>
                                <th>&nbsp;</th>
                                <th>Nombre:</th>
                                <th>&nbsp;</th>
                                <th>Copete:</th>
                                <th>&nbsp;</th>
                                <th>Acciones:</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td><img class="img-rounded" src="/public/item/{{$item->id}}/{{ $item->outstanding_image }}" width="200" height="150"></td>
                                        <td>&nbsp;</td>
                                        <td>{{ $item->name }}</td>
                                        <td>&nbsp;</td>
                                        <td>{{ $item->pompadour }}</td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <a href="{{ route('items.destroy', $item->id) }}" onclick="return confirm('¿Seguro que desea eliminar este Item?')" class="btn btn-danger"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</body>
</html>