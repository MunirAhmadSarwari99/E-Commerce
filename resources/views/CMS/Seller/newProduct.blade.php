<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">{{ __('Yeni Ürün') }}</h6>
                    <form name="myform" novalidate method="POST" action="{{ route('SellerProduct.store') }}" class="p-6" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div id="preview" class="col-md-6">
                                <h6>Ürün Fotoğrafları</h6>
                            </div>
                            <div id="colorPreview" class="col-md-6">
                                <h6>Ürün Rengi</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <button type="button" id="image-view" class="btn btn-primary mt-5 col-md-12">Ürün Fotoğraflarını Seçin</button>
                                    <x-text-input id="images" name="image[]" type="file" class="hidden"  required multiple/>
                                    <x-input-error :messages="$errors->get('image')" class="mt-2 text-uppercase" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <button type="button" id="image-colorView" class="btn btn-primary mt-5 col-md-12">Ürün Rengini Seçin</button>
                                    <x-text-input id="imagesColor" name="colors[]" type="file" class="hidden"  required multiple/>
                                    <x-input-error :messages="$errors->get('colors')" class="mt-2 text-uppercase" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <x-text-input id="productName" name="productName" type="text" class="form-control" required/>
                                    <x-input-label for="productName" :value="__('Ürün Etiketi')" />
                                    <x-input-error :messages="$errors->get('productName')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select id="child" name="childName"  class="form-control" disabled required></select>
                                    <x-input-label for="child" :value="__('Alt Kategori Seç')" />
                                    <x-input-error :messages="$errors->get('childName')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select id="childTo" name="tagName" class="form-control" disabled required></select>
                                    <x-input-label for="childTo" :value="__('Küçük Kategori Seç')" />
                                    <x-input-error :messages="$errors->get('tagName')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <x-text-input id="price" name="price" type="text" class="form-control" required/>
                                    <x-input-label for="price" :value="__('Fiyat')" />
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea id="details" name="details" class="form-control" required></textarea>
                                    <x-input-error :messages="$errors->get('details')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <x-danger-button class="btn btn-success float-end">
                                    {{ __('Kaydet') }}
                                </x-danger-button>
                            </div >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script>
            ClassicEditor
                .create( document.querySelector( '#details' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
     @endsection
</x-app-layout>
