<div class="modal fade" id="{{$name}}" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="{{$name}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="{{$name}}">@yield('Title')</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
