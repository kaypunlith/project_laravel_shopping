<?php

namespace App\Http\Controllers\bankend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Category(){
        return view('bankend.add-category');
    }
    public function categorySubmit(Request $request){
         $name=$request->name;
        $addCategory=DB::table('category')->insert([
            'name'=>$name,
        ]);
        if($addCategory){
             return redirect('list-category');
        }else{
            return redirect('add-category')->with('message');
        }
      }
     public function listCategory(){
        $category=DB::table('category')
                       ->orderBy('id','DESC')
                       ->get();
        return view('bankend.list-category',['category'=>$category]);
     } 
     public function Editcategory($id){
           $edit=DB::table('category')
                      ->where('id',$id)
                      ->get();
            return view('bankend.edit-category',['edit'=>$edit]);    
     }
     public function EditCategsubmit(Request $request){
             $id =$request->input('id');
             $editsubmit=DB::table('category')
                         ->where('id',$id)
                         ->update([
                            'name'=>$request->input('name')
                         ]);
            if($editsubmit){
                return redirect('list-category');
            }
     }

     public function DeleteCategory($id){

        $delete=DB::table('category')
                    ->where('id',$id)
                    ->get();
               return view('bankend.delete-category',['delete'=>$delete]);   
     }
     public function Deletesubmit(request $request){
           $id=$request->input('id');
           $deleteCategory=DB::table('category')
                           ->where('id',$id)
                           ->delete();
                if($deleteCategory){
                return redirect('list-category');
            }
     }
}
