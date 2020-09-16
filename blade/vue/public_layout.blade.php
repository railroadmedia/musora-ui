@extends('layouts.public')

@section('musora-ui::content')
    <div id="vue-app" class="my-10 sm:mx-10 w-full">
        @yield('musora-ui::app')
    </div>
@endsection


@push('musora-ui::scripts')
    <script type="text/javascript" src="../../js/generic/musora-ui.js"></script>
@endpush
