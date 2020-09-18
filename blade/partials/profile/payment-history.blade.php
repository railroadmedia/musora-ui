<div class="payment-methods p-8">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-lg md:text-2xl font-bold capitalize">payment history</h2>
    </div>

    <div class="flex flex-col space-y-6 pt-8 pb-4 pr-2 lg:pr-0">
        @if (empty($data))
        <p>You do not have any payments in your payment history.</p>
        @else
            @foreach ($data as $payment)
                <a href="#" class="w-full">
                    <div class="flex flex-col lg:flex-row lg:items-center">
                        <div class="flex-1 flex items-center">
                            <div class="mr-2"><i class="fal fa-file-pdf"></i></div>
                            <div class="text-xs font-bold">{{ $payment['date'] }}</div>
                        </div>
                        <div class="flex-1">
                            <div class="grid grid-cols-3 lg:grid-cols-4">
                                <div class="lg:col-span-2 text-left text-xs italic">{{ $payment['payment-method'] }}</div>
                                <div class="text-center text-xs italic">{{ $payment['type'] }}</div>
                                <div class="text-right text-xs italic">{{ $payment['amount'] }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif
    </div>
</div>
