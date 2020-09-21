<div>
    <div class="border-b border-gray p-8 pt-0">
        <div>
            <h2 class="pb-3 font-bold text-2xl">Your Access Levels</h2>
            <p class="pb-3">Your Drumeo Account includes:</p>
            <ul class="space-y-1 list-disc list-inside pl-8">
                <li>Drumeo Edge Membership</li>

                <li>Drumming System 2.0 (Online Edition)</li>
            </ul>
        </div>

        @if(($membershipStatus == 'expired' || $membershipStatus == 'canceled') && !empty($edgeExpirationDate))
            <div class="pt-8">
                <h2 class="font-bold text-xl mb-3">Drumeo Edge Special Offer</h2>
                @if($edgeExpirationDate < \Carbon\Carbon::now())
                    <p>Your subscription to Drumeo Edge has been canceled and your access ended
                        on {{ $edgeExpirationDate->format('F j, Y') }}. Please contact support or reorder on <a
                                href="/" class="text-edge-blue underline">www.drumeo.com</a> to continue your membership.</p>
                @else
                    <p>Your subscription to Drumeo Edge has been canceled and your access will be
                        removed on {{ $edgeExpirationDate->format('F j, Y') }}. Please contact support or reorder on <a
                                href="/" class="text-edge-blue underline">www.drumeo.com</a> to continue your membership.</p>
                @endif
            </div>
        @endif
    </div>
    @if(!empty($membershipType))
        <div class="border-b border-gray flex flex-col lg:flex-row">
            <div class="flex-1 border-b lg:border-b-0 lg:border-r border-gray flex flex-col items-center justify-center w-full md:w-1/2 p-8">
                <img src="https://drumeo-assets.s3.amazonaws.com/logos/edge-logo_small.png" class="w-80">
                <h2 class="text-lg my-3 font-bold">
                    @if($membershipType == 'trial' || $membershipType == 'non-recurring')
                        {{-- todo: update check for administrator --}}
                        {{ $isAdmin ? 'Administrator' : 'Free Trial' }}
                    @elseif($membershipType == '1-month')
                        Monthly Member
                    @elseif($membershipType == '2-month')
                        2 Month Member
                    @elseif($membershipType == '3-month')
                        3 Month Member
                    @elseif($membershipType == '6-month')
                        6 Month Member
                    @elseif($membershipType == '1-year')
                        Annual Member
                    @elseif($membershipType == 'lifetime')
                        Lifetime Member
                    @else
                        @if(!empty($subscription))
                            {{-- todo: update subscription data accessing --}}
                            {{ $subscription['intervalCount'] }} {{ ucwords($subscription['intervalType']) }}
                            Member
                        @else
                            Member
                        @endif
                    @endif
                </h2>

                @if ($membershipStatus == 'paused' && $membershipType != 'lifetime')
                    <p class="text-medium-gray">
                        <strong>Your membership is paused.</strong><br>
                        Your membership will continue on {{ $userProduct['startDate']->format('F j, Y') }} and your
                        next renewal date has been extended to {{ $subscription['paidUntil']->format('F j, Y') }}.
                    </p>
                @elseif ($membershipStatus == 'active' && $membershipType != 'lifetime')
                    <p class="text-medium-gray">
                        {{-- todo: update subscription data accessing --}}
                        Your next renewal is for ${{ $subscription['totalPrice'] }}
                        on {{ $subscription['paidUntil']->format('F j, Y') }}.
                    </p>
                @elseif(($membershipStatus == 'expired' || $membershipStatus == 'canceled' || $membershipStatus == 'non-recurring') &&
                            $membershipType != 'lifetime' && !empty($edgeExpirationDate))
                    <p class="text-medium-gray">
                        @if($edgeExpirationDate < \Carbon\Carbon::now())
                            Your access ended on {{ $edgeExpirationDate->format('F j, Y') }}.
                        @else
                            Your access is ending
                            on {{ $edgeExpirationDate->format('F j, Y') }}.
                        @endif
                    </p>
                @endif

                @if ($membershipStatus !== null && $membershipStatus != 'paused')
                    <p class="text-medium-gray">
                        {{-- todo: update current user data accessing --}}
                        Thank you for being a member since {{ $user['createdAt']->format('F j, Y') }}.
                    </p>
                @endif
            </div>

            <div class="flex-1 p-8">
                <p class="font-bold">Drumeo Edge gives you access to:</p>

                <ul class="mt-3 space-y-1 list-disc list-inside pl-8 text-medium-gray">
                    <li>Drumeo Method step-by-step curriculum.</li>
                    <li>200+ courses from legendary teachers.</li>
                    <li>Entertaining shows and documentaries.</li>
                    <li>Song breakdowns & Play-Alongs.</li>
                    <li>Weekly live lessons and personal support.</li>
                </ul>

                @if($membershipStatus == 'active' || $membershipType == 'lifetime')
                    <div class="mt-3">
                        <a href="#" class="modal-trigger" data-target="modal-how-can-we-help">
                            <p class="text-edge-blue underline" id="">Click here if you’d like help getting the
                                most out of your account.</p>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endif

    @if(empty($membershipType))
        <div class="border-b border-gray flex">
            <div class="flex-1 border-r border-gray flex flex-col items-center justify-center w-full md:w-1/2 p-8">
                <img src="https://drumeo-assets.s3.amazonaws.com/logos/edge-logo_small.png" class="w-80">
            </div>
            <div class="flex-1 p-8">
                <p class="font-bold">You’re eligible for a free 7-day trial to get:</p>

                <ul class="mt-3 space-y-1 list-disc list-inside pl-8 text-medium-gray">
                    <li>Drumeo Method step-by-step curriculum.</li>
                    <li>200+ courses from legendary teachers.</li>
                    <li>Entertaining shows and documentaries.</li>
                    <li>Song breakdowns & Play-Alongs.</li>
                    <li>Weekly live lessons and personal support.</li>
                </ul>
            </div>
        </div>
    @endif

    <div class="p-8 pt-10 flex flex-col space-y-4 space-x-0 sm:flex-row sm:space-y-0 sm:space-x-4">
        @if($subscriptionManagedElsewhere)
            <div class="flex flex-col">
                <p class="mb-2">To edit your membership please use the following guides:</p>
                <a
                    href="https://support.apple.com/en-us/HT202039"
                    class="mb-2 text-edge-blue underline"
                    target="_blank"
                >For Apple users</a>
                <a
                    href="https://support.google.com/googleplay/answer/7018481?co=GENIE.Platform%3DAndroid&hl=en"
                    class="mb-1 text-edge-blue underline"
                    target="_blank"
                >For Google users</a>
            </div>
        @else
            @if(($membershipStatus == 'active' && $membershipType != 'lifetime' && $membershipType != '1-year') ||
                ($membershipStatus == 'non-recurring' && $membershipType != 'lifetime'))
                <div>
                    <a
                        href="#"
                        class="modal-trigger uppercase font-bold bg-edge-blue hover:bg-blue-600 py-3 px-10 text-sm lg:text-base lg:px-16 text-white rounded-full text-center"
                        data-target="modal-upgrade-to-annual"
                    >Upgrade Membership</a>
                </div>
            @endif

            @if($membershipStatus == 'canceled' || $membershipStatus == 'expired')
                <div>
                    <a
                        href="/"
                        class="uppercase font-bold bg-edge-blue hover:bg-blue-600 py-3 px-10 text-sm lg:text-base lg:px-16 text-white rounded-full text-center"
                    >Renew Your Membership</a>
                </div>
            @endif

            @if($membershipStatus == 'paused')
                <div>
                    <a
                        href="/"
                        class="uppercase font-bold bg-edge-blue hover:bg-blue-600 py-3 px-10 text-sm lg:text-base lg:px-16 text-white rounded-full text-center"
                    >Continue Your Membership</a>
                </div>
            @endif

            @if($membershipStatus == 'active' && ($membershipType != 'lifetime') && !$hasClaimedRetentionOfferAlready)
                @php
                    // todo - update subscription product id in_array check
                    if (in_array($subscription['productId'], $trialMembershipProductIds) && count($subscription['payments']) == 0) {
                        $modalId = 'modal-extend-trial-14-days';
                    } else {
                        if ($subscription['startDate'] > \Carbon\Carbon::now()->subDays(90)) {
                            $modalId = 'modal-free-30-days';
                        } else {
                            $modalId = 'modal-post-90-day-cancel-letter';
                        }
                    }
                @endphp
                <div>
                    <a
                        href="#"
                        data-target="{{ $modalId }}"
                        class="modal-trigger uppercase font-bold py-3 px-10 text-sm lg:text-base lg:px-16 text-edge-blue text-center"
                    >Cancel Membership</a>
                </div>
            @endif

            @if($membershipStatus == 'active' && ($membershipType != 'lifetime') && $hasClaimedRetentionOfferAlready)
                <!-- todo: update with route url helper route('user.settings.cancel.cancel-reason-form') -->
                <div>
                    <a
                        href="#"
                        class="uppercase font-bold py-3 px-10 text-sm lg:text-base lg:px-16 text-edge-blue text-center"
                    >Cancel Membership</a>
                </div>
            @endif

            @if(empty($membershipType))
                <div>
                    <a
                        href="/laravel/public/shopping-cart/api/query?products[DLM-Trial]=1,month,1&locked=true"
                        class="uppercase font-bold bg-edge-blue hover:bg-blue-600 py-3 px-10 text-sm lg:text-base lg:px-16 text-white rounded-full text-center"
                    >Start Free Trial</a>
                </div>
            @endif
        @endif
    </div>

    @include('musora-ui::partials.profile.membership-modals')
</div>