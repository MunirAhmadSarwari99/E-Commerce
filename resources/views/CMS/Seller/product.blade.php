<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ürün Detaylar</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="col-md-12 img-thumbnail" src="{{ asset('images/Products/' . $product->image) }}" alt="{{ $product->image }}">
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
                                    <th scope="col">Ürün Modeli</th>
                                    <td>{{ $product->productModel }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Ürün Kategorisi</th>
                                    <td>{{ $product->category->categoryName }} >> {{ $product->childCategory->childName }} >> {{ $product->childToCategory->childName }}</td>
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
