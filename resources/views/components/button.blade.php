@php
    $large ??= false;
    $label ??= 'Add to Slack';

    $linkClass =
        'inline-flex gap-2 items-center justify-center bg-[#611f69] text-white rounded-lg shadow hover:bg-[#481a54] transition no-underline hover:brightness-100 font-normal';

    if ($large) {
        $linkClass .= ' px-10 py-4 text-base gap-3';
    } else {
        $linkClass .= ' px-4 py-2 text-sm';
    }

    $iconClass = $large ? 'h-5 w-5' : 'h-4 w-4';
@endphp

<a {{ $attributes->merge(['class' => $linkClass]) }} {{ $attributes->except(['class']) }}>
    <x-add-to-slack::icon class="inline-flex {{ $iconClass }}" />
    {{ $label }}
</a>
