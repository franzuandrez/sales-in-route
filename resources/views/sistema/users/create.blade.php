@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">

            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        REGISTRO DE USUARIOS
                    </h4>
                </div>
                <div class="ui primary segment">
                    {!!Form::open(['route'=>'sistema.users.store' ,'class'=>'ui form' ,'method'=>'post' ])!!}

                    <div class="field">
                        <div class="fields">
                            <div class="three wide field">
                                <label>USERNAME</label>
                                <input type="text" name="name" placeholder="Usuario">

                            </div>
                            <div class="five wide field">
                                <label>EMAIL</label>
                                <input type="text" name="email" placeholder="email">

                            </div>
                            <div class="five wide field">
                                <label>NOMBRE<label>
                                        <input type="text" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="five wide field">
                                <label>PASSWORD<label>
                                        <input type="password" name="password">
                            </div>
                        </div>

                        <div class="ui selection dropdown">
                            <input type="hidden" name="id_rol">
                            <i class="dropdown icon"></i>
                            <div class="default text">Rol</div>
                            <div class="menu">
                                @foreach( $roles  as $rol )

                                    <div class="item" data-value="{{$rol->id}}">{{$rol->name}}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
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





@endsection
