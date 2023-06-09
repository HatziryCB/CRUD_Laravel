
@extends('layout')

@section('Agregar', 'Crear nuevo registro')

@section('content')
    <div class="card">
        <h3 class="card-header">Agregar nuevo transporte</h3>
        <div class="card-body">
            <p class="card-text">
                <form action="{{route('transporte.store')}}" method="POST">
                    @csrf
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                    <label for="">Razón social</label>
                    <input type="text" name="razon_social" class="form-control">
                    <br>
                    <a href="{{route("transporte.index")}}" class="btn btn-secondary btn-sm">
                        <span class="bi bi-arrow-return-left"></span>  Regresar
                    </a>
                    <button class="btn btn-primary btn-sm">
                        <span class="bi bi-plus-circle"></span>  Agregar
                    </button>
                </form>
            </p>
        </div>
    </div>
@endsection
