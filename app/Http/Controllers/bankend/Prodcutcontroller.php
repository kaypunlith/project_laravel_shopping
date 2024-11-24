<?php
namespace App\Http\Controllers\bankend;
use App\Http\Controllers\bankend\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Prodcutcontroller extends Controller
{
    public function Addproduct(){
        $category=DB::table('category')
        ->orderBy('id','DESC')
        ->get();
 
        return view('bankend.add-product',['category'=>$category]);
    }
    public function Addproductsubmit(Request $request)
    {
        // Convert arrays to strings
        $size = implode(',', $request->input('size'));
        $color = implode(',', $request->input('color'));
        $file=$request->file('thumbnail');
        $profile=$file->getClientOriginalName();
        $path='backend/uplaod';
        $file->move($path,$profile);
        $product=DB::table('product')->insert([
            'name'=>$request->input('name'),
            'thumbnail'=>$profile,
            'qty'=>$request->input('qty'),
            'reguler_price'=>$request->input('regular_price'),
            'sale_peice'=>$request->input('sale_price'),
            'category_id'=>$request->input('category'),
            'color'=>$color,
            'size'=>$size,
            'auther'=>'0',
            'viewer'=>'0',
            'description'=>$request->input('description'),
        ]);
        if($product){
            return redirect('add-product');
        }      
   }
    public function listProduct(){
        $listproduct=DB::table('product')
                    //  ->orderBy('id','DESC')
                     ->join('category','product.category_id','=','category.id')
                     ->select('product.*','category.name AS cat_name')
                     ->get();
                    //  return $listproduct;
          return view('bankend.list-product',['listproduct'=>$listproduct]);
       
    }
    public function Editproduct($id){
       $editproduct=DB::table('product')
                        ->where("id",$id)
                        ->get();
        return view('bankend.edit-product',['editproduct'=>$editproduct]);        
    }
}
