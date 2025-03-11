<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Supplier;
use App\Services\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_index(){
        $suppliers = Supplier::all();
        $products = Product::all();
        return view("Admin.product.index",compact(["suppliers","products"]));
    }

    public function product_store(Request $request, Image $imageService) {
        $products = $request->validate([
            'product_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'supplier_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $imageService->imageHandler(1, $request, 'image');
        }

        Product::create([
            'product_name' => $products['product_name'],
            'description'  => $products['description'],
            'supplier_id'  => $products['supplier_id'],
            'image'         => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Product created successfully!');
    }

}
