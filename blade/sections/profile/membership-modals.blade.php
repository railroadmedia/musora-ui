@component(
    'core.modal',
    [
        'id' => 'modal-post-90-day-cancel-letter',
    ]
)
    <h1 class="text-3xl font-bold text-center">Uh oh! We’re here to help.</h1>

    <div class="leading-6">
        <p class="mt-8">
            When you joined Drumeo Edge, you made a decision to improve your skills. You were likely excited and
            gained a new sense of energy and inspiration. Take a moment to reflect on what happened since then.
        </p>

        <p class="mt-4">
            Are you practicing less? Do you feel like you’ve hit a wall? Are you not sure what to practice next?
        </p>

        <p class="mt-4">
            We’re committed to helping drummers reach their goals, so before you cancel your membership
            I wanted to see if there’s any way we can help.
        </p>

        <p class="mt-4">
            My advice: Don’t give up.</p>

        <p class="mt-4">
            The biggest difference between successful and unsuccessful drummers is the quality and quantity of
            action they take. By asking us for help, we’ll do our best to get you back on track towards your
            biggest and smallest drumming goals. Just click the button to reach out.
        </p>

        <p class="mt-4">
            To Your Drumming Success,
        </p>

        <div class="flex flex-col sm:flex-row mt-6">

            <div class="flex justify-center">
                <img
                    src="http://d1923uyy6spedc.cloudfront.net/jared.png"
                    alt="Jared Falk Portrait"
                    style="width: 100px; height: 100px;">
            </div>

            <div class="flex flex-row justify-center sm:ml-6">
                <img
                    src="http://d1923uyy6spedc.cloudfront.net/jared-sig.jpg"
                    alt="Jared Falk Portrait"
                    class="mt-4 h-16">

                <p class="mt-10 ml-6"> - Jared Falk</p>
            </div>
        </div>

        <div class="mt-8 flex flex-col items-center">
            <a href="#"
                id="90-day-help"
                class="uppercase font-bold bg-edge-blue hover:bg-blue-600 py-3 px-8 text-sm sm:text-base sm:px-16 text-white rounded-full text-sm">
                Yes, Please Help
            </a>

            @if(!empty($subscription))
                <!-- todo: update with route url helper route('user.settings.cancel.cancel-reason-form') -->
                <a href="#"
                   class="uppercase font-bold text-edge-blue mt-6 text-xs sm:text-base">
                    No Thanks, Cancel Membership
                </a>
            @endif
        </div>
    </div>
@endcomponent

@component(
    'core.modal',
    [
        'id' => 'modal-how-can-we-help',
    ]
)
    <!-- todo: update with route url helper route('user.settings.cancel.submit.send-help-email') -->
    <form
        method="post"
        action="#"
    >
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-3xl font-bold text-center">How can we help?</h1>
            <div class="">
                <p class="mt-6">Select any of the issues you’d like help with:</p>
                <ul class="ml-6 space-y-4 sm:space-y-0e">
                    <li class="flex items-center mt-6 space-x-3">
                        <input type="radio" name="help-issue" id="direction" value="direction">
                        <label for="direction">I need more direction</label>
                    </li>

                    <li class="flex items-center space-x-3">
                        <input type="radio" name="help-issue" id="time" value="time">
                        <label for="time">I don’t have enough time</label>
                    </li>

                    <li class="flex items-center space-x-3">
                        <input type="radio" name="help-issue" id="watch" value="watch">
                        <label for="watch">I don’t know what lesson to watch</label>
                    </li>

                    <li class="flex items-center space-x-3">
                        <input type="radio" name="help-issue" id="easy" value="easy">
                        <label for="easy">The lessons are too easy</label>
                    </li>

                    <li class="flex items-center space-x-3">
                        <input type="radio" name="help-issue" id="difficult" value="difficult">
                        <label for="difficult">The lessons are too difficult</label>
                    </li>

                    <li class="flex items-center space-x-3">
                        <input type="radio" name="help-issue" id="website" value="website">
                        <label for="website">I don’t know how to use the website/app.</label>
                    </li>

                    <li class="flex items-center space-x-3">
                        <input type="radio" name="help-issue" id="other" value="other">
                        <label for="other">Other</label>
                    </li>
                </ul>

                <div class="mt-6">
                    <textarea
                        placeholder="Send your questions to a Drumeo teacher..."
                        class="rounded-lg resize-none p-3 border border-gray w-full focus:shadow-outline"
                        name="text-input"
                        style="height: 150px;"
                    ></textarea>
                </div>

                <div class="mt-8 flex justify-center">
                    <button
                        class="uppercase font-bold bg-edge-blue hover:bg-blue-600 py-3 px-8 text-sm sm:text-base sm:px-16 text-white rounded-full"
                    >Send Message</button>
                </div>
            </div>
        </div>
    </form>
@endcomponent

