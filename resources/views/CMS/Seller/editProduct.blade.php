<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">ÜrünLer</h6>
                    <div class="row mb-5">
                        @foreach($product->detail as $key)
                            <form method="POST" action="{{ route('SellerProductPhoto.update',['id' => $key->id]) }}" class="col-md-3" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                    <div class="col-md-12">
                                        <img class="col-md-12 img-thumbnail" src="{{ asset('images/Products/' . $key->images) }}" alt="{{ $product->productName }}">
                                        <x-text-input name="image" type="file" class="form-control" required/>
                                        <x-input-error :messages="$errors->get('image')" class="mt-2 text-uppercase" />
                                    </div>
                                    <div class="col-md-12">
                                        <x-primary-button type="submit" class="col-md-12 btn btn-primary mt-2">
                                            {{ __('Fotoğrafı Değiştir') }}
                                        </x-primary-button>
                                    </div >

                            </form>
                        @endforeach
                    </div>
                    <form method="POST" action="{{ route('SellerProduct.update', $product->id) }}" class="p-6" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-floating mb-3">
                            <x-text-input id="productName" name="productName" type="text" class="form-control" value="{{ $product->productName }}" required/>
                            <x-input-label for="productName" :value="__('Ürün Etiketi')" />
                               <x-input-error :messages="$errors->get('productName')" class="mt-2" />
                        </div>
                        <strong>{{ $product->category->categoryName .' / '. $product->chold->childName .' / '. $product->tag->tagName }}</strong>
                        <div class="form-floating mb-3">
                            <select id="CategoryName" name="CategoryName" class="form-control">
                                <option value=""></option>
                                @foreach($category as $val)
                                    <option value="{{ $val->id }}">{{ $val->categoryName }}</option>
                                @endforeach
                            </select>
                            <x-input-label for="CategoryName" :value="__('Kategori')" />
                            <x-input-error :messages="$errors->get('CategoryName')" class="mt-2" />
                        </div>
                        <div class="form-floating mb-3">
                            <select id="child" name="childName" class="form-control" disabled></select>
                            <x-input-label for="child" :value="__('Orta Kategori Seç')" />
                            <x-input-error :messages="$errors->get('childName')" class="mt-2" />
                        </div>
                        <div class="form-floating mb-3">
                            <select id="tagName" name="tagName" class="form-control" disabled> </select>
                            <x-input-label for="tagName" :value="__('Küçük Kategori Seç')" />
                            <x-input-error :messages="$errors->get('tagName')" class="mt-2" />
                        </div>
                        <div class="form-floating mb-3">
                            <x-text-input id="price" name="price" type="text" class="form-control" value="{{ $product->price }}" required/>
                            <x-input-label for="price" :value="__('Fiyat')" />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                        <strong class="text-uppercase text-danger">
                            @for($i = 20; $i < 101; $i ++)
                                @if($product->discount == $i)
                                    Fiyatı Değiştirmek İçin Once İndirimi Kaldırmanız lazım..!
                                @endif
                            @endfor
                        </strong>
                        <div class="form-floating mb-3">
                            <select id="discount" name="discount" type="text" class="form-control">
                                <option value=""></option>
                                <option value="0">İndirimi Kaldır</option>
                                @for($i = 20; $i < 101; $i ++)
                                    <option @if($product->discount == $i) selected @endif value="{{ $i }}">{{ $i }}%</option>
                                @endfor
                            </select>
                            <x-input-label for="discount" :value="__('İndirim')" />
                            <x-input-error :messages="$errors->get('discount')" class="mt-2" />
                        </div>
                        <div class="form-floating mb-3">
                            <textarea id="details" style="height: 250px;" name="details" class="form-control" required>{{ $product->details }}</textarea>
                            <x-input-label for="details" :value="__('Not')" />
                            <x-input-error :messages="$errors->get('details')" class="mt-2" />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <x-primary-button class="btn btn-success float-end">
                                    {{ __('Kaydet') }}
                                </x-primary-button>
                            </div >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
