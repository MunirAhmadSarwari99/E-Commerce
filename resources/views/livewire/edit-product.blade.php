<div>
    <strong>{{ $CategoryName }}</strong>
    <div class="form-floating mb-3">
        <select id="CategoryName" name="CategoryName" wire:model="CategoryName" class="form-control" required>
            @foreach($category as $val)
                <option
                    @foreach(Auth::user()->products as $key)
                        @if($key->category_id == $val->id)
                            selected
                    @endif
                    @endforeach
                    {{--                    @if($val->categoryName == $product->category->categoryName) selected @endif--}}
                    value="{{ $val->id }}">{{ $val->categoryName }}</option>
            @endforeach
        </select>
        <x-input-label for="CategoryName" :value="__('Kategori')" />
        <x-input-error :messages="$errors->get('mainCategoryName')" class="mt-2" />
    </div>
    @foreach($category as $val)
        @foreach(Auth::user()->products as $key)
            @if($key->category_id == $val->id)
                Munir
            @endif
        @endforeach
    @endforeach
    <div class="form-floating mb-3">
        <select id="child" name="childName" wire:model="childName" class="form-control" required>
            @foreach($childs as $child)
                <option value="{{ $child->id }}">{{ $child->childName }}</option>
            @endforeach
        </select>
        <x-input-label for="child" :value="__('Orta Kategori Seç')" />
        <x-input-error :messages="$errors->get('childName')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <select id="childTo" name="childTo" class="form-control" required>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->tagName }}</option>
            @endforeach
        </select>
        <x-input-label for="childTo" :value="__('Küçük Kategori Seç')" />
        <x-input-error :messages="$errors->get('childTo')" class="mt-2" />
    </div>
</div>
