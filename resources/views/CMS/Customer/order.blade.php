<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Siparişlerim</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Ürün</th>
                                    <th scope="col">Fiyat</th>
                                    <th scope="col">Miktar</th>
                                    <th scope="col">Sipariş No</th>
                                    <th scope="col">KDV</th>
                                    <th scope="col">Toplam</th>
                                    <th scope="col">Sipariş Tarihi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $key)
                                    <tr>
                                        <td>{{ $key->cart->product->productName }}</td>
                                        <td>{{ $key->cart->product->price }} TL</td>
                                        <td>{{ $key->cart->quantity }}</td>
                                        <td>{{ $key->orderNo }}</td>
                                        <td>{{ round(($key->cart->product->price * $key->cart->product->tax) / 100 * $key->cart->quantity, 0) }}</td>
                                        <td>{{ $key->cart->product->price *  $key->cart->quantity }}</td>
                                        <td>{{ \App\Models\App::DateTime('d, ', 'F', ' Y', $key->created_at) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
