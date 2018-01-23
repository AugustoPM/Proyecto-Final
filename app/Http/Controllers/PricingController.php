<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing;

class PricingController extends Controller
{
    public function pricing()
{
    $pricings = Pricing::all();
    return view('pricing', compact('pricings'));
}

}