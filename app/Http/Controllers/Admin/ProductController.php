<?php

namespace App\Http\Controllers\Admin;

use index;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $category = Category::all();
        return view('admin.product.add' , compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $products = new Product();
        if($request->hasFile('image'))
            {
              $file = $request->file('image');
              $ext = $file->getClientOriginalExtension();
              $filname = time().".".$ext;
              $file->move('assets/uploads/products/',$filname);
              $products->image = $filname;
            }
            $products->cate_id = $request->input('cate_id');
            $products->name = $request->input('name');
            $products->slug = $request->input('slug');
            $products->small_description = $request->input('small_description');
            $products->description = $request->input('description');
            $products->original_price = $request->input('original_price');
            $products->selling_pice = $request->input('selling_pice');
            $products->qty = $request->input('qty');
            $products->tax = $request->input('tax');
            $products->status = $request->input('status') == TRUE?'1':'0';
            $products->trending = $request->input('trending') == TRUE?'1':'0';
            $products->meta_tittle = $request->input('meta_tittle');
            $products->meta_keywords = $request->input('meta_keywords');
            $products->meta_description = $request->input('meta_description');
            $products->save();
            return redirect('products')->with('status' , 'product added successfully');
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
        $products = Product::find($id);
        return view('admin.product.edit' , compact('products'));
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
        $products = Product::find($id);
        if($request->hasFile('image'))
            {
                $path = 'assets/uploads/products/'.$products->image;
                if(File::exists($path))
                {
                    File::delete($path);
                    
                }
              $file = $request->file('image');
              $ext = $file->getClientOriginalExtension();
              $filname = time().".".$ext;
              $file->move('assets/uploads/products/',$filname);
              $products->image = $filname;
            }
            $products->name = $request->input('name');
            $products->slug = $request->input('slug');
            $products->small_description = $request->input('small_description');
            $products->description = $request->input('description');
            $products->original_price = $request->input('original_price');
            $products->selling_pice = $request->input('selling_pice');
            $products->qty = $request->input('qty');
            $products->tax = $request->input('tax');
            $products->status = $request->input('status') == TRUE?'1':'0';
            $products->trending = $request->input('trending') == TRUE?'1':'0';
            $products->meta_tittle = $request->input('meta_tittle');
            $products->meta_keywords = $request->input('meta_keywords');
            $products->meta_description = $request->input('meta_description');
            $products->update();
            return redirect('products')->with('status' ,'product updated ' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $path = 'assets/uploads/products/'.$products->image;
                if(File::exists($path))
                {
                    File::delete($path);
                    
                }
                $products->delete();
                return redirect('products')->with('status' ,'product deleted ' );
    }
}
