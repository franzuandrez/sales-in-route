@include('components.search')
<table class="ui     celled table">
    <thead>
    <th colspan="4">
        <a href="{{url('registers/Proveedores/create')}}">
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
                          'titulo'=>'PLANTA'])
        </th>



        <th></th>
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
        </tr>

        @endforeach
     
      
        @endif
  
    </tbody>

    </tfoot>
</table>

