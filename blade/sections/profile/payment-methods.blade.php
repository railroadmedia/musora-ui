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
    <payment-methods
        :payment-methods='@json($data)'
    ></payment-methods>
</div>
