<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
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
       $clients = Client::all();
       return view('layouts.products.admin.indexclient', compact('clients'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.products.admin.createclient');
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
           'title' =>'required',
           'resume' =>'required',
               ]);

          $client = Client::create([
               'title' => $request->input('title'),
               'resume' => $request->input('resume'),
               // 'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('clients')
           ->with('status', 'Client Creado Satisfactoriamente');
       
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
       $client = Client::find($id);
       return view('layouts.products.admin.editclient', compact('client'));
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
       $client = Client::find($id);
       $client->update([
           
           'title' => $request->input('title'),
           'resume' => $request->input('resume'),
           // 'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('clients');
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
       $client = Client::destroy($id);
       

       return redirect()
       ->route('clients')
       ->with('status', 'Client Eliminado Satisfactoriamente');
   }
}
