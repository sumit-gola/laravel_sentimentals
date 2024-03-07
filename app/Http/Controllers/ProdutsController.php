<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Gallery;
use App\Models\Produts;
use Illuminate\Http\Request;

class ProdutsController extends Controller
{
    public function index(){
        $products = \App\Models\Produts::all();
        return view('admin.pages.ecom.products.add-product', compact('products'));
    }
    public function showallProducts(){
        $products = \App\Models\Produts::all();
        return view('admin.pages.ecom.products.all-products', compact('products'));
    }
    public function categoryProducts($id){
       
        $products = \App\Models\Produts::where('category_id', '=', $id)->get();
        // dd($products);
        return view('frontend.pages.ecommerce.products', compact('products'));
    }
    
    public function productDetails($id){
        $products = Produts::find($id);
        $galleries= Gallery::find($id); 
        $string = $galleries->name;
        $arr = explode("|", $string);
       
        return view('frontend.pages.ecommerce.product-details', compact('products','arr'));
    }


    public function create(){
        $data = Categories::with('childrenRecursive')->whereNull('parent_id')->get();   
        // return view('dashboard.pages.category',['datas' => $data]);
        return view('admin.pages.ecom.products.add-product',['datas' => $data]);
    }
    public function store(Request $request){
        // dd($request->visibility);
        // $product =$request->validate([
        //     'title'=>'string|required',
        //     'description'=>'string|nullable',
        //     'slug'=>'string|required',
        //     'size'=>'nullable',
        //     'stock'=>"required|numeric",
        //     'price'=>'required|numeric',
        //     'discount'=>'nullable|numeric',
        //     'is_featured'=>'sometimes|in:1',
        // ]);
        if($request->hasfile('product-image'))
        {
            $file = $request->file('product-image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/thumbnail/', $filename);
           
        }
           $data = Produts::create([

                    "title" => $request->title,
                    "slug" => $request->slug,
                    "stock" =>$request->stock,
                    "price" => $request->price,
                    "discount" => $request->discount,
                    "size" => $request->size,
                    "description" => $request->description,
                    "status" => $request->status,
                    "visibility" => $request->visibility,
                    "category_id" => $request->category,
                    "summary" =>$request->summary,
                    'gallery' => $filename,                    
           ]);
                
                
                $images=array();
                if($files=$request->file('productImages')){
                    foreach($files as $file){
                        // $name=$file->getClientOriginalName();
                        $extenstion = $file->getClientOriginalExtension();
                        $name = md5(rand(1000, 10000)).'.'.$extenstion;
                        $file->move('uploads/products/gallery/',$name);
                        $images[]=$name;
                    }
                    Gallery::insert( [
                        'product_id'=>$data->id ,
                        'name'=>  implode("|",$images),
                        //you can put other insertion here
                    ]);
                }
        if($data){

            return redirect()->route('admin.products')->with('message', 'Product Add successfully');
        }

        
    }
}
