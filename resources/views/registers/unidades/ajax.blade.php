
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
                        <a href="{{route('Register.Unidad.Create')}}">
                            <div class="ui small float-right teal labeled icon button">
                                <i class="plus icon"></i> Nuevo
                            </div>
                        </a>
                    </th>
                    <tr>
                        <th>

                            @include('components.sort-table',[
                                           'field'=>'','id_unidad',
                                           'titulo'=>'Codigo Unidad'])

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
                        @if($unidades->isEmpty())
                        @component('components.empty-table',['total_columns'=>4])
                         @endcomponent
                        @else
                        @foreach($unidades as $unidad)

                        <tr>
                            <td>{{$unidad->id_unidad}}</td>
                            <td>{{$unidad->descripcion}}</td>
                            <td>{{$unidad->updated_at}}</td>

                            <td>
                                <div align="center">
                                    <a href="{{route('Register.Unidad.Edit',$unidad->id_unidad)}}">
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










