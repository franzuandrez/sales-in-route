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
                                <input type="text" name="id_marca" placeholder="Marca del Producto" value="{{$productos->id_marca}}">
                            </div>

                            <div class="field">
                                <label>Color</label>
                                <input type="text" name="color" placeholder="Color del Producto" value="{{$productos->color}}">
                            </div>
                        </div>
                        <div class="three fields">
                            <div class="field">
                                <label>Empresa</label>
                                <input type="text" name="id_empresa" placeholder="Empresa" value="{{$productos->id_empresa}}">

                            </div>

                            <div class="field">
                                <label>Unidad</label>
                                <input type="text" name="id_unidad" placeholder="Unidad" value="{{$productos->id_unidad}}">
                            </div>

                            <div class="field">
                                <label>Presentacion</label>
                                <input type="text" name="id_presentacion" placeholder="Presentacion" value="{{$productos->id_presentacion}}">
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





