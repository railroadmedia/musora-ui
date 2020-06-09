@push('styles')
<style type="text/css">
.song-card:hover {
    background-color: #f3f9ff;
}
.card-icon {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.song-card:hover .card-icon {
    visibility: visible;
    opacity: 1;
}
</style>
@endpush

<div class="space-y-2 py-6 pl-3 grid sm:grid-cols-2 lg:grid-cols-1">
    @foreach ($songs as $song)
        <div>
            @component('core.song-card', $song)
            @endcomponent
        </div>
    @endforeach
</div>
