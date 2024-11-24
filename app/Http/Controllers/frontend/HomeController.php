<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Home(){
       $newproduct=DB::table('product')
                    ->orderBy('id','DESC')
                    ->get();
        $promotion=DB::table('product')
                    ->where('sale_peice','<>','0')
                    ->orderBy('id','DESC')
                    ->get();
        $pupuler=DB::table('product')
                    ->orderBy('viewer','DESC')
                    ->get();
                    
            

        return view('frontend.home',
        [
            'newproduct'=>$newproduct,
            'promotion'=>$promotion,
            'pupuler'=>$pupuler
    ]);
        // return $newproduct;
    }
}
