@extends('layouts.app')
@section('content')
    <form class="ui form">
        <div class="field">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre">
        </div>
        <div class="field">
            <label>Direccion</label>
            <input type="text" name="direccion" placeholder="Direccion">
        </div>
        <button class="ui button icon primary" type="submit">
            <i class="icon check"></i>
            Guardar
        </button>
        <a href="{{route('register.company.index')}}">
            <button class="ui button icon primary"

                    type="button">
                <i class="icon backward"></i>
                Regresar
            </button>
        </a>
    </form>
@endsection
