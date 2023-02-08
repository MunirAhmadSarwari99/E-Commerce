<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">{{ __('İznini Güncelle') }}</h6>
                    <form method="post" action="{{ route('Permission.update', $permission->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')
                        <div class="form-floating mb-3">
                            <x-text-input id="perName" name="perLabel" type="text" class="form-control"  autocomplete="perName" value="{{ $permission->perLabel }}"/>
                            <x-input-label for="perName" :value="__('İzin ismi')" />
                            <x-input-error :messages="$errors->get('perLabel')" class="mt-2" />
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('Permission.index') }}" class="btn btn-secondary">İptal</a>
                                <x-primary-button class="btn btn-success">{{ __('Kayded') }}</x-primary-button>
                            </div>
                            <div class="col-md-6">

                            </div >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
