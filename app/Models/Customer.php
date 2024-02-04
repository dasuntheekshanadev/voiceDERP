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

    public static function generatePDF($savedData)
    {
        $data["email"] = $savedData->email;
        $data["title"] = "Test";
        $data["name"] = $savedData->firstname . ' ' . $savedData->lastname;
        $data["address"] = $savedData->address;
        $data["phone"] = $savedData->phone;
        $data["email"] = $savedData->email;

        $pdf = PDF::loadView('email-template', $data);
  
        Mail::send('email-template', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "test.pdf");
        });
  
        // dd('Mail sent successfully');
    }
}
