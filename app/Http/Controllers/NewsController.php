<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //News Controller =====================================================
    public function newsPage(){
          $data = news::all();
          return view('admin.add_new_view' , compact('data'));
    }

    public function deleteNew($id){
        $data = news::find($id);
        $data->delete();
        return redirect()->back()->with('message'  , 'New deleted successfully!');
    }

    public function uploadNew(Request $request){
        $new = new news ; 
        $image = $request->file;
        if($image){
            $imgName = time().'.'.$image->getClientoriginalExtension();
            $request->file->move('newimage' , $imgName);
            $new->image = $imgName ;
        }   
        $new->title = $request->title ; 
        $new->description = $request->description ; 
        $new->save();
        $data = news::all();
        return redirect()->back()->with('message' , 'new added successfully')->with('data' , $data);
    }

    //======================================================================
}
