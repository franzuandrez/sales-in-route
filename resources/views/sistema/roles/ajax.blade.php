<div class="ui  centered grid">
    <div class="column"></div>

    <div class="main ui container"></div>
    <div class="">

        <div class="" align="left">
            @include('components.search')
        </div>
        <table class="ui celled table fixed">
            <thead>
            <tr>
                <th colspan="3">
                    <a href="{{url('sistema/roles/create')}}">
                        <div class="ui small float-right teal labeled icon button">
                            <i class="plus icon"></i> Nuevo
                        </div>
                    </a>
                </th>
            </tr>
            <tr>
                <th>
                    @include('components.sort-table',[
                                   'field'=>'name',
                                   'titulo'=>'Nombre'])

                </th>
                <th>
                    @include('components.sort-table',[
                                   'field'=>'descripcion',
                                   'titulo'=>'Descripcion'])

                </th>



                <th>
                    OPERACIONES
                </th>


            </tr>
            </thead>
            <tbody>
            @if($roles->isEmpty())
                @component('components.empty-table',['total_columns'=>3])
                @endcomponent
            @else
                @foreach($roles as $rol)

                 <tr>

                     <td>{{$rol->name}}</td>
                     <td>{{$rol->descripcion}}</td>
                            <td>
                                <div align="center">
                                    <a href="{{route('sistema.roles.edit',['id'=>$rol->id])}}">
                                        <button class="ui yellow button">
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


        </table>

    </div>


</div>










