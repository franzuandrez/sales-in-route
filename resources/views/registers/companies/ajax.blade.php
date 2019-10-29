@include('components.search')
<table class="ui     celled table">
    <thead>
    <th colspan="4">
        <a href="{{route('Register.Company.Create')}}">
            <div class="ui small float-right teal labeled icon button">
                <i class="plus icon"></i> Nuevo
            </div>
        </a>
    </th>
    <tr>
        <th>
            @include('components.sort-table',[
                           'field'=>'id_empresa',
                           'titulo'=>'CODIGO EMPRESA'])

        </th>
        <th> @include('components.sort-table',[
                           'field'=>'id_pais',
                           'titulo'=>'CODIGO PAIS'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'descripcion',
                          'titulo'=>'DESCRIPCION'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'direccion',
                          'titulo'=>'DIRECCION'])
        </th>
        <th>
            OPERACIONES
        </th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @if($companies->isEmpty())
        @component('components.empty-table',['total_columns'=>4])
         @endcomponent
        @else
        @foreach($companies as $Company)

        <tr>
            <td>{{$Company->id_empresa}}</td>
            <td>{{$Company->id_pais}}</td>
            <td>{{$Company->descripcion}}</td>
            <td>{{$Company->direccion_planta}}</td>
            <td>
                <div align="center">
                    <a href="{{route('Register.Company.Edit',$Company->id_empresa)}}">
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

