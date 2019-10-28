@include('components.search')
<table class="ui     celled table">
    <thead>
    <th colspan="4">
        <a href="{{url('registers/Clientes/create')}}">
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
        @if($Clientes->isEmpty())
        @component('components.empty-table',['total_columns'=>4])
         @endcomponent
        @else
        @foreach($Clientes as $Client)
        
        <tr>
            <td>{{$Client->id_cliente}}</td>
            <td>{{$Client->nit}}</td>
            <td>{{$Client->razon_social}}</td>
            <td>{{$Client->direccion}}</td>
            <td>{{$Client->longitud}}</td>
            <td>{{$Client->latitud}}</td>
            <td>{{$Client->created_at}}</td>
            <td>{{$Client->updated_at}}</td>
        </tr>

        @endforeach
     
      
        @endif
  
    </tbody>

    </tfoot>
</table>

