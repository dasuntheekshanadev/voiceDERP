<?php
  
namespace App\Http\Controllers;
  
use PDF;
use Mail;
  
class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function index($savedData)
    {
        $data["email"] = $savedData->email;
        $data["title"] = $savedData->firstname;
        $data["body"] = $savedData->firstname . $savedData->lastname;
  
        $pdf = PDF::loadView('emails.myTestMail', $data);
  
        Mail::send('emails.myTestMail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "test.pdf");
        });
  
        // dd('Mail sent successfully');
    }
}