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
                        {!!Form::open(['route'=>'Register.Company.Store' ,'class'=>'ui form' ,'method'=>'post' ])!!}


                            <div class="two fields">
                                <div class="field">
                                    <label>Codigo Empresa</label>
                                    <input type="text" name="id_empresa" placeholder="Codigo Identificacion Empresa">

                                </div>
                                <div class="field">
                                    <label>Codigo Pais</label>
                                    <input type="text" name="id_pais" placeholder="Codigo Postal Pais">

                                </div>

                            </div>


                            <div class="field">
                                <label>Descripcion</label>
                                <input type="text" name="descripcion" placeholder="Descripcion">
                            </div>
                            <div class="field">
                                <label>Direccion</label>
                                <input type="text" name="direccion" placeholder="Direccion">
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
