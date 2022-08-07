<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featured_products = Product::where('trending', '1')->take(4)->get();
        $trending_category = Category::where('popular', '1')->take(4)->get();
        return view('frontend.index', compact('featured_products', 'trending_category'));
    }

    // CATEGORY FUNCTION FOR FETCH THE TRENDING CATEGORY

    public function category()
    {
        $category = Category::where('status', '0')->get();
        return view('frontend.category', compact('category'));
    }

    // function for showing all the products of thecategories

    public function viewcategory($slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('cate_id', $category->id)->where('status', '0')->get();
            return view('frontend.products.index', compact('category', 'products'));
        } else {
            return redirect('/')->with("status", "slug does not exist");
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productview($cate_slug, $prod_slug)
    {
        if (Category::where('slug', $cate_slug)->exists()) {
            if (Product::where('slug', $prod_slug)->exists()) {
                $products = Product::where('slug', $prod_slug)->first();
                return view('frontend.products.show', compact('products'));
            } else {
                return redirect('/')->with('status', "the link was broken");
            }
        } else {
            return redirect('/')->with('status', "no category");
        }
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
