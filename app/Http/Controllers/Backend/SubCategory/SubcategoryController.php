<?php

namespace App\Http\Controllers\Backend\SubCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Backend\Category\CategoryModel;
use App\Models\Backend\Subcategory\SubcategoryModel;
use Image;
use File;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //add subcategory page show with category id
        $categories = CategoryModel:: all();
        return view('backend.pages.subcategory.addsubcategory',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //subcategory manage pageshow
        $subcategories =  SubcategoryModel:: all();
        return view('backend.pages.subcategory.managesubcategory', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // add category data
        $request->validate([
            'categoryId'=>'required',
            'subcategoryName'=>'required',
            'subcategoryDrescreption'=>'required',
            'image'=>'required',
            'subcategoryStatus'=>'required',
        ]);

        $subcategory = new SubcategoryModel();
        $subcategory->categoryId = $request->categoryId;
        $subcategory->subcategoryName = $request->subcategoryName;
        $subcategory->subcategoryDrescreption = $request->subcategoryDrescreption;
        $subcategory->status = $request->subcategoryStatus;
        $subcategory->slug = Str::slug($request->subcategoryName);

        
            $image = $request->file('image');
             $imageCustomeName = rand().'.'.$image->getClientOriginalExtension();
             $location =public_path('backeend/subcategoryImage/'.$imageCustomeName);
             Image::make( $image)->save($location);
             $subcategory->image= $imageCustomeName;
             $subcategory->save();
             return redirect()->route('subcategory.manage');
             
       

     
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //subc ategory edit for show
        $subcategory = SubcategoryModel::find($id);
        $categorys = CategoryModel::all();
        return view('backend.pages.subcategory.editsubcategory' ,compact('subcategory','categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategory =  SubcategoryModel::find($id);
        $subcategory->categoryId = $request->categoryId;
        $subcategory->subcategoryName = $request->subcategoryName;
        $subcategory->subcategoryDrescreption = $request->subcategoryDrescreption;
        $subcategory->status = $request->subcategoryStatus;
        $subcategory->slug = Str::slug($request->subcategoryName);

        if(!empty($request->image)){
            File::exists('backeend/subcategoryImage/'. $subcategory->image);
            File::delete('backeend/subcategoryImage/'. $subcategory->image);
            $image = $request->file('image');
            $imageCustomeName = rand().'.'.$image->getClientOriginalExtension();
            $location =public_path('backeend/subcategoryImage/'.$imageCustomeName);
            Image::make( $image)->save($location);
            $subcategory->image= $imageCustomeName;
           
        }
        $subcategory->update();
        return redirect()->route('subcategory.manage');
      
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubcategoryModel::find($id);
        if(File::exists('backeend/subcategoryImage/'. $subcategory->image)){
            File::delete('backeend/subcategoryImage/'. $subcategory->image);
        }
        $subcategory->delete();
        return back();
    }
}
