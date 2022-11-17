<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Validation\Validator;
use App\Models\Category;
use App\Models\product;

class adminController extends Controller
{
    public function index()
    {
        return view('Admin.deshboard');
    }
    public function adminlogin()
    {
        return view('Admin.admin_login');
    }

    public function view_category()

    {
        $data=Category::all();
        return view('Admin.Admin_control.category',compact('data'));
    }

    public function add_category(Request $request)
    {


        $data=new Category();

        $data->add_category=$request->add_category;
        $data->category_title=$request->category_title;
        $data->category_description=$request->category_description;
        
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);

        $data->image=$imagename;

        $validatedData = $request->validate([
            'add_category' => ['required','unique:categories', 'max:255'],
        ]);

        $data->save();

   

        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function delete_category($id)
    {
        $data=Category::find($id);

        $data->delete();

        return redirect()->back()->with('message','Category Deleted Successfully');

    }

    //product
    public function create_product()
    {
        $categorys=Category::orderBy('id','DESC')->get();

        return view('Admin.Admin_control.add_product',compact('categorys'));
    }

    public function add_product(Request $request)
    {
        //dd($request->all());

         $data = new product();

        $data->category_name=$request->category_name;
        $data->product_name=$request->product_name;
        $data->product_title=$request->product_title;
        $data->product_description=$request->product_description;
        $data->product_quantity=$request->product_quantity;
        $data->product_price=$request->product_price;
        $data->discount_price=$request->discount_price;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);

        $data->image=$imagename;

        $data->save();

        return redirect()->back()->with('message','product added Successfully');
    }

    public function index_product()
    {
        $product=product::all();
        return view('Admin.Admin_control.index_product',compact('product'));
    }
    public function show_product($id)
    {
       
        $product=product::find($id);
         return view('Admin.Admin_control.show_product',compact('product'));
    }
    public function delete_product($id)
    {
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','product Delete Successfully');
    }
    
    public function edit_product($id)
    {
        $product=product::find($id);
        $categorys=Category::all();
        return view('Admin.Admin_control.edit_product',compact('product','categorys'));
    }
    public function update_product(Request $request,$id)
    {
        $product=product::find($id);

        $product->category_name=$request->category_name;
        $product->product_name=$request->product_name;
        $product->product_title=$request->product_title;
        $product->product_description=$request->product_description;
        $product->product_quantity=$request->product_quantity;
        $product->product_price=$request->product_price;
        $product->discount_price=$request->discount_price;

        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
    
            $product->image=$imagename;
        }
        $product->save();

        return redirect()->back()->with('message','product update Successfully');
        
    }
}
