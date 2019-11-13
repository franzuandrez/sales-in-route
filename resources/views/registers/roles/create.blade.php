@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        REGISTRO ROLES
                    </h4>

                </div>

                <div class="ui primary segment">

                        {!!Form::open(['route'=>'Register.Rol.Store' ,'class'=>'ui form' ,'method'=>'post' ])!!}



                                <div class="fields">

                                    <div class="five  wide field">
                                        <label>Nombre</label>
                                        <input type="text" name="name" placeholder="Nombre del Rol">
                                    </div>

                                    <div class="twelve field wide">
                                        <label>Descripcion</label>
                                        <input type="text" name="descripcion" placeholder="Descripcion del Rol">
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
