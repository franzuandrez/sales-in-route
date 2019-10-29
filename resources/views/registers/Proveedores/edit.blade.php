@extends('layouts.app')
@section('content')

    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        EDITAR PROVEEDOR
                    </h4>

                </div>

                <div class="ui primary segment">

                    {!! Form::open(['route'=>['Register.Proveedor.Update',$proveedores->id_proveedor],'class'=> 'ui form', 'method'=>'patch'] ) !!}

                        <div class="field">
                            <label>Razon Social</label>
                            <input type="text" name="razon_social" placeholder="Razon Social" value="{{$proveedores->razon_social}}" >
                        </div>
                        <div class="field">
                            <label>Nit</label>
                            <input type="text" name="nit" placeholder="Numero de Identificacion Tributaria" value=" {{$proveedores->nit}}">
                        </div>

                        <div class="field">
                            <label>Direccion Planta</label>
                            <input type="text" name="direccion_planta" placeholder="Direccion Planta" value="{{$proveedores->direccion_planta}}">
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





