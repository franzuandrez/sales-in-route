@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        REGISTRO DE EMPRESAS
                    </h4>

                </div>

                <div class="ui primary segment">
                    {!!Form::open(['route'=>['Register.Company.Update',$companies->id_empresa] ,'class'=>'ui form' , 'method'=>'patch'])!!}


                    <div class="two fields">
                        <div class="field">
                            <label>Codigo Empresa</label>
                            <input type="text" name="id_empresa" placeholder="Codigo Identificacion Empresa" value="{{$companies->id_empresa}}">

                        </div>
                        <div class="field">
                            <label>Codigo Pais</label>
                            <input type="text" name="id_pais" placeholder="Codigo Postal Pais" value="{{$companies->id_pais}}">

                        </div>

                    </div>


                    <div class="field">
                        <label>Descripcion</label>
                        <input type="text" name="descripcion" placeholder="Nombre" value="{{$companies->descripcion}}">
                    </div>
                    <div class="field">
                        <label>Direccion</label>
                        <input type="text" name="direccion_planta" placeholder="Direccion" value="{{$companies->direccion_planta}}">
                    </div>


                    <button class="ui button icon primary" type="submit">
                        <i class="icon check"></i>
                        Guardar
                    </button>
                    <a href="{{route('Company.Index')}}">
                        <button class="ui button icon primary"

                                type="button">
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
