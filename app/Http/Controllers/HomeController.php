<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\News;
use App\Models\Messages;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //home functions========================================================
    public function redirect(){
        if(Auth::id()){
           if(Auth::user()->usertype =='0'){
               $data = news::all();
               $doctors = doctor::all();  
               return view('user.home' , compact('doctors') , compact('data') ) ; 
           }elseif(Auth::user()->usertype =='2'){
               $data = news::all();
               return view('doctorHome.home' , compact('data'));
           }else{
            $doctors = doctor::all();
            $appointments = appointment::all();
            $messages = messages::all();
            $users = user::all();
            $userData = appointment::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
            $messagesNumber = $messages->count();
            $doctorsNumber = $doctors->count();
            $userNumber = $users->count();
            $appointmentNumber = $appointments->count();
            return view('admin.home' , compact('messagesNumber' , 'userNumber',  'doctorsNumber' ,'appointmentNumber' , 'userData' ));
           }
        }
        else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }else{
            $doctors = doctor::all();
            $data = news::all();
            return view('user.home' , compact('doctors' , 'data'));
        }
    }

    public function about(){
       return view('user.about') ; 
    }

    public function contact(){
       return view('user.contact') ; 
    }

    public function doctors(){
       return view('user.doctors');
    }

    //=======================================================================

    //UserAppoitments Controller===============================
    public function appointment(Request $request){
        $data = new appointment ; 
        $data->name = $request->name ; 
        $data->email = $request->email ; 
        $data->phone = $request->phone ; 
        $data->date = $request->date ; 
        $data->message = $request->message ; 
        $data->doctor = $request->doctor ; 
        $data->status = 'In pregress' ; 
        
        $cmp = appointment::where('date' , $data->date)->count();
        $time = intval(substr($request->date, 11, 2));
        if($time > 16 || $time <8 ){
            return redirect()->back()->with('message' , 'Appointment failed time between 8AM and 4PM');
        }
        
        if(strcmp(substr($request->date, 0, 10), now()) < 0 ){
            return redirect()->back()->with('message' , 'Appointment failed time is passed');
        }

        if($cmp >30){
            return redirect()->back()->with('message' , 'Appointment failed day is full');
        }

        if(Auth::id()){
          $data->user_id = Auth::user()->id;
        }
        $previousData = appointment::all(); 
        $data->save();
        return redirect()->back()->with('message' , 'Appointment request seccecsflly , we will conact you');
    }

    public function myAppointment(){
        if(Auth::id()){
            $userId = Auth::user()->id ;
            $appointments = appointment::where('user_id' , $userId)->get() ; 
            return view('user.my_appointment' , compact('appointments' , $appointments));
        }else{
            return redirect()->back();
        }
    }
    


    public function cancelAppointment($id){
        $data = appointment::find($id);
        $data->delete();
         return redirect()->back()->with('message'  , 'Appointment deleted successfully');
    }

    //====================================================================

    public function sendMessage(Request $request){
        $data = new messages ; 
        $data->name = $request->name ; 
        $data->email = $request->email ; 
        $data->subject = $request->subject ; 
        $data->message	 = $request->msg ;  
        $data->save();
        return redirect()->back()->with('message' , 'Message, Sent!');
    }
}
