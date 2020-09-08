<div class="payment-methods p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-lg md:text-2xl font-bold capitalize">payment methods</h2>
    </div>
    <payment-methods
        :user-id='{{ $user["id"] }}'
        :has-subscription='@json($user["hasSubscription"])'
        :is-active='@json($user["isActive"])'
        preload-data='{{ $preloadData }}'
        preload-cart-data='{{ $preloadCartData }}'
        stripe-publishable-key='{{ $stripePublishableKey }}'
        :countries='@json($countries)'
        :regions='@json($regions)'
    ></payment-methods>
</div>
