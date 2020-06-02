@push('styles')
<style type="text/css">
.rudiment-card:hover {
    background-color: #f3f9ff;
}
.rudiment-card-teacher-gradient {
    background: -webkit-gradient(linear,left top,left bottom,from(transparent),to(rgba(85, 85, 85, .75)));
    background: linear-gradient(180deg,transparent 0,rgba(85, 85, 85, .75));
}
.rudiment-card-play {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.rudiment-card:hover .rudiment-card-play {
    visibility: visible;
    opacity: 1;
}
</style>
@endpush

<div class="mx-auto w-full container h-full pt-4">
    @foreach ($items as $item)
        @component('core.rudiment-card', $item)
        @endcomponent
    @endforeach
</div>
