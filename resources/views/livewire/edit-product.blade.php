<div>
    <div class="form-floating mb-3">
        <select id="CategoryName" name="CategoryName" wire:model="CategoryName" class="form-control">
            <option value=""></option>
            @foreach($category as $val)
                <option value="{{ $val->id }}">{{ $val->categoryName }}</option>
            @endforeach
        </select>
        <x-input-label for="CategoryName" :value="__('Kategori')" />
        <x-input-error :messages="$errors->get('CategoryName')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <select id="child" name="childName" wire:model="childName" class="form-control">
            <option value=""></option>
            @foreach($childs as $child)
                <option value="{{ $child->id }}">{{ $child->childName }}</option>
            @endforeach
        </select>
        <x-input-label for="child" :value="__('Orta Kategori Seç')" />
        <x-input-error :messages="$errors->get('childName')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <select id="tagName" name="tagName" class="form-control">
            <option value=""></option>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->tagName }}</option>
            @endforeach
        </select>
        <x-input-label for="tagName" :value="__('Küçük Kategori Seç')" />
        <x-input-error :messages="$errors->get('tagName')" class="mt-2" />
    </div>
</div>
