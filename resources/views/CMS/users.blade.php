<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Kullanıcılar</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Ad Soyad</th>
                                    <th scope="col">E-posta</th>
                                    <th scope="col">Oluşturulma Tarihi</th>
                                    <th scope="col">Güncellemeler</th>
                                    <th scope="col">Aksiyon</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key)
                                    <tr>
                                        <td scope="row">
                                            <img style="width: 50px;" src="{{ asset('images/users/' . $key->image) }}" class="img-thumbnail cursor-pointer" alt="{{ $key->image }}">
                                        </td>
                                        <td>{{ $key->name }}</td>
                                        <td>{{ $key->email }}</td>
                                        <td>{{ date('n, F, Y', strtotime($key->created_at))}}</td>
                                        <td>{{ $key->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{ route('User.show', $key->id) }}" class="btn btn-outline-info m-2"><i class="fa fa-list"></i></a>
                                            <form class="inline-form" method="post" action="{{ route('User.destroy', $key->id) }}" class="p-6">
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
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
