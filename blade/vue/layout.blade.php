@extends('musora-ui::layouts.members')

@section('musora-ui::content')
    <div id="vue-app">
        @yield('musora-ui::app')
    </div>
@endsection


@push('musora-ui::scripts')
    <script type="text/javascript" src="../../js/generic/musora-ui.js"></script>
@endpush
