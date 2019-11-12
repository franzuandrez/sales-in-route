


<div class="ui  centered grid">
    <div class="column">

    </div>


    <div class="main ui container"></div>
        <div class="">

            <div class="" align="left">
            @include('components.search')
            </div>

            <table class="ui celled table" al>
                    <thead>
                    <th colspan="15">
                        <a href="{{url('registers/permissions/create')}}">
                            <div class="ui small float-right teal labeled icon button">
                                <i class="plus icon"></i> Nuevo
                            </div>
                        </a>
                    </th>
                    <tr>
                        <th>
                            @include('components.sort-table',[
                                           'field'=>'id',
                                           'titulo'=>'id'])

                        </th>
                        <th> @include('components.sort-table',[
                                           'field'=>'name',
                                           'titulo'=>'Nombre'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'isMenu',
                                          'titulo'=>'Menu'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'order',
                                          'titulo'=>'Orden'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'display_name',
                                          'titulo'=>'Nombre Display'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'id_Menu',
                                          'titulo'=>'Id_Menu'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'icon',
                                          'titulo'=>'Icono'])

                        </th>

                        <th>
                            @include('components.sort-table',[
                                          'field'=>'created_at',
                                          'titulo'=>'Fecha Creacion'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'update_at',
                                          'titulo'=>'Fecha Actualizacion'])
                        </th>


                        <th>
                          OPERACIONES
                        </th>



                    </tr>
                    </thead>
                    <tbody>
                        @if($permisos->isEmpty())
                        @component('components.empty-table',['total_columns'=>4])
                         @endcomponent
                        @else
                        @foreach($permisos as $permiso)

                        <tr>
                            <td>{{$permiso->id}}</td>
                            <td>{{$permiso->name}}</td>
                            <td>{{$permiso->isMenu}}</td>
                            <td>{{$permiso->order}}</td>
                            <td>{{$permiso->display_name}}</td>
                            <td>{{$permiso->id_Menu}}</td>

                            <td>{{$permiso->icon}}</td>
                            <td>{{$permiso->created_at}}</td>
                            <td>{{$permiso->updated_at}}</td>
                            <
                            <td>
                                <div align="center">
                                    <a href="{{route('Register.Permission.Edit',$permiso->id)}}">
                                        <button class="ui yellow button" >
                                            MODIFICAR

                                        </button>
                                    </a>
                                    <button class="ui red button">
                                        ELIMINAR
                                    </button>

                                </div>

                            </td>
                        </tr>

                        @endforeach


                        @endif

                    </tbody>

                    </tfoot>
            </table>

        </div>


</div>










