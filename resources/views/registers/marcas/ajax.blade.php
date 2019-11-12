
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
                        <a href="{{url('registers/marcas/create')}}">
                            <div class="ui small float-right teal labeled icon button">
                                <i class="plus icon"></i> Nuevo
                            </div>
                        </a>
                    </th>
                    <tr>
                        <th>
                            @include('components.sort-table',[
                                           'field'=>'','id_marca',
                                           'titulo'=>'Id Marca'])

                        </th>
                        <th> @include('components.sort-table',[
                                           'field'=>'descripcion',
                                           'titulo'=>'Descripcion'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'created_by',
                                          'titulo'=>'Creado por'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'Created_at',
                                          'titulo'=>'Fecha Creacion'])
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
                        @if($marcas->isEmpty())
                        @component('components.empty-table',['total_columns'=>4])
                         @endcomponent
                        @else
                        @foreach($marcas as $marca)

                        <tr>
                            <td>{{$marca->id_marca}}</td>
                            <td>{{$marca->descripcion}}</td>
                            <td>{{$marca->created_by}}</td>
                            <td>{{$marca->created_at}}</td>
                            <td>{{$marca->updated_at}}</td>

                            <td>
                                <div align="center">
                                    <a href="{{route('Register.Marca.Edit',$marca->id_marca)}}">
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










