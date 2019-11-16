@extends('layouts.app')
@section('content')

    <div class="ui masthead vertical segment">
        <div class=" ui container">

            <div class="ui segments">
                <div class="ui secondary segment">
                    <h4 align="center">
                        REGISTRO DE ROLES
                    </h4>

                </div>

                <div class="ui primary segment">
                    <form method="post" action="{{route('sistema.roles.update',['id'=>$role->id])}}" class="ui form">
                        @method('PATCH')
                        @csrf
                        <div class="two fields">
                            <div class="field">
                                <label>NOMBRE</label>
                                <input type="text" required value="{{$role->name}}" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="field">
                                <label>DESCRIPCION</label>
                                <input type="text" required name="descripcion" value="{{$role->descripcion}}"
                                       placeholder="Descripcion">
                            </div>
                        </div>
                        <table class="ui celled padded table">
                            <thead>
                            <tr>
                                <th>MENU</th>
                                <th>
                                    OPCIONES
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($menus as $menu )
                                <tr>
                                    <td>
                                        <div class="ui toggle checkbox">
                                            <input type="checkbox"
                                                   <?php  if (in_array($menu->id, $rolePermissions)) echo 'checked' ?>
                                                   name="permission[]"
                                                   onclick="habilitar(this,'{{$menu->id}}')"
                                                   value="{{$menu->id}}">
                                            <label>
                                                <i class="{{$menu->icon}}"></i> {{$menu->display_name}}
                                            </label>
                                        </div>
                                    </td>
                                    <td class="single line <?php  if (!in_array($menu->id, $rolePermissions)) echo 'disabled' ?> "
                                        id="opciones-{{$menu->id}}">
                                        <table class="ui celled padded table">
                                            <thead>

                                            </thead>
                                            <tbody>
                                            @foreach($opciones->where('id_Menu',$menu->id) as $opcion)
                                                <tr class="">
                                                    <td>
                                                        <div class="ui toggle checkbox">

                                                            <input type="checkbox"
                                                                   <?php  if (in_array($opcion->id, $rolePermissions)) echo 'checked' ?>
                                                                   name="permission[]" class="opcion-{{$menu->id}}"
                                                                   value="{{$opcion->id}}">
                                                            <label><i
                                                                    class="{{$opcion->icon}}"></i> {{$opcion->display_name}}
                                                            </label>
                                                        </div>
                                                    </td>


                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                        <button class="ui button icon primary" type="submit">
                            <i class="icon check"></i>
                            Guardar
                        </button>
                        <a href="{{route('sistema.roles.index')}}">
                            <button class="ui button icon primary"

                                    type="button">
                                <i class="icon backward"></i>
                                Regresar
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        function habilitar(ele, opciones) {

            if (ele.checked) {
                document.getElementById('opciones-' + opciones).classList.remove('disabled');

                let opcionesTD = Object.values(document.getElementsByClassName('opcion-' + opciones));
                opcionesTD.forEach(function (e) {
                    e.checked = true;
                });

            } else {
                document.getElementById('opciones-' + opciones).classList.add('disabled');
                let opcionesTD = Object.values(document.getElementsByClassName('opcion-' + opciones));
                opcionesTD.forEach(function (e) {
                    e.checked = false;
                });
            }

        }

    </script>
@endsection




