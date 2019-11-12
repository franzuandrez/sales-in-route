@extends('layouts.app')
@section('content')
    <div class="ui masthead vertical segment">
        <div class=" ui container">


            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        EDICION DE PERMISOS
                    </h4>

                </div>

                <div class="ui primary segment">

                        {!!Form::open(['route'=>['Register.Permission.Update', $permission->id] ,'class'=>'ui form' ,'method'=>'patch' ])!!}

                        <div class="field">
                            <div class="fields">
                                <div class="five wide field">
                                    <label>Nombre</label>
                                    <input type="text" name="name" placeholder="Nombre" value="{{$permission->name}}">

                                </div>
                                <div class="five wide field">
                                    <label>Nombre Pantalla</label>
                                    <input type="text" name="display_name" placeholder="Nombre Pantalla"  value="{{$permission->display_name}}">

                                </div>
                                <div class="five wide field">
                                    <label>Icono</label>
                                    <input type="text" name="icon" placeholder="Icono"  value="{{$permission->icon}}">

                                </div>

                            </div>

                        </div>

                        <div class="field">

                            <div class="fields">


                                <div class="six wide field">
                                    <label>Menu</label>
                                    <input type="text" name="isMenu" placeholder="Menu" value="{{$permission->is_Menu}}">

                                </div>
                                <div class="six wide field">
                                    <label>Tipo Menu</label>
                                    <input type="text" name="id_Menu" placeholder="Tipo Menu" value="{{$permission->id_Menu}}">

                                </div>

                                <div class="field">
                                    <label>Orden</label>
                                    <input type="text" name="order" placeholder="orden" value="{{$permission->order}}">


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

        </div>


    </div>


@endsection
