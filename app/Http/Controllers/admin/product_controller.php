<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use File;

class product_controller extends Controller
{//    /send data to db
    public function addProduct(Request $request){
        $data =  $request->all();
        
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'category' => 'required|string|max:255',
        //     'price' => 'required|string|max:255',
        //     'description' => 'required|string|max:255',
           
        // ]);
    if($request->isMethod("post")){
     $Products = new Products;
     $Products->name = $request->name;
	 $imagename=time(). '.'.$request->image->extension();
        // saved to public folder
     $request->image->move(public_path('adminImages/products_images'), $imagename);
     $Products->image=$imagename;
     $Products->price=$request->price;
     $Products->category_id=$request->category_id;
     $Products->description=$request->description;
     $Products->status = !empty($request->status) ? 1 : 0;
     $Products->save();
      return redirect ('admin/view_products');
      }else{
        // category option in product
        $Category = Category::all();
        return view("admin.Add_product")->with(compact('Category'));
      }
    }
// display data on page
    public function viewProducts()
 {
//  Join two tables
//     $Products = Products::select('adminproducts.*','admincategory.name as catname')
//         ->Join('admincategory','admincategory.id','adminproducts.category_id')
//         ->orderBy('id','ASC')
//         ->get();
//  return view ('admin.view_products')->with(compact('Products'));
$Products = Products::with('category')->orderBy('id', 'ASC')->get();
return view('admin.view_products')->with(compact('Products'));
 } 
public function delete(Request $request, $id){
    Products::where( 'id', $id)->delete();
    return redirect()->back();
}
  public function update(Request $request, $id){
  
    if($request->isMethod("post")){
    
    $products = Products::find($id);

    if (is_null( $products)) {
        
        return redirect('admin/Add_product');
    }
      if ($request->hasFile('image')) {
        $destination = 'adminImages/products_images/'.$products->image;
        // check the image file exist before delete
        if (File::exists($destination)) {
            File::delete($destination);
        }   
        //  new image upload nd save
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('adminImages/products_images'), $imageName);
        $products->image = $imageName;
    }
    $products->name = $request->input('name');
    $Products->category_id=$request->category_id;
    $products->price=$request->input('price');
    $products->description=$request->input('description');
    $products->status = !empty($request['status']) ? 1 : 0;
    $products->save();
     return redirect('/admin/view_products');
}
   $Products=Products::where('id',$id)->first();
   $Category = Category::all();
   return view('admin.edit_product')->with (compact('Products','Category'));

}}
 



  
    


