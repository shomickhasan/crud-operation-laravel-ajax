<?php

namespace App\Http\Controllers\Backend\Items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Backend\Items\Itemmodel;
use App\Models\Backend\Items\Galarymodel;
use Image;
use File;


class Itemcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.items.additem');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //manage item 
        $items = Itemmodel::all();
        return view('backend.pages.items.manageitem',compact('items'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        
       
        
        
         
             if($request->itemimage){
                $image= $request->file('itemimage');
                $customeName=rand().'.'.$image->getClientOriginalExtension();
                $location = public_path('backeend/itemsImage/'.$customeName);
                Image::make($image)->save($location);
                $items= new Itemmodel();
                $items->itemname= $request->itemname;
                $items->iteam_drescreption= $request->iteam_drescreption;
                $items->price= $request->price;
                $items->item_code= $request->item_code;
                $items->item_image=  $customeName; 
                 $items->save();   
             }
            
            if($request->galary_pic){
                $galaryimages= $request->file('galary_pic');
                 foreach($galaryimages as $galary){
                    $galaryCustomName=rand().'.'.$galary->getClientOriginalExtension();
                     $galaryLocation= public_path('backeend/itemsImage/Galary/'. $galaryCustomName);
                     Image::make($galary)->save( $galaryLocation);
                     $galaryimageobj = new GalaryModel ;
                     $galaryimageobj->galary_pic= $galaryCustomName ;
                     $galaryimageobj->item_code = $request->item_code ;
                     $galaryimageobj->save();
                    
                }

             }
             return back();


                
                
            

         
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
