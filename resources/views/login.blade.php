<!--Extens hacia layouts app, que es donde esta la principal-->
@extends('layouts.app')

<!--Que muestre el contenido en la seccion content-->
@section('content')
    <h1>Proyecto de practica sin fines de lucro</h1>
    <div class="centerContent">
        <div class="card">
            <div class="card-body">
                <img class="imageStyle" src="{{ asset('images/BBVA.png') }}">
                <h1>Hola de nuevo</h1>
                <h1>{{ $nombre }}</h1>
                <img class="avatar" src="{{ asset('images/hombre.jpg!d') }}">
            </div>
        </div>
    </div>
@endsection
