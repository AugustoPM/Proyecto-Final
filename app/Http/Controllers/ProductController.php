<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $products = Product::all();
       return view('layouts.products.admin.indexproduct', compact('products'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.products.admin.createproduct');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $request->validate([
           'image-file' => 'image|mimes:png,jpg,jpeg,bmp,svg',
           'title' =>'required',
            ]);

            $file_name = 'sinfoto.jpg';
            if($request->file('image-file')) {
            $img = $request->file('image-file');
            $file_ext = $img->getClientOriginalExtension();
            $file_name = $request->input('title').".".$file_ext;
            Storage::disk('imagesPosts')->put(
            $file_name,
            file_get_contents($img->getRealPath())
            );
            }

          $product = Product::create([
               'image_name' => $file_name,
               'title' => $request->input('title'),
               'subtitle' => $request->input('subtitle'),
               'text' => $request->input('text'),
               // 'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('products')
           ->with('status', 'Producto Creado Satisfactoriamente');
       
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
       $product = Product::find($id);
       return view('layouts.products.admin.editproduct', compact('product'));
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
        $request->validate([
        'image-file' => 'image|mimes:png,jpg,jpeg,bmp,svg',
        'title' =>'required',
         ]);

       $file_name = 'sinfoto.jpg';
        if($request->file('image-file')) {
        $img = $request->file('image-file');
        $file_ext = $img->getClientOriginalExtension();
        $file_name = $request->input('title').".".$file_ext;
        Storage::disk('imagesPosts')->put(
            $file_name,
            file_get_contents($img->getRealPath())
        );
    }
        $product = Product::find($id);
        $product->update([
            'image-file' => $file_name,
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'text' => $request->input('text'),
           // 'status' => $request->input('status'),
           
       ]);
       return redirect()
       ->route('products');
       // ->with('status', 'Faq Modificado Satisfactoriamente');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $product = Product::destroy($id);
       

       return redirect()
       ->route('products')
       ->with('status', 'Producto Eliminado Satisfactoriamente');
   }
}
