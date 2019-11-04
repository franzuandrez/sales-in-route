@include('components.search')
<table class="ui     celled table">
    <thead>
    <th colspan="5">
        <a href="{{url('registers/proveedores/create')}}">
            <div class="ui small float-right teal labeled icon button">
                <i class="plus icon"></i> Nuevo
            </div>
        </a>
    </th>
    <tr>

        <th>
            @include('components.sort-table',[
                           'field'=>'id_proveedor',
                           'titulo'=>'ID PROVEEDOR'])

        </th>
        <th> @include('components.sort-table',[
                           'field'=>'razon_social',
                           'titulo'=>'RAZON'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'nit',
                          'titulo'=>'NIT'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'direccion_planta',
                          'titulo'=>'DIRECCION'])
        </th>
        <th>
            OPERACIONES
        </th>



    </tr>
    </thead>
    <tbody>
        @if($Proveedores->isEmpty())
        @component('components.empty-table',['total_columns'=>4])
         @endcomponent
        @else
        @foreach($Proveedores as $Proved)

        <tr>
            <td>{{$Proved->id_proveedor}}</td>
            <td>{{$Proved->razon_social}}</td>
            <td>{{$Proved->nit}}</td>
            <td>{{$Proved->direccion_planta}}</td>
            <td>
                <div class="ui buttons">

                    <a href="{{route('Register.Proveedor.Edit',$Proved->id_proveedor)}}">
                        <button class="ui yellow small button " >
                            MODIFICAR

                        </button>
                    </a>
                    <a href="">
                        <button class="ui red small button">
                            ELIMINAR
                        </button>
                    </a>

                </div>
            </td>
        </tr>

        @endforeach


        @endif

    </tbody>

    </tfoot>
</table>

