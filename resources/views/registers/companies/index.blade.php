@extends('layouts.app')
@section('content')

    @include('components.search')
    <div class="content">
        @include('registers.companies.ajax')
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/ajax-crud.js')}}"></script>
@endsection
