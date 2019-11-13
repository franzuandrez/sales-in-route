
<div class="ui  centered grid">
    <div class="column"></div>


    <div class="main ui container"></div>
        <div class="">

            <div class="" align="left">
            @include('components.search')
            </div>

            <table class="ui celled table" al>
                    <thead>
                    <th colspan="15">
                        <a href="{{route('Register.Rol.Create')}}">
                            <div class="ui small float-right teal labeled icon button">
                                <i class="plus icon"></i> Nuevo
                            </div>
                        </a>
                    </th>
                    <tr>
                        <th>
                            @include('components.sort-table',[
                                           'field'=>'id',
                                           'titulo'=>'Codigo'])

                        </th>
                        <th>
                            @include('components.sort-table',[
                                           'field'=>'','name',
                                           'titulo'=>'Rol'])

                        </th>
                        <th> @include('components.sort-table',[
                                           'field'=>'descripcion',
                                           'titulo'=>'Descripcion'])
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
                        @if($roles->isEmpty())
                        @component('components.empty-table',['total_columns'=>4])
                         @endcomponent
                        @else
                        @foreach($roles as $rol)

                        <tr>
                            <td>{{$rol->id}}</td>
                            <td>{{$rol->name}}</td>
                            <td>{{$rol->descripcion}}</td>
                            <td>{{$rol->updated_at}}</td>

                            <td>
                                <div align="center">
                                    <a href="{{route('Register.Rol.Edit',[$rol->id])}}">
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










