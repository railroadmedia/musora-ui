@push('styles')
<style type="text/css">
.payment-methods .default-col {
    width: 60px;
}
.payment-methods .expiry-col {
    width: 120px;
}
.payment-methods .actions-col {
    width: 70px;
}
.payment-methods .actions-col a div {
    width: 25px;
    height: 25px;
}
</style>
@endpush

<div class="payment-methods p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-2xl font-bold capitalize">payment methods</h2>
    </div>
    <div class="py-8">
        <div class="flex space-x-3">
            <div class="default-col text-center text-xs font-bold capitalize">default</div>
            <div class="flex-1 text-xs font-bold capitalize">info</div>
            <div class="expiry-col text-center text-xs font-bold capitalize">expires on</div>
            <div class="actions-col text-center text-xs font-bold capitalize">actions</div>
        </div>
        @foreach ($data as $paymentMethod)
            <div class="flex space-x-3 py-2">
                <div class="default-col text-center">
                    @if ($paymentMethod['default'])
                        <i class="fas fa-check"></i>
                    @endif
                </div>
                <div class="flex-1">{{ $paymentMethod['info'] }}</div>
                <div class="expiry-col text-center">{{ $paymentMethod['expiry'] }}</div>
                <div class="actions-col flex items-center justify-center">
                    <a href="#"><div class="flex items-center justify-center text-red-400"><i class="fas fa-trash"></i></div></a>
                    <a href="#"><div class="flex items-center justify-center text-green-400"><i class="fas fa-check"></i></div></a>
                </div>
            </div>
        @endforeach
    </div>
    <div>
        @component('core.button', [
            'labelText' => 'new payment method',
            'type' => 'button',
            'iconClass' => 'fas fa-plus',
        ])
        @endcomponent
    </div>
</div>
