@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        REGISTRO DE MARCAS
                    </h4>

                </div>

                <div class="ui primary segment">

                        {!!Form::open(['route'=>['Register.Pais.Update', $pais->id_pais ] ,'class'=>'ui form' ,'method'=>'patch' ])!!}



                                <div class="fields">

                                    <div class="five  wide field">
                                        <label>CODIGO POSTAL</label>
                                        <input type="text" name="codigo_postal" placeholder="Descripcion del Producto" value="{{$pais->codigo_postal}}">
                                    </div>

                                    <div class="twelve field wide">
                                        <label>Descripcion</label>
                                        <input type="text" name="descripcion" placeholder="Descripcion del Producto" value="{{$pais->descripcion}}">
                                    </div>


                                </div>



                            <button class="ui button icon primary" type="submit">
                                <i class="icon check"></i>
                                Guardar
                            </button>
                            <a href="{{url()->previous()}}">
                                <button class="ui button icon primary" type="button">
                                    <i class="icon backward"></i>
                                    Regresar
                                </button>
                            </a>
                        {!!Form::close() !!}


                </div>


            </div>

        </div>


    </div>


@endsection
