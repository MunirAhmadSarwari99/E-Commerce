<x-app-layout>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">{{ __('Kategoriyi Etiket Ekle')}}</h6>
                    <form method="POST" action="{{ route('CategoryTags.update', $category->id) }}" class="p-6">
                        @csrf
                        @method('PATCH')
                        <strong>{{  __(' Etiket') }}</strong>
                        <div class="form-floating mb-3">
                            <select id="childName" name="categoryName[]" class="form-control Select2" multiple required>
                                @foreach($childCategory as $child)
                                    <option
                                        @foreach($category->childs as $val)
                                            @if($val->id == $child->id) selected @endif
                                        @endforeach
                                        value="{{ $child->id }}">{{ $child->childName }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('categoryName')" class="mt-2" />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <x-danger-button class="btn btn-success  float-end">
                                    {{ __('Kaydet') }}
                                </x-danger-button>
                            </div >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
