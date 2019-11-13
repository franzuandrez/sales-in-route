
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
                        <a href="{{route('Register.Pais.Create')}}">
                            <div class="ui small float-right teal labeled icon button">
                                <i class="plus icon"></i> Nuevo
                            </div>
                        </a>
                    </th>
                    <tr>
                        <th>
                            @include('components.sort-table',[
                                           'field'=>'','id_pais',
                                           'titulo'=>'Codigo Pais'])

                        </th>
                        <th> @include('components.sort-table',[
                                           'field'=>'descripcion',
                                           'titulo'=>'Descripcion'])
                        </th>
                        <th>
                            @include('components.sort-table',[
                                          'field'=>'codigo_postal',
                                          'titulo'=>'Codigo Postal'])
                        </th>

                        <th>
                          OPERACIONES
                        </th>



                    </tr>
                    </thead>
                    <tbody>
                        @if($paises->isEmpty())
                        @component('components.empty-table',['total_columns'=>4])
                         @endcomponent
                        @else
                        @foreach($paises as $pais)

                        <tr>
                            <td>{{$pais->id_pais}}</td>
                            <td>{{$pais->descripcion}}</td>
                            <td>{{$pais->codigo_postal}}</td>

                            <td>
                                <div align="center">
                                    <a href="{{route('Register.Pais.Edit',[$pais->id_pais])}}">
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










