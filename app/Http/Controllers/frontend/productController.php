<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class productController extends Controller
{
    public function product($id){
                $Mainproduct=DB::table('product')
                ->where('id',$id)
                ->get();
           return view('frontend.prodcut',
        [
            'Mainproduct'=>$Mainproduct
        ]);
        //  return $Mainproduct;
   
    }
}
