@push('styles')
<style type="text/css">
.pack-card {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top center;
    background-color: #FFF;
    transition: opacity .2s;
}
.pack-card:hover {
    opacity: 0.7;
}
.pack-card-icon {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: opacity .3s;
    opacity: 0;
}
.pack-card:hover .pack-card-icon {
    opacity: 1;
}
</style>
@endpush

<div class="py-6 grid gap-3 small:grid-cols-3 medium:grid-cols-4 large:grid-cols-5 x-large:grid-cols-6">
    @foreach ($packs as $pack)
        @component('core.pack-card', [
            'background' => $pack['background'],
            'foreground' => $pack['foreground'],
        ])
        @endcomponent
    @endforeach
</div>
