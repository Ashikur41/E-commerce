<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){

            return view('Admin.home');
        }
        else{

            return view('fontend.welcome');
        }
    }

    public function home()
    {
        $product=product::paginate(6);//all();
        return view('fontend.welcome',compact('product'));
    }
    public function product_details($id)
    {
        $products=product::find($id);
        return view('fontend.home.product_details',compact('products'));
    }
}
