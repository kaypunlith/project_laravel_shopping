<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class searchController extends Controller
{
    public function Search(Request $request){
     
        $searchvalue=$request->input('search');
        $prodcutSearch=DB::table('product')
                    ->where('name','LIKE','%'.$searchvalue.'%')
                    ->get();
         return view('frontend.search',['prodcutSearch'=>$prodcutSearch]);
      
    }
}
