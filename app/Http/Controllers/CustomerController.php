<?php

namespace App\Http\Controllers;

use App\Mail\CustomerAdminMail;
use App\Mail\CustomerUserMail;
use App\Models\Customer;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function send(Request $request){

        $request->validate([
            'empno'=>'required',
            'customername'=>'required',
            'business'=>'required',
            'address'=>'required',            
            'phone'=>'required',
            'email'=>'required|email',
            'invoiceditems'=>'required',
            'pdf_file' => 'required|mimes:pdf|max:2048',
            //'g-recaptcha-response' => 'required'
        ],
        [
            //'g-recaptcha-response.required' => 'required',
        ] 
    );

        try {
            
            $data = new Customer();

            $data->empno = $request->empno;
            $data->customername = $request->customername;
            $data->business = $request->business;
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->invoiceditems = $request->invoiceditems;
            $data->status = 1;

            $pdf_file = $request->pdf_file;

            $originalFileName = pathinfo($pdf_file->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName.'_'.date('H-i-s').'.'.$pdf_file->extension();
            $pdf_file->move(public_path('files/uploads/'), $fileName);
            $fileUrl = 'files/uploads/' . $fileName;

            $data->src = $fileUrl;

            $savedData = Customer::create($data->toArray());

            $logo = GeneralSetting::where('name','logo_image')->first();

            $savedData->logo = $logo->value;

            Mail::to($savedData->email)->send(new CustomerUserMail($savedData));

            Mail::to('shenalliyanage.personal@gmail.com')->send(new CustomerAdminMail($savedData));

            return back()->with('success', 'Noted!  We have received your message. One of our agent will contact you as soon as possible.');

        } catch(\Exception $exception){
            return back()->with('error', 'Error occured - '.$exception->getMessage());
        }
        
    }
}
