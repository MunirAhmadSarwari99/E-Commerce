<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">
                        Kullanıcı Bilgileri
                    </h6>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('images/users/' . $user->image) }}" class="img-thumbnail cursor-pointer" alt="{{ $user->image }}">
                        </div>
                        <div class="col-md-4">
                            <address>
                                <strong>Ad Soyad</strong><br/>
                                {{ $user->name }}<br/>
                                <strong>E-posta</strong><br/>
                                {{ $user->email }}<br/>
                                <strong>Cinsiyet</strong><br/>
                                @if($user->gender !== null & $user->gender == 0)
                                    Erkek
                                @elseif($user->gender !== null & $user->gender == 1)
                                    Kız
                                @endif
                            </address>
                        </div>
                        <div class="col-md-4">
                            <address>
                                <strong>Telefon</strong><br/>
                                {{ $user->phone }}<br/>
                                <strong>Adres</strong><br/>
                                {{ $user->address }}<br/>
                            </address>
                        </div>
                        <div class="col-md-4 mt-5">
                            <strong>Roller</strong>
                            @foreach($user->roles as $role)
                                <ul class="list-group">
                                    <li class="list-group-item">{{ $role->roleLabel }}</li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="col-md-4 mt-5">
                            <strong>İzinler</strong>
                            @foreach($user->roles as $role)
                                @foreach($role->permissions as $per)
                                    <ul class="list-group">
                                        <li class="list-group-item">{{ $per->perLabel }}</li>
                                    </ul>
                                @endforeach
                            @endforeach
                        </div>
                        <div class="col-md-4 mt-5">
                            <form method="post" action="{{ route('User.update', $user->id) }}" class="p-6">
                                @csrf
                                @method('PATCH')
                                <div class="form-floating mb-3">
                                    <strong>{{ __('Kullanıcının Rolunu Değiştir ') }}</strong>
                                    <select id="roleName" class="form-control Select2" name="roleName[]" multiple>
                                        @foreach($roles as $role)
                                            <option
                                                @foreach($user->roles as $key)
                                                    @if($role->id == $key->id)
                                                        selected
                                                    @endif
                                                @endforeach
                                                value="{{ $role->id }}">{{ $role->roleLabel }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('roleName')" class="mt-2" />
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <x-danger-button class="btn btn-success">
                                            {{ __('Kayded') }}
                                        </x-danger-button>
                                    </div >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
