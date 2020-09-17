@extends('musora-ui::layouts.members')

@section('musora-ui::content')
    <div id="vue-musora-ui">
        @yield('musora-ui::app')
    </div>
@endsection


@push('musora-ui::scripts')
	<script type="text/javascript" src="../../js/generic/manifest.js"></script>
	<script type="text/javascript" src="../../js/generic/vendor.js"></script>
    <script type="text/javascript" src="../../js/generic/musora-content.js"></script>
@endpush
