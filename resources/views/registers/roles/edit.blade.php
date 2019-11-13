@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        EDCION DE ATRIBUTOS DE ROLES
                    </h4>

                </div>

                <div class="ui primary segment">

                        {!!Form::open(['route'=>['Register.Rol.Update', $roles->id] ,'class'=>'ui form' ,'method'=>'patch' ])!!}



                                <div class="fields">

                                    <div class="five  wide field">
                                        <label>Nombre</label>
                                        <input type="text" name="name" placeholder="Nombre del Rol" value="{{$roles->name}}">
                                    </div>

                                    <div class="twelve field wide">
                                        <label>Descripcion</label>
                                        <input type="text" name="descripcion" placeholder="Descripcion del Rol" value="{{$roles->descripcion}}">
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
