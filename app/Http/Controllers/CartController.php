<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserAuthorized:' . 2);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $checked = Cart::where('user_id', Auth::user()->id)->where('checked', 1)->get();
        $SubTotal = 00.00;
        $kdv = 00;
        $total = 00.00;
        if ($checked->count() == 1){
            foreach ($checked as $cart){
                $SubTotal =  $cart->product->price * $cart->quantity;
                $kdv = round(($SubTotal * $cart->product->tax) / 100, 0);
                $total = $SubTotal + $kdv;
            }
        }else{
            foreach ($checked as $cart){
                $SubTotal =  $cart->product->sum('price') * $cart->sum('quantity');
                $kdv = round(($SubTotal * $cart->product->tax) / 100, 0);
                $total = $SubTotal + $kdv;
            }
        }

        return view('CMS.Customer.carts', compact('carts', 'SubTotal', 'kdv', 'total'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
