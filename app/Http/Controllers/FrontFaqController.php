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

class FrontFaqController extends Controller
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
       return view('faq', compact('faqs','faq2s','portadas'));
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
       return view('contact', compact('contacts','portadas'));
    }
    
    public function welcome()
      {
        $services = Service::all();
       return view('welcome', compact('services'));
    }
}
