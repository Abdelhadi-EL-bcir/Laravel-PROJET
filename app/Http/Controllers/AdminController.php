<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\News;
use App\Models\Messages;
class AdminController extends Controller
{
    //
    public function addDoctorView(){

        return view('admin.add_doctor');
    }

    public function uploadDoctor(Request $request){
        $doctor = new doctor;
        $image = $request->file;
        $imgName = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage' , $imgName);
        $doctor->image = $imgName ; 
        $doctor->name = $request->name ; 
        $doctor->date = $request->date ; 
        $doctor->phone = $request->phone ; 
        $doctor->specialty = $request->specialty ; 
        $doctor->room = $request->room ; 
        $doctor->save();
        return redirect()->back()->with('message' , 'doctor added successfully');
    }

    public function getAppointments(){
        $appointments = appointment::all();
        return view('admin.get_appointments'  , compact('appointments' , $appointments) ); 
    }

    public function accepetAppointment($id){
        $data = appointment::find($id) ; 
        $data->status = "accepted";
        $data->save();
        return redirect()->back();
    }

    public function cancelAppointment($id){
        $data = appointment::find($id) ; 
        $data->status = "canceled";
        $data->save();
        return redirect()->back();
    }

    public function deleteAppointment($id){
        $data = appointment::find($id) ; 
        $data->delete();
        return redirect()->back()->with('message'  , 'Appointment deleted successfully');
    }

    public function getDoctors(){
        $data = doctor::all();
        return view('admin.all_doctor_view' , compact('data' , $data));
    }

    public function deleteDoctor($id){
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back()->with('message'  , 'Doctor deleted successfully');
    }

    public function getDoctor($id){
        $doctor = doctor::find($id);
        return view('admin.edit_doctor_view')->with('doctor' , $doctor);
    }

    public function editDoctor(Request $request , $id){
        $doctor = doctor::find($id);
        $image = $request->file;
        if($image){
            $imgName = time().'.'.$image->getClientoriginalExtension();
            $request->file->move('doctorimage' , $imgName);
            $doctor->image = $imgName ;
        }   
        $doctor->name = $request->name ; 
        $doctor->date = $request->date ; 
        $doctor->phone = $request->phone ; 
        $doctor->specialty = $request->specialty ; 
        $doctor->room = $request->room ; 
        $doctor->save();
        return redirect()->back()->with('message' , 'doctor edited successfully');

    }

    public function newsPage(){
          return view('admin.add_new_view');
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
        return redirect()->back()->with('message' , 'new added successfully');
    }

    public function getMessges(){
        $data = messages::all();
        return view('admin.messages_view' , compact('data' , $data));
    }

    public function getAppointmentsAccepted(){
        $appointments = appointment::where('status','accepted')->get();
        return view('admin.get_appointments_accepted'  , compact('appointments' , $appointments) ); 
    }

    public function getAppointmentsCanceled(){
        $appointments = appointment::where('status','canceled')->get();
        return view('admin.get_appointments_canceled'  , compact('appointments' , $appointments) ); 
    }

    public function deleteMsg($id){
        $message = messages::find($id) ; 
        $message->delete();
        return redirect()->back()->with('message' , 'Message deleted successfully!');
    }

    public function respondMsg($id){
       $msg  = messages::find($id) ; 
       return view( 'admin.reponding_view' , compact('msg' , $msg)) ; 
    }

    public function sendMsg(Request $request){
        $to =$request->email;
        // Set the email subject
        $subject = "Response TO YOUR Message In IRISI.HOSPITALE";
        // Set the email message
        $message = $request->response ;
        // Set the headers
        $headers = "From: IRISI.HOSPITALE@gmail.com\r\n";
        // Send the email using mail() function
        if(mail($to, $subject, $message, $headers)){
            return redirect()->back()->with('message' , 'Message sent successfully!');
        }else{
            return redirect()->back()->with('message' , 'failed to send message !');
        }
    }
}
