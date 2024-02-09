<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDF;
use Mail;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['firstname','lastname','nic','address','phone','email','package_name','status','src','logo'];

    public function packages()
    {
        return $this->hasOne(Package::class,'id','package_name');
    }

    public static function generatePDF1($savedData)
    {
        $data["email1"] = $savedData->email;
        $data["title"] = "Customer Invoice";
        $data["name"] = $savedData->firstname . ' ' . $savedData->lastname;
        $data["address"] = $savedData->address;
        $data["phone"] = $savedData->phone;
        $data["email"] = $savedData->email;
        $data["nic"] = $savedData->nic;
        $data["package_name"] = $savedData->packages->package_name;
        $data["unit_price"] = $savedData->packages->unit_price;
        $data["qty"] = $savedData->packages->qty;
        $data["advance"] = $savedData->packages->advance;
        $data["total"] = $savedData->packages->total;
        $data["logo"] = $savedData->logo;

        $pdf = PDF::loadView('email-template', $data);
  
        Mail::send('email-template', $data, function($message)use($data, $pdf) {
            $message->to($data["email1"], $data["email1"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "invoice.pdf");
        });
  
        // dd('Mail sent successfully');
    }

    public static function generatePDF2($savedData)
    {
        $data["email2"] = "voiced.testmail2024@gmail.com";
        $data["title"] = "Customer Invoice";
        $data["name"] = $savedData->firstname . ' ' . $savedData->lastname;
        $data["address"] = $savedData->address;
        $data["phone"] = $savedData->phone;
        $data["email"] = $savedData->email;
        $data["nic"] = $savedData->nic;
        $data["package_name"] = $savedData->packages->package_name;
        $data["unit_price"] = $savedData->packages->unit_price;
        $data["qty"] = $savedData->packages->qty;
        $data["advance"] = $savedData->packages->advance;
        $data["total"] = $savedData->packages->total;
        $data["logo"] = $savedData->logo;

        $pdf = PDF::loadView('admin-email-template', $data);
  
        Mail::send('admin-email-template', $data, function($message)use($data, $pdf) {
            $message->to($data["email2"], $data["email2"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "invoice.pdf");
        });
  
        // dd('Mail sent successfully');
    }
}
