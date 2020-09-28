<a href="{{ $url }}" class="content-card">
    <div class="rounded-lg overflow-hidden relative">
        <img src="{{ $thumbnail }}">
        <div class="content-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl"></i></div>
    </div>
    <div class="pt-3">
        <h4 class="font-bold capitalize">{{ $title }}</h4>
    </div>
    <div class="py-2">
        <div class="text-xs text-medium-gray leading-snug overflow-hidden truncate-text">{{ $description }}</div>
    </div>
    <div class="text-xs text-medium-gray capitalize">{{ $type }} - {{ $lessons }} lessons</div>
</a>
