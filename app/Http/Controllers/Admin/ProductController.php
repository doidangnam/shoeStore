<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductValidator;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index() 
    {
        $active = "products";
        $products = Product::paginate(15);
        $categories = Category::all();
        return view('backend.products.index', compact('active', 'products', 'categories'));
    }
    public function store(ProductValidator $request) {
        $params = $request->all();

        $newProduct = Product::create([
            'name' => $params['name'],
            'description' => $params['description'],
            'SKU' => $params['sku'],
            'size' => $params['size'],
            'brand' => $params['brand'],
            'category_id' => $params['category_id'],
            'quantity' => $params['quantity'],
            'price' => $params['price']
        ]);

        if ($request->hasFile('upload_images')) {
            $file = $request->file('upload_images');
            $file->storeAs('', $file->getClientOriginalName(), 'product_images');
            ProductImage::create([
                'image' => $file->getClientOriginalName(),
                'product_id' => $newProduct->id,
            ]);
        }

        if ($newProduct) {
            Session::flash('messages_success', 'A new product is added successfully');
            return ['status' => true];
        }
        
        return ['status' => false];
    }
}
