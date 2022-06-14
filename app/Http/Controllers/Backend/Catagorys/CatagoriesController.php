<?php

namespace App\Http\Controllers\Backend\Catagorys;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Backend\Category\CategoryModel;


class CatagoriesController extends Controller
{
   
   public function manageCatagories(){
    return view('backend.pages.catagories.manageCatagories');
   }
   
    //route for viewing catagories page
    public function ShowallCatagories(){
       $adddata= new CategoryModel;
        $allData= $adddata::all();
        return response()->json([
            'addData'=>$allData,
        
        ]);
       
        
        
    }
    //for add Catagory
    public function addCategory(Request $request){
        $validator = Validator::make($request->all() ,[
            'catagoryName'=> 'required',
            'categoryDrescreption'=> 'required',
            'catagoryTag'=> 'required',
            'categoryStatus'=> 'required',

    ]);
        if($validator->fails()){
            return response()->json([
                'erroestatus'=>'400',
                'errors'=> $validator->messages(),

            ]);

        }
        else{
            $categorys = new CategoryModel;
            $categorys->catagoryName = $request->catagoryName;
            $categorys->categoryDrescreption = $request->categoryDrescreption;
            $categorys->catagoryTag = $request->catagoryTag;
            $categorys->categoryStatus = $request->categoryStatus;
            $categorys->save();
            return response()->json([
                'message'=>'Your Category hasbeen added',
            ]);
        }
       
       

    }

    //edit for update catagory 

    public function editforShow($id){
         $alldata= CategoryModel::find($id);
         if( $alldata){
             return response()->json([
                'alldata'=> $alldata,
             ]);
         }
         else{
               return response()->json([
                   'status'=>'400'
               ]);
         }
    }
    //category Update

    public function updateCatagory(Request $request , $id){
        $validator = Validator::make($request->all(),[
            'updatecatagoryName'=> 'required',
            'updatecategoryDrescreption'=> 'required',
            'updatecatagoryTag'=> 'required',
            'updatecategoryStatus'=> 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>'400',
                'errormessage'=> $validator->messages(),
            ]);
         }
         else{
            $CategoryUpdate= CategoryModel::find($id);
            $CategoryUpdate->catagoryName = $request->updatecatagoryName;
            $CategoryUpdate->categoryDrescreption = $request->updatecategoryDrescreption;
            $CategoryUpdate->catagoryTag = $request->updatecatagoryTag;
            $CategoryUpdate->categoryStatus = $request->updatecategoryStatus;
            $CategoryUpdate->update();
            return response()->json([
                'updatesuccess'=> 'your Category Update Sucessfully',
            ]);
       }

    }

    public function DeleteCatagory($id){
       $CategoryDelete= CategoryModel::find($id);
       $CategoryDelete->delete();
       return response()->json([
           'message'=> 'your Category Deleted Successfully',
       ]);
    }
}

