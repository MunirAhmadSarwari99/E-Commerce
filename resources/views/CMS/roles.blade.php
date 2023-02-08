<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Roller</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Roller</th>
                                <th scope="col">Oluşturulma Tarihi</th>
                                <th scope="col">Güncellemeler</th>
                                <th scope="col">
                                    <button type="button" class="btn btn-dark float-end" data-bs-target="#new-role" data-bs-toggle="modal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rols as $key)
                                <tr>
                                    <td>{{ $key->roleLabel }}</td>
                                    <td>{{ date('n, F, Y', strtotime($key->created_at))}}</td>
                                    <td>{{ $key->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{ route('Role.edit', $key->id) }}" class="btn btn-outline-success m-2 float-end"><i class="fa fa-edit"></i></a>
                                        <form class="inline-form float-end" method="post" action="{{ route('Role.destroy', $key->id) }}" class="p-6">
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
                </div>
            </div>
        </div>
    </div>

    <x-modal name="new-role">
        <form method="post" action="{{ route('Role.store') }}" class="p-6">
            @csrf
            @section('Title')
                {{ __('Yeni Rol') }}
            @endsection
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <x-text-input id="roleName" name="roleName" type="text" class="form-control"  autocomplete="roleName"/>
                    <x-input-label for="roleName" :value="__('Rol ismi')" />
                    <x-input-error :messages="$errors->get('roleName')" class="mt-2" />
                </div>
                <div class="form-floating mb-3">
                    <x-text-input id="roleLabel" name="roleLabel" type="text" class="form-control"  autocomplete="roleLabel"/>
                    <x-input-label for="roleLabel" :value="__('Rol Etiketi')" />
                    <x-input-error :messages="$errors->get('roleLabel')" class="mt-2" />
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
