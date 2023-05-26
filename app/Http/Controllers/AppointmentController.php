<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;


class AppointmentController extends Controller
{
    //Appointments Controller===============================================
    public function getAppointments(){
        $appointments = appointment::all();
        return view('admin.get_appointments'  , compact('appointments' , $appointments) ); 
    }

    public function accepetAppointment($id){
        $data = appointment::find($id) ; 
        $data->status = "accepted";
        $data->save();
        $to =$data->email;
        $subject = "About YOUR APPOINTMENT In IRISI.HOSPITALE";
        $message = "Hello \n your appointment has been accepted" ;
        $headers = "From: IRISI.HOSPITALE@gmail.com\r\n";
        if(mail($to, $subject, $message, $headers)){
            return redirect()->back()->with('message' , 'Message sent successfully!');
        }else{
            return redirect()->back()->with('message' , 'failed to send message !');
        }
        
    }

    public function cancelAppointment($id){
        $data = appointment::find($id) ; 
        $data->status = "canceled";
        $data->save();
        $to =$data->email;
        $subject = "About YOUR APPOINTMENT In IRISI.HOSPITALE";
        $message = "Hello \n your appointment has been canceled check your informations!" ;
        $headers = "From: IRISI.HOSPITALE@gmail.com\r\n";
        if(mail($to, $subject, $message, $headers)){
            return redirect()->back()->with('message' , 'Message sent successfully!');
        }else{
            return redirect()->back()->with('message' , 'failed to send message !');
        }
        return redirect()->back();
    }

    public function deleteAppointment($id){
        $data = appointment::find($id) ; 
        $data->delete();
        return redirect()->back()->with('message'  , 'Appointment deleted successfully');
    }

    public function getAppointmentsAccepted(){
        $appointments = appointment::where('status','accepted')->get();
        return view('admin.get_appointments_accepted'  , compact('appointments' , $appointments) ); 
    }

    public function getAppointmentsCanceled(){
        $appointments = appointment::where('status','canceled')->get();
        return view('admin.get_appointments_canceled'  , compact('appointments' , $appointments) ); 
    }

    public function checkAppointment(Request $request){
    $valeur = $request->input('key');
    $data = appointment::find($valeur);
    $data->status = "Checked" ; 
    $data->save();
    return response()->json(['message' => 'Requête AJAX traitée avec succès'.$valeur]);
    }

    //======================================================================
}
