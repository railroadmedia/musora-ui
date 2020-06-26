@extends('layouts.public')

@section('content')
    <div id="vue-app" class="my-10 sm:mx-10 w-full">
        @yield('app')
    </div>
@endsection


@push('scripts')
    <script type="text/javascript" src="../../js/generic/app.js"></script>
@endpush
