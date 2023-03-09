<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">ÜrünLer</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Ürünler</th>
                                <th scope="col">Kayıt Tarihi</th>
                                <th scope="col" colspan="2">Son Güncelleme</th>
                                <th scope="col">
                                    <button type="button" class="btn btn-dark float-end" data-bs-target="#NewProduct" data-bs-toggle="modal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key)
                                    <tr>
                                        <td>{{ $key->productName }}</td>
                                        <td>{{ \App\Models\App::DateTime('d, ', 'F', ' Y', $key->created_at) }}</td>
                                        <td>{{ $key->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{ route('SellerProduct.show', $key->id) }}" class="btn btn-outline-primary m-2"><i class="fa fa-list"></i></a>
                                            <a href="{{ route('SellerProduct.edit', $key->id) }}" class="btn btn-outline-success m-2"><i class="fa fa-edit"></i></a>
                                            <form class="inline-form" method="post" action="{{ route('SellerProduct.destroy', $key->id) }}" class="p-6">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger m-2"><i class="fa fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-modal name="NewProduct">
        <form method="POST" action="{{ route('SellerProduct.store') }}" class="p-6" enctype="multipart/form-data">
            @csrf
            @section('Title')
                {{ __('Yeni Ürün') }}
            @endsection
            <div class="modal-body">
                <div id="preview" class="row"></div>
                <div class="form-floating mb-3">
                    <button type="button" id="image-view" class="btn btn-primary mt-5">Ürün Fotoğrafını Seçin</button>
                    <x-text-input id="images" name="image[]" type="file" class="hidden"  required multiple/>
                    <x-input-error :messages="$errors->get('image')" class="mt-2 text-uppercase" />
                </div>
                <div class="form-floating mb-3">
                    <x-text-input id="productName" name="productName" type="text" class="form-control" required/>
                    <x-input-label for="productName" :value="__('Ürün Etiketi')" />
                    <x-input-error :messages="$errors->get('productName')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <select id="CategoryName" name="CategoryName" class="form-control" required>
                        <option value=""></option>
                        @foreach($category as $val)
                            <option value="{{ $val->id }}">{{ $val->categoryName }}</option>
                        @endforeach
                    </select>
                    <x-input-label for="CategoryName" :value="__('Kategori')" />
                    <x-input-error :messages="$errors->get('CategoryName')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <select id="child" name="childName"  class="form-control" disabled required></select>
                    <x-input-label for="child" :value="__('Alt Kategori Seç')" />
                    <x-input-error :messages="$errors->get('childName')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <select id="childTo" name="tagName" class="form-control" disabled required></select>
                    <x-input-label for="childTo" :value="__('Küçük Kategori Seç')" />
                    <x-input-error :messages="$errors->get('tagName')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <textarea id="editor" style="height: 250px;" name="details" class="form-control" required></textarea>
                    <x-input-label for="editor" :value="__('Not')" />
                    <x-input-error :messages="$errors->get('details')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <x-text-input id="price" name="price" type="text" class="form-control" required/>
                    <x-input-label for="price" :value="__('Fiyat')" />
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-6">
                        <x-secondary-button data-bs-dismiss="modal">
                            {{ __('İptal') }}
                        </x-secondary-button>
                    </div>
                    <div class="col-md-6">
                        <x-danger-button class="btn btn-success">
                            {{ __('Kaydet') }}
                        </x-danger-button>
                    </div >
                </div>
            </div>
        </form>
    </x-modal>

{{--@section('script')--}}
{{--        <script>--}}
{{--            ClassicEditor--}}
{{--                .create( document.querySelector( '#editor' ) )--}}
{{--                .catch( error => {--}}
{{--                    console.error( error );--}}
{{--                } );--}}
{{--        </script>--}}
{{-- @endsection--}}
</x-app-layout>
