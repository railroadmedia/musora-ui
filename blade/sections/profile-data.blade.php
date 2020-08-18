<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-2xl font-bold capitalize">{{ $title }}</h2>
        @component(
            'core.anchor-button',
            [
                'labelText' => 'edit',
                'theme' => 'black',
                'classes' => ['modal-trigger'],
                'attrs' => ['data-target' => 'modal-' . $id]
            ]
        )
        @endcomponent
    </div>
    @foreach ($items as $item)
        <div class="flex py-2">
            <div class="profile-label font-bold capitalize">{{ $item['label'] }}</div>
            <div>{{ $item['value'] }}</div>
        </div>
        @if (isset($item['info']))
            <div class="text-xs text-medium-gray italic">{{ $item['info'] }}</div>
        @endif
    @endforeach

    @include('sections.modal-form', ['id' => 'modal-' . $id, 'items' => $items])
</div>
