<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Mail;
use App\Mail\InvoiceMail;



use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function Payment(Request $request){

        $data = array();
        $data['name'] = $request->name;
        $data['telephone'] = $request->telephone;
        $data['email'] = $request->email;
        $data['zip'] = $request->zip;
        $data['address1'] = $request->address1;
        $data['address2'] = $request->address2;
        $data['address3'] = $request->address3;
        $data['payment'] = $request->payment;
        $data['name2'] = $request->name2;
        $data['telephone2'] = $request->telephone2;
        $data['zip2'] = $request->zip2;
        $data['address4'] = $request->address4;
        $data['address5'] = $request->address5;
        $data['address6'] = $request->address6;
        $data['price'] = $request->price;
        $data['advertisingcode'] = $request->advertisingcode;
         // dd($data);
     
         if ($request->payment == 'stripe') {
             
         return view('pages.payment.stripe',compact('data'));
     
         }elseif ($request->payment == 'paypal') {
             
         }elseif ($request->payment == 'oncash') {
     
          return view('member.oncash',compact('data'));

        }elseif ($request->payment == 'ondelivery') {
     
            return view('member.oncash',compact('data'));
            //return view('member.ondelivery',compact('data'));
     
         }else{
             echo "Cash On Delivery";
         }  
         
     
        }



        public function OnCash(Request $request){
         
      
   
            
        
            $email = $request->email;
            /// Insert Shipping Table 
        
            $member = array();
            $member['name'] = $request->name;
            $member['telephone'] = $request->telephone;
            $member['email'] = $request->email;
            $member['zip'] = $request->zip;
            $member['address1'] = $request->address1;
            $member['address2'] = $request->address2;
            $member['address3'] = $request->address3;
            $member['payment'] = $request->payment;
            $member['name2'] = $request->name2;
            $member['telephone2'] = $request->telephone2;
            $member['zip2'] = $request->zip2;
            $member['address4'] = $request->address4;
            $member['address5'] = $request->address5;
            $member['address6'] = $request->address6;
            $member['price'] = $request->price;
            $member['advertisingcode'] = $request->advertisingcode;
            $member['created_at'] = now();
            $member['date'] = date('y-m-d');
            $member['month'] = date('m');
            $member['year'] = date('Y');
            
            DB::table('members')->insert($member);
            Mail::to($email)->send(new invoiceMail($member));

            
            $request->session()->regenerateToken();



            return redirect('thanks');
        }
        
        
        public function Thanks(){
            return view('thankyou');
        }
         
}
