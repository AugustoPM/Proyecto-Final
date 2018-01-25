<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Faq2;
use App\Contact;
use App\Faqparallax;
use App\Contactparallax;
use App\Portada;
use App\Service;
use App\Product;
use App\Client;
use App\InfoAbout;
use App\AboutDes;
use App\Testimonial;
use App\Team;
use App\Pricing;
use App\TestimonialPri;
use App\Slider;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
       $faqs = Faq::all();
       $faq2s = Faq2::all();
       $portadas = Portada::all();
       $pricings = Pricing::all();
       return view('faq', compact('faqs','faq2s','pricings','portadas'));
      }
      
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function contact()
      {
      $contacts = Contact::all();
      $portadas = Portada::all();
      $clients = Client::all();
       return view('contact', compact('contacts','portadas','clients'));
    }
    
    public function welcome()
      {
        $sliders = Slider::all();
        $products = Product::with('user')
        ->orderBy('created_at', 'DESC')
        ->limit(3)
        ->get();
        $services = Service::all();
        $pricings = Pricing::all();
        $clients = Client::all();
       return view('welcome', compact('pricings','clients', 'services', 'products', 'sliders'));
    }

   

    public function product()
    {
       $products = Product::all();
       $clients = Client::all();
       $portadas = Portada::all();
       return view('product', compact('products','clients','portadas'));
      }

      public function about()
      {
          $portadas = Portada::all();
          $infos = InfoAbout::all();
          $abouts = AboutDes::all();
          $services = Service::all();
          $testimonials = Testimonial::all();
          $teams = Team::all();
          return view('about',compact('portadas','infos','abouts', 'services','testimonials', 'teams'));
      }

      public function pricing()
    {
       $pricings = Pricing::all();
       $testimonials = TestimonialPri::all();
       $portadas = Portada::all();
       return view('pricing', compact('pricings','testimonials','portadas'));
      }

}
