@include('components.search')
<table class="ui     celled table">
    <thead>
    <th colspan="7">
        <a href="{{url('registers/Productos/create')}}">
            <div class="ui small float-right teal labeled icon button">
                <i class="plus icon"></i> Nuevo
            </div>
        </a>
    </th>
    <tr>

    <th>
            @include('components.sort-table',[
                           'field'=>'id_producto',
                           'titulo'=>'id'])

        </th>
        <th>
            @include('components.sort-table',[
                           'field'=>'descripcion',
                           'titulo'=>'Nombre Producto'])

        </th>
        <th> @include('components.sort-table',[
                           'field'=>'color',
                           'titulo'=>'COLOR'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'id_presentacion',
                          'titulo'=>'PRESENTACION'])
        </th>

        <th>
            @include('components.sort-table',[
                          'field'=>'id_marca',
                          'titulo'=>'MARCA '])
        </th>

        <th>
            @include('components.sort-table',[
                           'field'=>'created_at',
                           'titulo'=>'FECHA DE INGRESO'])


        </th>
        <th>
            @include('components.sort-table',[
                           'field'=>'updated_at',
                           'titulo'=>'Actualizado'])

        </th>


        
     
    </tr>
    </thead>
    <tbody>
        @if($Productos->isEmpty())
        @component('components.empty-table',['total_columns'=>7])
         @endcomponent
        @else
        @foreach($Productos as $Product)
        
        <tr>
            <td>{{$Product->id_producto}}</td>
            <td>{{$Product->descripcion}}</td>
            <td>{{$Product->color}}</td>
            <td>{{$Product->id_presentacion}}</td>
            <td>{{$Product->id_marca}}</td>
            <td>{{$Product->created_at}}</td>
            <td>{{$Product->updated_at}}</td>

        </tr>

        @endforeach
     
      
        @endif
  
    </tbody>

    </tfoot>
</table>

