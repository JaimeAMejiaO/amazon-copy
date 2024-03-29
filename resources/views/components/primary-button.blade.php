@props(['type' => 'button'])

<button {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-primary']) }}>
    {{-- @if ($iconL != '') <i class="{{ $iconL }}"></i> @endif --}}
    {{ $slot }}
</button>