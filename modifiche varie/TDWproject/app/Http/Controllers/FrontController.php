<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
      return view('frontView.home.homeContent');
    }
    public function about(){
      return view('frontView.about.aboutContent');
    }
    public function shop(){
      return view('frontView.shop.shopContent');
    }
    public function contact(){
      return view('frontView.contact.contactContent');
    }
}
