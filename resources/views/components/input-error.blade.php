@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'alert alert-danger']) }} style="text-transform: uppercase;">
        @foreach ((array) $messages as $message)
            <strong>{{ $message }}</strong><br/>
        @endforeach
    </div>
@endif
