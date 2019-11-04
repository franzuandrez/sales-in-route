@extends('layouts.app')
@section('content')

    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        REGISTRO DE PROVEEDORES
                    </h4>

                </div>

                <div class="ui primary segment">

                    {!! Form::open(['route'=>'Register.Proveedor.Store','class'=> 'ui form', 'method'=>'post'] ) !!}

                        <div class="field">
                            <label>Razon Social</label>
                            <input type="text" name="razon_social" placeholder="Razon Social" >
                        </div>
                        <div class="field">
                            <label>Nit</label>
                            <input type="text" name="nit" placeholder="Numero de Identificacion Tributaria">
                        </div>

                        <div class="field">
                            <label>Direccion Planta</label>
                            <input type="text" name="direccion_planta" placeholder="Direccion Planta">
                        </div>

                        <button class="ui button icon primary" type="submit">
                            <i class="icon check"></i>
                            Guardar
                        </button>
                        <a href="{{route('Proveedor.Index')}}">
                            <button class="ui button icon primary"

                                    type="button">
                                <i class="icon backward"></i>
                                Regresar
                            </button>
                        </a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection





