<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">{{ __('Kategori Bilgileri')}}</h6>

                    <strong>Alt Kategori Adı: {{ $category->category->categoryName . ' / '.$category->childName }}</strong>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Kategori</th>
                                <th scope="col">Kayıt Tarihi</th>
                                <th scope="col">Son Güncelleme Tarihi</th>
                                <th scope="col">
                                    <button type="button" class="btn btn-dark float-end" data-bs-target="#NewCategoryTag" data-bs-toggle="modal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category->tags as $key)
                                <tr>
                                    <td>{{ $key->tagName }}</td>
                                    <td>{{ \App\Models\App::DateTime('d, ', 'F', ' Y', $key->created_at) }}</td>
                                    <td>{{ $key->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{ route('Category-Tag.edit', $key->id) }}" class="btn btn-outline-success m-2"><i class="fa fa-edit"></i></a>
                                        <form class="inline-form" method="post" action="{{ route('Category-Tag.destroy', $key->id) }}" class="p-6">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-outline-danger m-2"><i class="fa fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modal name="NewCategoryTag">
        <form method="POST" action="{{ route('Category-Tag.store') }}" class="p-6">
            @csrf
            @section('Title')
                {{ __('Yeni Alt kategori Etiketi') }}
            @endsection
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <x-text-input id="childName" name="categoryName[]" type="text" class="form-control" required/>
                    <x-input-label for="childName" :value="__('  kategori İsmi')" />
                </div>
                <x-input-error :messages="$errors->get('categoryName')" class="mt-2" />
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-8">
                        <x-secondary-button id="btnEkle">
                            {{ __('Alt kategori Ekle') }}
                        </x-secondary-button>
                    </div>
                    <div class="col-md-4">
                        <x-text-input name="category" type="hidden" value="{{ $category->id }}" required/>
                        <x-danger-button class="btn btn-success">
                            {{ __('Kaydet') }}
                        </x-danger-button>
                    </div >
                </div>
            </div>
        </form>
    </x-modal>
</x-app-layout>
