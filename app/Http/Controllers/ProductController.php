<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('product.index',compact('products'));
    }

    

    public function search(Request $request) {
        
        $output = "";
        $products =Product::where('product_name','Like','%'.$request->search.'%')
        ->orWhere('price','Like','%'.$request->search.'%')->get(); 

        foreach($products as $product)
        {
            $output.=

            '<tr>
                <td>'.$product->product_name.'</td>
                <td>'.$product->quantity.'</td>
                <td>'.$product->price.'</td>
                <td>'.$product->amount.'</td>
                <td>'.$product->sells.'</td>
                <td>'.'
                <a href="" class="btn btn-primary col-sm">'.'Edit</a>
                '.'</td>
                 <td>'.'<a href="'.$product->id.'" class="btn btn-danger col-sm">'.'Delete</a>
                '.'</td>
                
            </tr>';
        }

        return response($output);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('product.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'amount'=>'required',
            'sells'=>'required',
        ]);
        Product::create($request->all());
        return redirect()->to(route('product.index'))
            ->with('success','Product created successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::find($id);
        return view('product.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'amount'=>'required',
            'sells'=>'required',
        ]);
        $products = Product::find($id);
        $products->update($request->all());
        return redirect()->to(route('product.index'))
            ->with('success', 'Product updated successful.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->to(route('product.index'))
            ->with('success','Product deleted successfully');
    }
}
