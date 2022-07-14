<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
   public function aboutUs() {
       return view("about-us");
   }
    //form
    public function categoryCreate(){
        return view('pages.forms.contentForm-category.category-create');
    }

    public function categoryEdit(){
        return view('pages.forms.contentForm-category.category-edit');
    }

    public function productCreate(){
        return view('pages.forms.contentForm-products.product-create');
    }

    public function productEdit(){
        return view('pages.forms.contentForm-products.product-edit');
    }

    //table
    public function listCategory(){
        return view('pages.tables.listCategory');
    }

    public function listProducts(){
        return view('pages.tables.listProducts');
    }
}
