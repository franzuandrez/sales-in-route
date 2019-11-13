@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        EDITAR PRODUCTO
                    </h4>

                </div>

                <div class="ui primary segment">

                    {!! Form::open(['route'=>['Register.Producto.Update',$productos->id_producto],'class'=> 'ui form', 'method'=>'patch'] ) !!}
                    @csrf

                        <div class="two fields">

                            <div class="field">
                                <label>Marca</label>
                                <select  name="id_marca"  class="ui search dropdown">
                                    @foreach($marcas as $marca)

                                                @if($marca->id_marca == $productos->id_marca)
                                                    <option value="{{$marca->id_marca}}" selected>{{$marca->descripcion}}</option>
                                                    @continue

                                                @else
                                                     <option value="{{$marca->id_marca}}">{{$marca->descripcion}}</option>
                                                @endif
                                    @endforeach
                                </select>
                            </div>


                            <div class="field">
                                <label>Color</label>
                                <input type="text" name="color" placeholder="Color del Producto" value="{{$productos->color}}">
                            </div>
                        </div>
                        <div class="three fields">
                            <div class="field">
                                <label>Empresa</label>
                                <select name="id_empresa" class="ui search dropdown">
                                    @foreach($empresas as $empresa)

                                        @if($empresa->id_empresa == $productos->id_empresa)
                                            <option value="{{$empresa->id_empresa}}" selected>{{$empresa->descripcion}}</option>
                                            @continue

                                        @else
                                            <option value="{{$empresa->id_empresa}}" >{{$empresa->descripcion}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="field">
                                <label>Unidad</label>
                                <select name="id_unidad" class="ui search dropdown">
                                    @foreach($unidades as $unidad)

                                        @if($unidad->id_unidad == $productos->id_unidad)
                                            <option value="{{$unidad->id_unidad}}" selected>{{$unidad->descripcion}}</option>
                                            @continue

                                        @else
                                            <option value="{{$unidad->id_unidad}}">{{$unidad->descripcion}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="field">
                                <label>Presentacion</label>
                                <select name="id_presentacion" class="ui search dropdown">
                                    @foreach($presentaciones as $presentacion)

                                        @if($presentacion->id_presentacion == $productos->id_presentacion)
                                            <option value="{{$presentacion->id_presentacion}}" selected>{{$presentacion->descripcion}}</option>
                                            @continue

                                        @else
                                            <option value="{{$presentacion->id_presentacion}}" >{{$presentacion->descripcion}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>



                        </div>

                        <div class="field">
                            <label>Descripcion</label>
                            <input type="text" name="descripcion" placeholder="Desecripcion del Producto"value="{{$productos->descripcion}}">
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





