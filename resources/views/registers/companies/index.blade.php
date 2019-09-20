@extends('layouts.app')
@section('content')
    <div id="content">
        @include('registers.companies.ajax')
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/ajax-crud.js')}}"></script>
    <script>
        function verDetalle(id) {
            $('#show-'+id)
                .modal({
                    blurring: true
                })
                .modal('show')
            ;
        }
    </script>
@endsection
