<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Faq2;
use App\Contact;
use App\Faqparallax;
use App\Contactparallax;

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
       $faqparallaxes = Faqparallax::all();
       return view('faq', compact('faqs','faq2s','faqparallaxes'));
      }
      
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function contact()
      {
      $contacts = Contact::all();
      $contactparallaxes = Contactparallax::all();
       return view('contact', compact('contacts','contactparallaxes'));
    }
    
}
