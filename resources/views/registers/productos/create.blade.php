@extends('layouts.app')
@section('content')



    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        REGISTRO DE PRODUCTOS
                    </h4>

                </div>

                <div class="ui primary segment">

                    {!! Form::open(['route'=>'Register.Producto.Store','class'=> 'ui form', 'method'=>'post'] ) !!}

                        <div class="two fields">

                            <div class="field">
                                <label>Marca</label>
                                <input type="text" name="id_marca" placeholder="Marca del Producto">
                            </div>

                            <div class="field">
                                <label>Color</label>
                                <input type="text" name="color" placeholder="Color del Producto">
                            </div>
                        </div>
                        <div class="three fields">
                            <div class="field">
                                <label>Empresa</label>
                                <input type="text" name="id_empresa" placeholder="Empresa">

                            </div>

                            <div class="field">
                                <label>Unidad</label>
                                <input type="text" name="id_unidad" placeholder="Unidad">
                            </div>

                            <div class="field">
                                <label>Presentacion</label>
                                <input type="text" name="id_presentacion" placeholder="Presentacion">
                            </div>

                        </div>

                        <div class="field">
                            <label>Descripcion</label>
                            <input type="text" name="descripcion" placeholder="Desecripcion del Producto">
                        </div>

                        <button class="ui button icon primary" type="submit">
                            <i class="icon check"></i>
                            Guardar
                        </button>
                        <a href="{{route('Producto.Index')}}">
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





