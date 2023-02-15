<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Küçük Kategori</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Kategori</th>
                                <th scope="col">Kayıt Tarihi</th>
                                <th scope="col">Son Güncelleme Tarihi</th>
                                <th scope="col">
                                    <button type="button" class="btn btn-dark float-end" data-bs-target="#NewCategory" data-bs-toggle="modal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($childTo as $key)
                                    <tr>
                                        <td>{{ $key->childName }}</td>
                                        <td>{{ \App\Models\App::DateTime('d, ', 'F', ' Y', $key->created_at) }}</td>
                                        <td>{{ $key->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{ route('ChildToChildCategory.edit', $key->id) }}" class="btn btn-outline-success m-2"><i class="fa fa-edit"></i></a>
                                            <form class="inline-form" method="post" action="{{ route('ChildToChildCategory.destroy', $key->id) }}" class="p-6">
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
                    {{ $childTo->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-modal name="NewCategory">
        <form method="POST" action="{{ route('ChildToChildCategory.store') }}" class="p-6">
            @csrf
            @section('Title')
                {{ __('Yeni Kategori') }}
            @endsection
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <select id="mainCategoryName" name="mainCategoryName" class="form-control" required>
                        <option value=""></option>
                        @foreach($category as $val)
                            <option value="{{ $val->id }}">{{ $val->categoryName }}</option>
                        @endforeach
                    </select>
                    <x-input-label for="mainCategoryName" :value="__('Kategori Seç')" />
                    <x-input-error :messages="$errors->get('mainCategoryName')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <select id="childName" name="childName" class="form-control" required></select>
                    <x-input-label for="childName" :value="__('Orta Kategori Seç')" />
                    <x-input-error :messages="$errors->get('childName')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <x-text-input id="categoryName" name="categoryName[]" type="text" class="form-control" required/>
                    <x-input-label for="categoryName" :value="__('Kategori İsmi')" />
                </div>
                <x-input-error :messages="$errors->get('categoryName')" class="mt-2" />
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-7">
                        <x-secondary-button id="btnEkle">
                            {{ __('Kategori Ekle') }}
                        </x-secondary-button>
                    </div>
                    <div class="col-md-5">
                        <x-danger-button class="btn btn-success">
                            {{ __('Kaydet') }}
                        </x-danger-button>
                    </div >
                </div>
            </div>
        </form>
    </x-modal>
</x-app-layout>
