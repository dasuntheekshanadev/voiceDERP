<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDF;
use Mail;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['firstname','lastname','nic','address','phone','email','invoiceditems','status','src','logo'];

    public static function generatePDF1($savedData)
    {
        $data["email1"] = $savedData->email;
        $data["title"] = "Test";
        $data["name"] = $savedData->firstname . ' ' . $savedData->lastname;
        $data["address"] = $savedData->address;
        $data["phone"] = $savedData->phone;
        $data["email"] = $savedData->email;

        $pdf = PDF::loadView('email-template', $data);
  
        Mail::send('email-template', $data, function($message)use($data, $pdf) {
            $message->to($data["email1"], $data["email1"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "test.pdf");
        });
  
        // dd('Mail sent successfully');
    }

    public static function generatePDF2($savedData)
    {
        $data["email2"] = "shenalliyanage.personal@gmail.com";
        $data["title"] = "Test";
        $data["name"] = $savedData->firstname . ' ' . $savedData->lastname;
        $data["address"] = $savedData->address;
        $data["phone"] = $savedData->phone;
        $data["email"] = $savedData->email;

        $pdf = PDF::loadView('admin-email-template', $data);
  
        Mail::send('admin-email-template', $data, function($message)use($data, $pdf) {
            $message->to($data["email2"], $data["email2"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "test.pdf");
        });
  
        // dd('Mail sent successfully');
    }
}
