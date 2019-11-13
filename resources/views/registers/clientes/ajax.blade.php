


<div class="ui  centered grid">
    <div class="column"></div>


    <div class="main ui container"></div>
        <div class="">

            <div class="" align="left">
            @include('components.search')
            </div>

            <table class="ui fixed-top celled table" >
                    <thead>
                    <th colspan="15">
                        <a href="{{url('registers/clientes/create')}}">
                            <div class="ui small float-right teal labeled icon button">
                                <i class="plus icon"></i> Nuevo
                            </div>
                        </a>
                    </th>
                    <tr>
                        <th>
                            @include('components.sort-table',[
                                           'field'=>'id_cliente',
                                           'titulo'=>'Id cliente'])

                        </th>
                        <th> @include('components.sort-table',[
                                           'field'=>'nit',
                                           'titulo'=>'Nit'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'razon_social',
                                          'titulo'=>'Razon Social'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'nombre_comercia',
                                          'titulo'=>'Nombre Comercial'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'id_tipo_cliente',
                                          'titulo'=>'Tipo Cliente'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'direccion',
                                          'titulo'=>'Direccion'])
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
                        @if($Clientes->isEmpty())
                        @component('components.empty-table',['total_columns'=>4])
                         @endcomponent
                        @else
                        @foreach($Clientes as $Client)

                        <tr>
                            <td>{{$Client->id_cliente}}</td>
                            <td>{{$Client->nit}}</td>
                            <td>{{$Client->razon_social}}</td>
                            <td>{{$Client->nombre_comercial}}</td>
                            <td>{{$Client->tipo_cliente->descripcion}}</td>
                            <td>{{$Client->direccion}}</td>
                            <td>{{$Client->updated_at}}</td>
                            <td>
                                <div align="center">
                                    <a href="{{route('Register.Cliente.Edit',$Client->id_cliente)}}">
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










