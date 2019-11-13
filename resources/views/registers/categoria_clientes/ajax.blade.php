
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
                        <a href="{{route('Register.Categoria_Cliente.Create')}}">
                            <div class="ui small float-right teal labeled icon button">
                                <i class="plus icon"></i> Nuevo
                            </div>
                        </a>
                    </th>
                    <tr>
                        <th>

                            @include('components.sort-table',[
                                           'field'=>'','id_categoria_cliente',
                                           'titulo'=>'Codigo Categoria'])

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
                        @if($categoria_clientes->isEmpty())
                        @component('components.empty-table',['total_columns'=>4])
                         @endcomponent
                        @else
                        @foreach($categoria_clientes as $categoria_cliente)

                        <tr>
                            <td>{{$categoria_cliente->id_categoria_cliente}}</td>
                            <td>{{$categoria_cliente->descripcion}}</td>
                            <td>{{$categoria_cliente->updated_at}}</td>


                            <td>
                                <div align="center">
                                    <a href="{{route('Register.Categoria_Cliente.Edit',$categoria_cliente->id_categoria_cliente)}}">
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










