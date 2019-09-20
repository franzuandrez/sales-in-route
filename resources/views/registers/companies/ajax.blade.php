@include('components.search')
<table class="ui     celled table">
    <thead>
    <th colspan="4">
        <a href="{{url('registers/companies/create')}}">
            <div class="ui small float-right teal labeled icon button">
                <i class="plus icon"></i> Nuevo
            </div>
        </a>
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
                          'field'=>'pais',
                          'titulo'=>'PAis'])
        </th>
        <th>

        </th>
    </tr>
    </thead>
    <tbody>
    @if(true)
        <tr>
            <td>Sucursal 1</td>
            <td>Guatemala</td>
            <td>Guatemala</td>
            <td>
                <button class="ui teal icon basic button"
                    onclick="javascript:verDetalle(1)"
                >
                    <i class="eye icon"></i>
                </button>
            </td>
        </tr>
        @include('registers.companies.show',['id'=>1])
    @else
        @component('components.empty-table',['total_columns'=>4])
        @endcomponent
    @endif
    </tbody>
    </tfoot>
</table>


