<div>
    <div id="preview" class="row"></div>
    <div class="form-floating mb-3">
        <button type="button" id="image-view" class="btn btn-primary mt-5">Ürün Fotoğrafını Seçin</button>
        <x-text-input id="images" name="image[]" type="file" class="hidden"  required multiple/>
        <x-input-error :messages="$errors->get('image')" class="mt-2 text-uppercase" />
    </div>
    <div class="form-floating mb-3">
        <x-text-input id="colors" name="colors" type="color" class="form-control" required/>
        <x-input-label for="colors" :value="__('Ürün Rengi')" />
        <x-input-error :messages="$errors->get('colors')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <x-text-input id="productName" name="productName" type="text" class="form-control" required/>
        <x-input-label for="productName" :value="__('Ürün Etiketi')" />
        <x-input-error :messages="$errors->get('productName')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <select id="CategoryName" name="CategoryName"  wire:model="CategoryName" class="form-control" required>
            <option value=""></option>
            @foreach($category as $val)
                <option value="{{ $val->id }}">{{ $val->categoryName }}</option>
            @endforeach
        </select>
        <x-input-label for="CategoryName" :value="__('Kategori')" />
        <x-input-error :messages="$errors->get('CategoryName')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <select id="child" name="childName" wire:model="childName"  class="form-control" required>
            <option value=""></option>
            @foreach($childs as $child)
                <option value="{{ $child->id }}">{{ $child->childName }}</option>
            @endforeach
        </select>
        <x-input-label for="child" :value="__('Alt Kategori Seç')" />
        <x-input-error :messages="$errors->get('childName')" class="mt-2" />
    </div>

    <div class="form-floating mb-3">
        <select id="childTo" name="tagName" class="form-control" required>
            <option value=""></option>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->tagName }}</option>
            @endforeach
        </select>
        <x-input-label for="childTo" :value="__('Küçük Kategori Seç')" />
        <x-input-error :messages="$errors->get('tagName')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <textarea id="details" name="details" class="form-control h-100" required></textarea>
        <x-input-label for="details" :value="__('Not')" />
        <x-input-error :messages="$errors->get('details')" class="mt-2" />
    </div>
    <div class="form-floating mb-3">
        <x-text-input id="price" name="price" type="text" class="form-control" required/>
        <x-input-label for="price" :value="__('Fiyat')" />
        <x-input-error :messages="$errors->get('price')" class="mt-2" />
    </div>
</div>