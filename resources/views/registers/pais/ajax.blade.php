@include('components.search')
<table class="ui     celled table">
    <thead>
    <th colspan="4">
        <a href="{{url('registers/Usuarios/create')}}">
            <div class="ui small float-right teal labeled icon button">
                <i class="plus icon"></i> Nuevo
            </div>
        </a>
    </th>
    <tr>
        <th>
            @include('components.sort-table',[
                           'field'=>'id_cliente',
                           'titulo'=>'ID CLIENTE'])

        </th>
        <th> @include('components.sort-table',[
                           'field'=>'nit',
                           'titulo'=>'NIT'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'razon_social',
                          'titulo'=>'SOCIAL'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'direccion',
                          'titulo'=>'DIRECCION'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'longitud',
                          'titulo'=>'LONGITUD'])

        </th>

        <th>
            @include('components.sort-table',[
                          'field'=>'latitud',
                          'titulo'=>'LATITUD'])
        </th>

        <th>
            @include('components.sort-table',[
                          'field'=>'created_at',
                          'titulo'=>'CREADO'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'updated_at',
                          'titulo'=>'Actualizado'])
        </th>











        <th></th>
    </tr>
    </thead>
    <tbody>
        @if($Usuarios->isEmpty())
        @component('components.empty-table',['total_columns'=>4])
         @endcomponent
        @else
        @foreach($Usuarios as $Users)
        
        <tr>
            <td>{{$Users->id_cliente}}</td>
            <td>{{$Users->nit}}</td>
            <td>{{$Users->razon_social}}</td>
            <td>{{$Users->direccion}}</td>
            <td>{{$Users->longitud}}</td>
            <td>{{$Users->latitud}}</td>
            <td>{{$Users->created_at}}</td>
            <td>{{$Users->updated_at}}</td>
        </tr>

        @endforeach
     
      
        @endif
  
    </tbody>

    </tfoot>
</table>