@component(
    'core.modal',
    [
        'id' => 'modal-extend-trial-14-days',
    ]
)
    <h1 class="text-3xl font-bold text-center">Need more time?</h1>
    <div class="mt-6">
        <p class="text-center">
            Everyone gets busy and you may not have had enough time to watch lessons and practice.
            <strong>Extend your trial an additional 14 days</strong> on us to keep access to the best drum lessons
            in the
            world.
        </p>
    </div>
    <!-- todo: update with route url helper route('user.settings.cancel.submit.accept-trial-extension-offer') -->
    <div class="flex justify-center mt-8">
        <form method="post" action="#">
            <button type="submit" class="uppercase font-bold bg-edge-blue hover:bg-blue-600 py-3 px-8 text-sm sm:text-base sm:px-16 text-white rounded-full">Yes, Extend My Trial</button>
        </form>
    </div>
    <div class="flex justify-center mt-8">
        <!-- todo: update with route url helper route('user.settings.cancel.cancel-reason-form') -->
        <a href="#" class="uppercase font-bold text-edge-blue text-xs sm:text-base">No Thanks, Cancel Membership</a>
    </div>
@endcomponent

@component(
    'core.modal',
    [
        'id' => 'modal-free-30-days',
    ]
)
    <h1 class="text-3xl font-bold text-center">Uh oh! It looks like you<br> didn’t love your lessons?</h1>

    <div class="mt-6">
        <p class="text-center">
            That’s not okay -- and we’d like a 2nd chance. Just click the “FREE MONTH” button below to keep your
            membership for one more month, totally free. Your renewal date will simply be delayed by 30 days.
        </p>
    </div>

    <div class="mt-6">
        <p class="text-center">
            There’s only one catch… we’ll also quickly ask you what we can improve to hopefully give you a
            better experience in the next 30 days.
        </p>
    </div>

    <div class="flex justify-center mt-8">
        <!-- todo: update with route url helper route('user.settings.cancel.submit.accept-month-extension-offer') -->
        <form method="post" action="#">
            <button type="submit" class="uppercase font-bold bg-edge-blue hover:bg-blue-600 py-3 px-8 text-sm sm:text-base sm:px-16 text-white rounded-full">Free Month</button>
        </form>
    </div>

    @if(!empty($subscription))
        <div class="flex justify-center mt-6">
            <!-- todo: update with route url helper route('user.settings.cancel.cancel-reason-form') -->
            <a href="#" class="uppercase font-bold text-edge-blue text-xs sm:text-base">No Thanks, Cancel Membership</a>
        </div>
    @endif
@endcomponent

@component(
    'core.modal',
    [
        'id' => 'modal-upgrade-to-annual',
    ]
)
    <h1 class="text-3xl font-bold text-center">Save 45% with an annual plan.</h1>

    <div class="mt-10 flex flex-col sm:flex-row w-full space-y-6 sm:space-y-0 sm:space-x-4">
        <div class="flex-1 flex flex-col items-center rounded-lg bg-light-gray px-3 py-8">
            <h1 class="uppercase text-3xl font-bold text-center">Your <br>Plan</h1>
            <div class="mt-4">
                @if(!empty($subscription))
                    {{-- todo - update subscription data accessing --}}
                    <p class="leading-6 text-center">${{ $subscription['totalPrice'] }} per month<br> =
                        ${{ $subscription['totalPrice'] * 12 }} per year.</p>
                @elseif(!empty($edgeExpirationDate))
                    <p class="leading-6 text-center">Temporary access until
                        <br>{{ $edgeExpirationDate->format('F j, Y') }}.</p>
                @else
                    <p class="leading-6 text-center">Temporary access.</p>
                @endif
            </div>
            <div class="mt-8">
                <a href="#"
                   class="uppercase font-bold bg-black hover:bg-dark-gray py-3 px-6 text-sm lg:text-base lg:px-8 text-white rounded-full text-sm">
                    Keep This Plan
                </a>
            </div>
        </div>
        <div class="flex-1 flex flex-col items-center rounded-lg border-edge-blue border-2 px-3 py-8">
            <h1 class="uppercase text-3xl font-bold text-center">Annual <br>Plan</h1>
            <div class="mt-4">
                <p class="leading-6 text-center">Save 45%<br>+ get limited time
                    bonuses.
                </p>
            </div>
            <div class="mt-8">
                <a href="/#customize-anchor"
                   class="uppercase font-bold bg-edge-blue hover:bg-blue-600 py-3 px-10 text-sm lg:text-base lg:px-16 text-white rounded-full text-sm">
                    See Offer
                </a>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <p class="text-center">
            By completing the checkout process on the next page, your monthly billing will be stopped and replaced
            by an annual billing plan at the posted rate.
        </p>
    </div>
@endcomponent

@push('scripts')
<script type="text/javascript">
document
    .getElementById('90-day-help')
    .addEventListener(
        'click',
        function(event) {

            document.getElementById('modal-post-90-day-cancel-letter').classList.remove('active');
            document.getElementById('modal-how-can-we-help').classList.add('active');

            event.preventDefault();
            event.stopPropagation();
        }
    );
</script>
@endpush
