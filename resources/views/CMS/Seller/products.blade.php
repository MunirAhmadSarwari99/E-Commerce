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
                                <th scope="col">son Güncelleme Tarihi</th>
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
                                                <button class="btn btn-outline-danger m-2"><i class="fa fa-trash"></i> </button>
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
                @livewire('child-category')
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
                            {{ __('Kayded') }}
                        </x-danger-button>
                    </div >
                </div>
            </div>
        </form>
    </x-modal>
</x-app-layout>
