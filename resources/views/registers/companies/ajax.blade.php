@include('components.search')
<table class="ui     celled table">
    <thead>
    <th colspan="4">
        <div class="ui small float-right teal labeled icon button ">
            <i class="plus icon"></i> Nuevo
        </div>
    </th>
    <tr>
        <th>
            @include('components.sort-table',[
                           'field'=>'nombre',
                           'titulo'=>'NOMBRE'])

        </th>
        <th> @include('components.sort-table',[
                           'field'=>'direccion',
                           'titulo'=>'Direccion'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'Encargado',
                          'titulo'=>'Encargado'])
        </th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @component('components.empty-table',['total_columns'=>4])
    @endcomponent
    </tbody>

    </tfoot>
</table>
