@if ($message = Session::get('success'))
    <div class="ui success message">
        <i class="close icon"></i>
        <div class="header">
            {{$message}}
        </div>
        <p>You may now log-in with the username you have chosen</p>
    </div>
@endif
