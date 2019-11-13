
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
                        <a href="{{route('Register.Presentacion.Create')}}">
                            <div class="ui small float-right teal labeled icon button">
                                <i class="plus icon"></i> Nuevo
                            </div>
                        </a>
                    </th>
                    <tr>
                        <th>

                            @include('components.sort-table',[
                                           'field'=>'','id_presentacion',
                                           'titulo'=>'Codigo Presentacion'])

                        </th>
                        <th> @include('components.sort-table',[
                                           'field'=>'descripcion',
                                           'titulo'=>'Descripcion'])
                        </th>

                        <th>
                            @include('components.sort-table',[
                                          'field'=>'updated_at',
                                          'titulo'=>'Fecha Actualizacion'])
                        </th>
                        <th>
                          OPERACIONES
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                        @if($presentaciones->isEmpty())
                        @component('components.empty-table',['total_columns'=>4])
                         @endcomponent
                        @else
                        @foreach($presentaciones as $presentacion)

                        <tr>
                            <td>{{$presentacion->id_presentacion}}</td>
                            <td>{{$presentacion->descripcion}}</td>
                            <td>{{$presentacion->updated_at}}</td>


                            <td>
                                <div align="center">
                                    <a href="{{route('Register.Presentacion.Edit',$presentacion->id_presentacion)}}">
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










