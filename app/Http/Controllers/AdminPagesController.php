<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Intervention\Image\Facades\Image;

class AdminPagesController extends Controller {

    public $timestamps = false;


    public function index() {
        return view('admin.pages.index');
    }

    public function create() {
        return view('admin.pages.product.create');
    }

    public function store(Request $request) {


        $product = new Product;


        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;

        $product->slug = str_slug($request->title);
        $product->category_ID = 1;
        $product->brand_ID = 1;
        $product->admin_ID = 1;

        $product->save();


        // ProductImage Model insert image

        if($request->hasFile('image')) {

            // insert that image

            $images = $request->file('image');

            $img = time() . '.' . $images->getClientOriginalExtension();
            $location = public_path('img/products/' .$img);

            Image::make($images)->save($location);

            $image = new ProductImage;
            $image->product_id = $product->id;
            $image->images = $img;
            $image->save();
        }

        return redirect()->route('admin.product.create');

    }
}
