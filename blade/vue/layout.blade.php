@extends('layouts.members')

@section('content')
    <div id="vue-app">
    	<vue-snotify></vue-snotify>
        @yield('app')
    </div>
@endsection


@push('scripts')
    <script type="text/javascript" src="../../js/generic/app.js"></script>
@endpush
