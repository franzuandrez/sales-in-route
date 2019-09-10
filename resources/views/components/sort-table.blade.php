@if($sortField==$field)
    @if($sort=='asc')
        <i class="icon sort up "></i>
    @else
        <i class="icon sort down" ></i>
    @endif
@else
    <i class="sort icon " ></i>
@endif
<a  style="color:black"
    href="javascript:ajaxLoad('{{
Request::url().'?field='.$field.'&sort='.($sort=='asc'?'desc':'asc').'&search='.$search
}}')">
    {{strtoupper($titulo)}}
</a>

