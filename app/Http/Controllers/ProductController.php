<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\CategoryTag;
use App\Models\ChildCategory;
use App\Models\ChildToChildCategory;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserAuthorized:' . 1);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('user_id', Auth::user()->id)->paginate(10);
        return view('CMS.Seller.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $product = new Product([
           'productName' => $request->input('productName'),
           'details' => $request->input('details'),
           'price' => $request->input('price'),
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->products()->save($product);

        $category = Category::findOrFail($request->input('CategoryName'));
        $category->products()->save($product);

        $ChildCategory = ChildCategory::findOrFail($request->input('childName'));
        $ChildCategory->products()->save($product);

        $CategoryTag = CategoryTag::findOrFail($request->input('tagName'));
        $CategoryTag->products()->save($product);

        $img = $request->file('image');

        $imageName = null;
        foreach ($img as $key => $key){
            $imageName = time() . $request->file('image')->getClientOriginalName();
            $request->image->move('images/Products/', $imageName);

            $details = new ProductDetail([
                'images' => $imageName,
                'colors' => $request->input('colors'),
            ]);

            $Prod = Product::findOrFail($product->id);
            $Prod->details()->save($details);
        }


//        $product = new Product([
//           'category_id' => $request->input('CategoryName'),
//           'categoryChild_id' => $request->input('childName'),
//           'categoryChildTo_id' => $request->input('childTo'),
//           'productName' => $request->input('productName'),
//           'productModel' => $request->input('productModel'),
//           'image' => $imageName,
//           'price' => $request->input('price'),
//        ]);
//
//        $user = User::findOrFail(Auth::user()->id);
//        $user->products()->save($product);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('CMS.Seller.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $category = Category::all();
        return view('CMS.Seller.editProduct', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        unlink(public_path('images/Products/' . $product->image));
        $product->delete();

        return back();
    }
}
