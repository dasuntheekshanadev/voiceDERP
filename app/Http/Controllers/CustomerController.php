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
            'firstname'=>'required',
            'lastname'=>'required',
            'nic'=>'required',
            'address'=>'required',            
            'phone'=>'required',
            'email'=>'required|email',
            'invoiceditems'=>'required',
            'pdf_file1' => 'required|mimes:pdf|max:2048',
            'pdf_file2' => 'required|mimes:pdf|max:2048',
            'pdf_file3' => 'required|mimes:pdf|max:2048',
            //'g-recaptcha-response' => 'required'
        ],
        [
            //'g-recaptcha-response.required' => 'required',
        ] 
    );

        try {
            
            $data = new Customer();

            $data->firstname = $request->firstname;
            $data->lastname = $request->lastname;
            $data->nic = $request->nic;
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->invoiceditems = $request->invoiceditems;
            $data->status = 1;

            $pdf_file1 = $request->pdf_file1;

            $originalFileName = pathinfo($pdf_file1->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName.'_'.date('H-i-s').'.'.$pdf_file1->extension();
            $pdf_file1->move(public_path('files/uploads/nic/'), $fileName);
            $fileUrl = 'files/uploads/nic/' . $fileName;

            $data->src1 = $fileUrl;

            $pdf_file2 = $request->pdf_file2;

            $originalFileName = pathinfo($pdf_file2->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName.'_'.date('H-i-s').'.'.$pdf_file2->extension();
            $pdf_file2->move(public_path('files/uploads/br/'), $fileName);
            $fileUrl = 'files/uploads/br/' . $fileName;

            $data->src2 = $fileUrl;

            $pdf_file3 = $request->pdf_file3;

            $originalFileName = pathinfo($pdf_file3->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName.'_'.date('H-i-s').'.'.$pdf_file3->extension();
            $pdf_file3->move(public_path('files/uploads/other/'), $fileName);
            $fileUrl = 'files/uploads/other/' . $fileName;

            $data->src3 = $fileUrl;

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
