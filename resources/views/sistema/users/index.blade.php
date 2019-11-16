@extends('layouts.app')
@section('content')


    <div id="content">
        @include('sistema.users.ajax')
    </div>



@endsection
@section('scripts')
    <script src="{{asset('js/ajax-crud.js')}}"></script>
@endsection
