{{-- Variables:
$termsLink
$privacyLink
$legacyResourcesLink
$supportLink
$logoutLink
--}}

<div style="background-color: #191b1c; color: #8c9698;">
    <div class="mx-auto w-full container px-3 h-full flex flex-col lg:flex-row items-center justify-between py-4">
        <div class="mb-4 lg:mb-0">
            <img
                alt="Musora Media Inc."
                src="https://dmmior4id2ysr.cloudfront.net/logos/drumeo-by-musora-grey.png"
                style="max-width: 125px;"
            >
        </div>
        <div class="text-sm flex items-center space-x-1">
            <span class="hidden sm:inline">Musora Media Inc &copy; 2020</span>
            <span class="hidden sm:inline">-</span>
            <a href="{{ $termsLink }}" target="_blank" class="underline">Terms</a>
            <span>/</span>
            <a href="{{ $privacyLink }}" target="_blank" class="underline">Privacy</a>
            <span>/</span>
            <a href="{{ $legacyResourcesLink }}" target="_blank" class="underline">Legacy Resources</a>
            <span>/</span>
            <a href="{{ $supportLink }}" target="_blank" class="underline">Support</a>
            <span>/</span>
            <a href="{{ $logoutLink }}" target="_blank" class="underline">Logout</a>
        </div>
    </div>
</div>
