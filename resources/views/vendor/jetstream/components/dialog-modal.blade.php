@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="">
        <div class="">
            {{ $title }}
        </div>

        <div class="">
            {{ $content }}
        </div>
    </div>

    <div class="">
        {{ $footer }}
    </div>
</x-jet-modal>
