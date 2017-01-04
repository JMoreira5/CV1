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

    <title>Creando item</title>

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

        .fa-btn {
            margin-right: 6px;
        }
        
        form {
            margin-top: 200px;
        }
    </style>
</head>
</head>

<body background="https://upload.wikimedia.org/wikipedia/commons/f/fc/Sues_skeleton.jpg">

<?php
use App\Http\Controllers\Backend\ItemsController;
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
            {!! Form::open(['route' => 'backend.item.store', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nuevo Item
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre:', [class='col-sm-3 control-label']) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('name', 'null', ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                                </div>
                            </div>
                            <br />    
                            <div class="form-group">
                                {!! Form::label('pompadour', 'Copete:', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('pompadour', 'null', ['class' =>'form-control', 'placeholder' => 'Copete']) !!}
                                </div>
                            </div>
                            <br />
                            <div class="form-group">
                                {!! Form::label('description', 'Descripci&oacute;n', ['class' => 'col-sm-3 control-label']) !!}   
                                <div class="col-sm-6">
                                    {!! Form::text('description', 'null', ['class' => 'form-control', 'placeholder' => 'Descripci&oacute;n']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                 @if( ! isset($items->outstanding_image))
                                    <div class="col-sm-6">
                                        {!! Form::file('outstanding_image', null, array['class' => 'outstanding_image']) !!}
                                    </div>
                                @else
                                    <div class="col-sm-6">
                                        <img class="thumbnail" src="/img/items/{{ $items->id }}/{{ $items->outstanding_image }}" width="150" height="100">
                                        {!! Form::text('outstanding_image', $items->outstanding_image, array['class' => 'image hidden']) !!}
                                        {!! Form::file('outstanding_image', null, array['class' => 'outstanding_image']) !!}
                                    </div>
                                @endif
                            </div>
                            <br />
                            <div class="col-sm-offset-3 col-sm-6">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary fa fa-save', 'aria-hidden' => 'true', 'href' => 'items']) !!}
                            </div>
                        </div>
                    </div>
                </div>                
            {!! Form::close() !!}

<p>&copy; 2016 - Julian Moreira</p>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>