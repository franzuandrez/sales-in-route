<tr>
    <td colspan="{{$total_columns}}">
        <div class="ui placeholder segment">
            <div class="ui icon header">
                <i class="search icon"></i>
                Sin resultados
            </div>
            <div class="inline">
                    <div onclick="ajaxLoad('{{Request::url()}}?search=')"
                        class="ui grey button">Limpiar búsqueda</div>
            </div>
        </div>
    </td>
</tr>
