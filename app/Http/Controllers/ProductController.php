<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProductImageRequest;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
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
        $category = Category::all();
        return view('CMS.Seller.products', compact('products', 'category'));
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
           'category_id' => $request->input('CategoryName'),
           'ChildCategory_id' => $request->input('childName'),
           'CategoryTag_id' => $request->input('tagName'),
           'productName' => $request->input('productName'),
           'details' => $request->input('details'),
           'price' => $request->input('price'),
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->products()->save($product);

        $img = $request->file('image');

        $imageName = null;
        foreach ($img as $key => $key){
            $imageName = time() . $request->file('image')[$key]->getClientOriginalName();
            $request->image[$key]->move('images/Products/', $imageName);

            $details = new ProductDetail([
                'images' => $imageName,
            ]);

            $Prod = Product::findOrFail($product->id);
            $Prod->detail()->save($details);
        }

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
    public function update(EditProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $category = $product->category_id;
        $ChildCategory = $product->ChildCategory_id;
        $CategoryTag = $product->CategoryTag_id;

        if ($request->input('CategoryName') != null){
            $category = $request->input('CategoryName');
        }
        if ($request->input('childName') != null){
            $ChildCategory = $request->input('childName');
        }
        if ($request->input('tagName') != null){
            $CategoryTag = $request->input('tagName');
        }
        $product->category_id = $category;
        $product->ChildCategory_id = $ChildCategory;
        $product->CategoryTag_id = $CategoryTag;
        $product->productName = $request->input('productName');
        $product->details = $request->input('details');
        $discount = null;
        $oldPrice = null;
        $price = $request->input('price');

        if($request->input('discount') != null && $request->input('discount') == 0){
            $price = $product->price = $product->oldPrice;
            $oldPrice = $product->oldPrice = null;
        } elseif($request->input('discount') != null){
            $oldPrice = $product->oldPrice = $product->price;
            $discount = $request->input('discount');
            $discoun = $product->price * $request->input('discount') / 100;
            $price = round($product->price - $discoun, 2);
        }
        $product->price = $price;
        $product->oldPrice = $oldPrice;
        $product->discount = $discount;
        $product->save();

        return back();
    }

    public function SellerProductPhoto(EditProductImageRequest $request, $id){
        $product = ProductDetail::findOrFail($id);

        $imageName = $product->images;
        if ($request->file('image') != null){

            unlink(public_path('images/Products/' . $product->images));
            $imageName = time() . $request->file('image')->getClientOriginalName();
            $request->image->move('images/Products/', $imageName);
        }
        $product->images = $imageName;
        $product->save();
        return back();
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
        foreach ($product->detail as $item){
            unlink(public_path('images/Products/' . $item->images));
        }
        $product->delete();

        return back();
    }
}
