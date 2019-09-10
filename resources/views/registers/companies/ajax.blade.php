<table class="ui     celled table">
    <thead>
    <th colspan="4">
        <div class="ui small float-right teal labeled icon button ">
            <i class="plus icon"></i> Nuevo
        </div>
    </th>
    <tr>
        <th>
            <i class="icon sort"></i>
            Nombre
        </th>
        <th><i class="icon sort"></i>Direccion</th>
        <th><i class="icon sort"></i>Encargado</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @component('components.empty-table',['total_columns'=>4])
    @endcomponent
    </tbody>

    </tfoot>
</table>
