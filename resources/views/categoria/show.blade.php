@extends('layouts.plantilla')
@section('titulomain')
<a href="{{ route('categoria.index') }}">Categorías</a> / 
<span>Categoría {{ $categoria->nombre }}</span>
@endsection
@section('contenido')

<section class="container-cards">

    <div class="card-show">
        <div class="cabecera">            
             <h2>{{$categoria->nombre}}</h2>                      
               
        </div>
        <p> {{$categoria->descripcion}}</p>
    </div>

</section>

@endsection