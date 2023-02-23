<div>
    <div class="ec-quickview-qty">
        <div class="qty-plus-minus">
            <select class="qty-input" wire:model="quantity">
                @for($i = 1; $i < 11; $i ++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="ec-quickview-cart ">
            <button class="btn btn-primary" wire:click="AddCart">
                <img src="{{ asset('images/icons/cart.svg') }}" class="svg_img pro_svg" alt="" />
                Sepete Ekle
            </button>
        </div>
    </div>
</div>
