<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ürün Detaylar</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Ürün Fotoğrafları</h6>
                            <div class="row mb-2">
                                @foreach($product->detail as $key)
                                    <div class="col-md-3">
                                        <img class="col-md-12 img-thumbnail" src="{{ asset('images/Products/' . $key->images) }}" alt="{{ $product->productName }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Ürün Renkleri</h6>
                            <div class="row mb-2">
                                @foreach($product->colors as $color)
                                    <div class="col-md-3">
                                        <img class="col-md-12 img-thumbnail" src="{{ asset('images/Products/Colors/' . $color->colors) }}" alt="{{ $product->productName }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="col">Ürün Adı</th>
                                    <td>{{ $product->productName }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Ürün KDV</th>
                                    <td>{{ $product->tax }} %</td>
                                </tr>
                                <tr>
                                    <th scope="col">Ürün Kategorisi</th>
                                    <td>{{ $product->category->categoryName }} >> {{ $product->chold->childName }} >> {{ $product->tag->tagName }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Fiyat</th>
                                    <td>{{ $product->price }} <strong class="text-danger">TL</strong></td>
                                </tr>
                                <tr>
                                    <th scope="col">Kayıt Tarihi</th>
                                    <td>{{ \App\Models\App::DateTime('d, ', 'F', ' Y', $product->created_at) }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">son Güncelleme Tarihi</th>
                                    <td>{{ $product->updated_at->diffForHumans()}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
