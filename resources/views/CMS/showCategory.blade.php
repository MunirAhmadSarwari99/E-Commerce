<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">{{ __('Kategori Bilgileri')}}</h6>

                    <strong>Kategori Adı: {{ $category->categoryName }}</strong>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Kategori</th>
                                <th scope="col">Kayıt Tarihi</th>
                                <th scope="col">Son Güncelleme Tarihi</th>
                                <th scope="col">
                                    <button type="button" class="btn btn-dark float-end" data-bs-target="#NewChildCategory" data-bs-toggle="modal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category->childs as $key)
                                <tr>
                                    <td>{{ $key->childName }}</td>
                                    <td>{{ \App\Models\App::DateTime('d, ', 'F', ' Y', $key->created_at) }}</td>
                                    <td>{{ $key->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{ route('Child-Category.show', $key->id) }}" class="btn btn-outline-primary m-2"><i class="fa fa-list"></i></a>
                                        <a href="{{ route('Child-Category.edit', $key->id) }}" class="btn btn-outline-success m-2"><i class="fa fa-edit"></i></a>
                                        <form class="inline-form" method="post" action="{{ route('Child-Category.destroy', $key->id) }}" class="p-6">
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

    <x-modal name="NewChildCategory">
        <form method="POST" action="{{ route('Child-Category.store') }}" class="p-6">
            @csrf
            @section('Title')
                {{ __('Yeni Alt kategori') }}
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
