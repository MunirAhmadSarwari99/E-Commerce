<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\CategoryTag;
use App\Models\ChildCategory;
use Livewire\Component;

class EditProduct extends Component
{
    public $category;
    public $CategoryName;
    public $childs;
    public $childName;
    public $tags;
    public function render()
    {
        $this->category = Category::all();
        $this->childs = ChildCategory::where('category_id', $this->CategoryName)->get();
        $this->tags = CategoryTag::where('child_id', $this->childName)->get();
        return view('livewire.edit-product');
    }
}
