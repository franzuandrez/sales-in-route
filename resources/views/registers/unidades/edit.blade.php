@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        FORMULARIO PARA UNIDADES
                    </h4>

                </div>

                <div class="ui primary segment">

                        {!!Form::open(['route'=>['Register.Unidad.Update', $unidades->id_unidad] ,'class'=>'ui form' ,'method'=>'patch' ])!!}

                        <div class="field">

                                    <label>Descripcion</label>
                                    <input type="text" name="descripcion" placeholder="Descripcion Unidad" value="{{$unidades->descripcion}}" >




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
