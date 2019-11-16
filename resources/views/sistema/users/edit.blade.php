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
                    <form method="post" action="{{route('sistema.users.update',['id'=>$user->id])}}" class="ui form">
                        @method('PATCH')
                        @csrf
                        <div class="field">
                            <div class="fields">
                                <div class="three wide field">
                                    <label>USERNAME</label>
                                    <input type="text"
                                           value="{{$user->username}}"
                                           name="name" placeholder="Usuario">

                                </div>
                                <div class="five wide field">
                                    <label>EMAIL</label>
                                    <input type="text"
                                           value="{{$user->email}}"
                                           name="email" placeholder="email">

                                </div>
                                <div class="five wide field">
                                    <label>NOMBRE<label>
                                            <input type="text"
                                                   value="{{$user->nombre}}"
                                                   name="nombre" placeholder="Nombre">
                                </div>
                                <div class="five wide field">
                                    <label>APELLIDO<label>
                                            <input type="text"
                                                   value="{{$user->apellido}}"
                                                   name="apellido"
                                                   placeholder="Apellido">
                                </div>

                            </div>

                            <div class="ui selection dropdown">
                                <input type="hidden"  value="{{$userRole->first()}}"  name="id_rol">
                                <i class="dropdown icon"></i>
                                <div class="default text">Rol</div>
                                <div class="menu">
                                    @foreach( $roles  as $rol )
                                        @if(in_array( $rol->id , $userRole->toArray()))
                                            <div class="item" selected   data-value="{{$rol->id}}">{{$rol->name}}</div>
                                        @else
                                            <div class="item" data-value="{{$rol->id}}">{{$rol->name}}</div>
                                        @endif
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
            </form>


        </div>


    </div>





@endsection
