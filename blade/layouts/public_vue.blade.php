@extends('layouts.public')

@section('musora-ui::content')
    <div id="vue-musora-profile" class="my-10 sm:mx-10 w-full">
        @yield('musora-ui::app')
    </div>
@endsection


@push('musora-ui::scripts')
    <script type="text/javascript" src="{{ $manifestJsPath }}"></script>
    <script type="text/javascript" src="{{ $vendorJsPath }}"></script>
    <script type="text/javascript" src="{{ $musoraProfileJsPath }}"></script>
@endpush
