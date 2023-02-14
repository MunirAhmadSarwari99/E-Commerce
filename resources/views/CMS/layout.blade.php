<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Title</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Kayıt Tarihi</th>
                                <th scope="col">son Güncelleme Tarihi</th>
                                <th scope="col">
                                    <button type="button" class="btn btn-dark float-end" data-bs-target="#" data-bs-toggle="modal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modal name="">
        <form method="POST" action="" class="p-6">
            @csrf
            @section('Title')
                {{ __('') }}
            @endsection
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <x-text-input id="" name="" type="text" class="form-control"/>
                    <x-input-label for="" :value="__('')" />
                    <x-input-error :messages="$errors->get('')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <x-text-input id="" name="" type="text" class="form-control"/>
                    <x-input-label for="" :value="__('')" />
                    <x-input-error :messages="$errors->get('')" class="mt-2" />
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
                            {{ __('Kayded') }}
                        </x-danger-button>
                    </div >
                </div>
            </div>
        </form>
    </x-modal>
</x-app-layout>
