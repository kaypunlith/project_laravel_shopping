<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShopController extends Controller
{
    public function Shop($page,Request $request){
        //    $catid=0;
        //    if($request){
        //       $catid=$request->category;
        //    }
        //    return $catid;

        $countproduct=DB::table('product')->count();
        $limitpage=6;
        $Totalpage=ceil($countproduct/$limitpage);
        $offset=($page-1)*$limitpage;
        $queryproduct=DB::table('product');
        if($request->category){
            $queryproduct->where('category_id',$request->category)
                ->offset(0)
                ->limit(-1);

        }
        elseif($request->price){
            if($request->price=="max"){
                $queryproduct->orderBy('reguler_price','DESC');
            }else{
                $queryproduct->orderBy('reguler_price','ASC');
            }
            $queryproduct->orderBy('reguler_price','DESC')
                ->offset(0)
                ->limit(-1);

        }
        elseif($request->promotion){
            $queryproduct->where('sale_peice','<>',0);
        }
        
            $shopproduct=$queryproduct->orderBy('id','DESC')
                ->offset($offset)
                ->limit($limitpage)
                ->get();
            $listCategory=DB::table('category')
                ->orderBy('id','DESC')
                ->get();    
          return view('frontend.shop',[
            'page'=>$page,
            'shopproduct'=>$shopproduct,
             'Totalpage'=>$Totalpage,
            'listCategory'=>$listCategory
        ]);
    }
}
