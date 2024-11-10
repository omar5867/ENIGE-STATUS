@extends('layouts.app')
  
@section('title', 'Añadir Punto')
  
@section('contents')
    <h1 class="mb-0">Añadir Dato en el punto {{ $idpunto }}</h1>
    <hr />
    <form action="{{ route('puntos.storedata', $idpunto) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="vibracion" class="form-control" placeholder="Vibración">
            </div>
            <div class="col">
                <input type="text" name="temperatura" class="form-control" placeholder="Temperatura">
            </div>
            <div class="col">
                <input type="text" name="humedad" class="form-control" placeholder="Humedad">
            </div>
            <div class="col">
                <input type="text" name="corriente" class="form-control" placeholder="Corriente">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div>
        </div>
    </form>
@endsection