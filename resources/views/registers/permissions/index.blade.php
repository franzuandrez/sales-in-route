@extends('layouts.app')
@section('content')


    <div id="content">
        @include('registers.permissions.ajax')
    </div>



@endsection
@section('scripts')
    <script src="{{asset('js/ajax-crud.js')}}"></script>
@endsection
