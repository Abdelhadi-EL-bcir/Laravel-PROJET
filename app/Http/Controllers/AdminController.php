<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Appointment;

class AdminController extends Controller
{    
    
    public function getUsers(){
        $data = user::where('usertype' , '0')->get();
        return view('admin.users_view' , compact('data' , $data));
    }

    public function deleteUser($id){
        $data  = user::find($id);
        $data->delete();
        return redirect()->back()->with('message' , 'User('.$id.') deleted successfully!');
    }
    
    public function getMyPatients($id){
        $data = appointment::where('doctor' , $id)->get();
        return view('doctorHome.patients'  , compact('data')); 
    }
    
    public function dcontact(){
        return view('doctorHome.contact');
    }
}
