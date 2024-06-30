@props(['messages'])

@if ($messages)
    <button type="button" class="btn btn-link text-danger tooltip-btn invalid-tooltip"
    data-bs-toggle="tooltip" data-bs-placement="left">
    <i class="bi bi-exclamation-circle"></i>
    </button>
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
