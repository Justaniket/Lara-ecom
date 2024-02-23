<?php

namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Http\Request;

class cart_controller extends Controller
{
   public function cart($id){
    $Products = Products::where('id',$id)->first();
    return view('/cart')->with(compact('Products'));;



    
     if (Auth::check()) {
     
      $userId = Auth::id();
      $cart = Cart::where('user_id', $userId)->firstOrCreate(['user_id' => $userId]);
      $cart->products()->attach($productId);

      // Add any additional logic if needed (e.g., update cart total, notify user, etc.)

      return redirect()->route('product_details', $productId)->with('success', 'Product added to cart successfully.');
  } else {
      // User is not logged in, redirect to the login page
      return redirect()->route('/user_login')->with('error', 'Please log in to add the product to your cart.');
  }
}}
