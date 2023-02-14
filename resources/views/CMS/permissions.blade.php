<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">İzinler</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">İzin</th>
                                <th scope="col">Kayıt Tarihi</th>
                                <th scope="col">son Güncelleme Tarihi</th>
                                <th scope="col">
                                    <button type="button" class="btn btn-dark float-end" data-bs-target="#confirm-user-deletion" data-bs-toggle="modal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $key)
                                <tr>
                                    <td>{{ $key->perLabel }}</td>
                                    <td>{{ \App\Models\App::DateTime('d, ', 'F', ' Y', $key->created_at) }}</td>
                                    <td>{{ $key->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{ route('Permission.edit', $key->id) }}" class="btn btn-outline-success m-2"><i class="fa fa-edit"></i></a>
                                        <form class="inline-form" method="post" action="{{ route('Permission.destroy', $key->id) }}" class="p-6">
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
                    {{ $permissions->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-modal name="confirm-user-deletion">
        <form method="post" action="{{ route('Permission.store') }}" class="p-6">
            @csrf
            @section('Title')
                {{ __('Yeni İzin') }}
            @endsection
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <x-text-input id="perName" name="perName" type="text" class="form-control"  autocomplete="perName"/>
                    <x-input-label for="perName" :value="__('İzin ismi')" />
                    <x-input-error :messages="$errors->get('perName')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <x-text-input id="perLabel" name="perLabel" type="text" class="form-control"  autocomplete="perLabel"/>
                    <x-input-label for="perLabel" :value="__('İzin Etiketi')" />
                    <x-input-error :messages="$errors->get('perLabel')" class="mt-2" />
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
