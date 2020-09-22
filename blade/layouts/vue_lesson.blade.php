@extends('musora-ui::layouts.members')

@section('musora-ui::content')
    <div id="vue-musora-lesson">
        @yield('musora-ui::app')
    </div>
@endsection


@push('musora-ui::scripts')
    <script type="text/javascript" src="{{ $manifestJsPath }}"></script>
    <script type="text/javascript" src="{{ $vendorJsPath }}"></script>
    <script type="text/javascript" src="{{ $musoraLessonJsPath }}"></script>
@endpush
