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
                           'field'=>'id_marca',
                           'titulo'=>'ID DE MARCA'])

        </th>
        <th> @include('components.sort-table',[
                           'field'=>'descripcion',
                           'titulo'=>'DESCRIPCION DE MARCA'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'created_by',
                          'titulo'=>'CREADO'])
    







        <th></th>
    </tr>
    </thead>
   
</table>

