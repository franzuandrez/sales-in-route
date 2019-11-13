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
                                <select  name="id_marca"  class="ui search dropdown">
                                    @foreach($marcas as $marca)
                                            <option value="{{$marca->id_marca}}">{{$marca->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="field">
                                <label>Color</label>
                                <input type="text" name="color" placeholder="Color del Producto">
                            </div>
                        </div>
                        <div class="three fields">
                            <div class="field">
                                <label>Empresa</label>
                                <select name="id_empresa" class="ui search dropdown">
                                    @foreach($empresas as $empresa)
                                            <option value="{{$empresa->id_empresa}}" >{{$empresa->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="field">
                                <label>Unidad</label>
                                <select name="id_unidad" class="ui search dropdown">
                                    @foreach($unidades as $unidad)

                                            <option value="{{$unidad->id_unidad}}">{{$unidad->descripcion}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="field">
                                <label>Presentacion</label>
                                <select name="id_presentacion" class="ui search dropdown">
                                    @foreach($presentaciones as $presentacion)


                                            <option value="{{$presentacion->id_presentacion}}" >{{$presentacion->descripcion}}</option>

                                    @endforeach
                                </select>
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





