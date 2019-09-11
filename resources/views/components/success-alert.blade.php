@if ($message = Session::get('success'))
    <div class="ui success message">
        <i class="close icon"></i>
        <div class="header">
        Operación Exitosa
        </div>
        <p>{{$message}}</p>
    </div>
@endif
