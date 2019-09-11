@if($message=Session::get('error'))
    <div class="ui error message transition ">
        <i class="close icon"></i>
        <div class="header">
            {{$message}}
        </div>
    </div>
@elseif($errors->any())
    <div class="ui error message transition ">
        <i class="close icon"></i>
        <div class="header">
         Algo salió mal
        </div>
        <ul class="list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
