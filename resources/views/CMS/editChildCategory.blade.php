<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Orta Kategoriyi Düzenle</h6>
                    <form method="POST" action="{{ route('ChildCategory.update', $category->id) }}" class="p-6">
                        @csrf
                        @method('PATCH')
                        @section('Title')
                            {{ __('Yeni Kategori') }}
                        @endsection
                        <div class="form-floating mb-3">
                            <x-text-input id="categoryName" name="categoryName" type="text" class="form-control" value="{{ $category->childName }}" />
                            <x-input-label for="categoryName" :value="__('Kategori İsmi')" />
                            <x-input-error :messages="$errors->get('categoryName')" class="mt-2" />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <x-danger-button class="btn btn-success  float-end">
                                    {{ __('Kaydet') }}
                                </x-danger-button>
                            </div >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
