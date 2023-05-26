<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Messages;
class MessageController extends Controller
{
    //Messages Controller===================================================
    public function getMessges(){
        $data = messages::all();
        return view('admin.messages_view' , compact('data' , $data));
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
    //================================================================
}
