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
                                @foreach($carts as $key)
                                    <tr>
                                        <td>{{ $key->product->productName }}</td>
                                        <td>{{ $key->product->price }} TL</td>
                                        <td>{{ $key->quantity }}</td>
                                        @foreach($key->orders as $order)
                                            <td>{{ $order->orderNo }}</td>
                                            <td>{{ round(($key->product->price * $key->product->tax) / 100 * $key->quantity, 0) }}</td>
                                            <td>{{ $key->product->price *  $key->quantity }}</td>
                                            <td>{{ \App\Models\App::DateTime('d, ', 'F', ' Y', $order->created_at) }}</td>
                                        @endforeach
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
