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
                <th colspan="4">
                    <a href="{{url('sistema/users/create')}}">
                        <div class="ui small float-right teal labeled icon button">
                            <i class="plus icon"></i> Nuevo
                        </div>
                    </a>
                </th>
            </tr>
            <tr>
                <th>
                    @include('components.sort-table',[
                                   'field'=>'username',
                                   'titulo'=>'Usuario'])

                </th>
                <th>
                    @include('components.sort-table',[
                                   'field'=>'email',
                                   'titulo'=>'Correo'])

                </th>
                <th>
                    @include('components.sort-table',[
                                   'field'=>'isActive',
                                   'titulo'=>'Estado'])

                </th>


                <th>
                    OPERACIONES
                </th>


            </tr>
            </thead>
            <tbody>
            @if($users->isEmpty())
                @component('components.empty-table',['total_columns'=>4])
                @endcomponent
            @else
                @foreach($users as $user)

                    @if($user->isActive == 1)
                        <tr class="">
                    @else
                        <tr class="negative">
                    @endif
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>


                            @if($user->isActive == 1)
                                <td class="positive">
                                    Activo
                                </td>
                            @else
                                <td class="negative">
                                    Inactivo
                                </td>
                            @endif

                            <td>
                                <div align="center">
                                    <a href="{{route('sistema.users.edit',['id'=>$user->id])}}">
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










