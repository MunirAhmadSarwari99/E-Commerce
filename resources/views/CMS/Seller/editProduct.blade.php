<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">ÜrünLer</h6>
                    <form method="POST" action="{{ route('SellerProduct.store') }}" class="p-6" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @foreach($product->detail as $key)
                                <div class="col-md-3">
                                    <img id="image-view{{ $key->id }}" class="col-md-12 img-thumbnail cursor-pointer" src="{{ asset('images/Products/' . $key->images) }}" alt="{{ $product->productName }}">
                                    <x-text-input id="image{{ $key->id }}" name="image" type="file" class="hidden" required/>
                                    <x-input-error :messages="$errors->get('image')" class="mt-2 text-uppercase" />
                                </div>
                            @endforeach
                        </div>
                        <div class="form-floating mb-3">
{{--                            <img id="image-view" style="width: 200px;" src="{{ asset('images/users/default.png') }}" class="img-thumbnail cursor-pointer" alt="">--}}
                            <x-text-input id="image" name="image" type="file" class="hidden" required/>
                            <x-input-error :messages="$errors->get('image')" class="mt-2 text-uppercase" />
                        </div>
                        <div class="form-floating mb-3">
                            <x-text-input id="productName" name="productName" type="text" class="form-control" value="{{ $product->productName }}" required/>
                            <x-input-label for="productName" :value="__('Ürün Etiketi')" />
                               <x-input-error :messages="$errors->get('productName')" class="mt-2" />
                        </div>
                        @livewire('edit-product')
                        <div class="form-floating mb-3">
                            <x-text-input id="productModel" name="productModel" type="text" class="form-control" value="{{ $product->productModel }}"  required/>
                            <x-input-label for="productModel" :value="__('Ürün Modeli')" />
                            <x-input-error :messages="$errors->get('productModel')" class="mt-2" />
                        </div>
                        <div class="form-floating mb-3">
                            <x-text-input id="price" name="price" type="text" class="form-control" value="{{ $product->price }}"  required/>
                            <x-input-label for="price" :value="__('Fiyat')" />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
{{--                                <x-danger-button class="btn btn-success float-end">--}}
{{--                                    {{ __('Kaydet') }}--}}
{{--                                </x-danger-button>--}}
                            </div >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
