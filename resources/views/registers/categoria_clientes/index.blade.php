@extends('layouts.app')
@section('content')


    <div id="content">
        @include('registers.categoria_clientes.ajax')
    </div>



@endsection
@section('scripts')
    <script src="{{asset('js/ajax-crud.js')}}"></script>
@endsection
