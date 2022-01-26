<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
use App\Services\CheckFormData;
use Auth;

class OrderController extends Controller
{

  public function index(){

      return view('admin.home');
      
      }



    public function NewOrder(){
    
        $order = DB::table('members')->latest()->where('status',0)->get();
        return view('admin.order.pending',compact('order'));
   
       }


       public function ViewOrder($id){


    
         $member = DB::table('members')->where('id',$id)->first();
         //dd($member);
    
         
             return view('admin.order.view_order',compact('member'));		
    
        }

        public function PaymentAccept($id){
            DB::table('members')->where('id',$id)->update(['status'=>1]);
            
            return Redirect()->route('admin.neworder'); 
            } 
        
        
          public function PaymentCancel($id){
              DB::table('members')->where('id',$id)->update(['status'=>4]);
            
                   return Redirect()->route('admin.neworder'); 
          }
         
        
        
          public function AcceptPayment(){
          $order = DB::table('members')->where('status',1)->get();
          // dd($order);
          return view('admin.order.pending',compact('order')); 
          }
        
        
          public function CancelOrder(){
          $order = DB::table('members')->where('status',4)->get();
          // dd($order);
          return view('admin.order.pending',compact('order')); 
          }
        
        
            public function ProcessPayment(){
          $order = DB::table('members')->where('status',2)->get();
          // dd($order);
          return view('admin.order.pending',compact('order')); 
          }
        
        
        
          public function SuccessPayment(){
          $order = DB::table('members')->where('status',3)->get();
          // dd($order);
          return view('admin.order.pending',compact('order')); 
          }
        
        
        
        public function DeleveryProcess($id){
            DB::table('members')->where('id',$id)->update(['status'=>2]);
           
                   return Redirect()->route('admin.accept.payment'); 
            } 
        
        
        
        
            public function DeleveryDone($id){
        
          
         
            DB::table('members')->where('id',$id)->update(['status'=>3]);
            
                   return Redirect()->route('admin.success.payment'); 
            } 




            public function Search(Request $request){

              $member = DB::table('members')->latest()->get();
              $item = $request->search;
              
              $member = DB::table('members')
                        ->where('name','LIKE',"%$item%")
                        ->orWhere('telephone', 'LIKE', "%{$item}%")
                        ->orWhere('email', 'LIKE', "%{$item}%")
                        ->orWhere('zip', 'LIKE', "%{$item}%")
                        ->orWhere('address1', 'LIKE', "%{$item}%")
                        ->orWhere('address2', 'LIKE', "%{$item}%")
                        ->orWhere('address3', 'LIKE', "%{$item}%")
                        ->orWhere('payment', 'LIKE', "%{$item}%")
                        ->orWhere('status', 'LIKE', "%{$item}%")
                        ->orWhere('date', 'LIKE', "%{$item}%")
                        ->orWhere('created_at', 'LIKE', "%{$item}%")
                        ->orWhere('advertisingcode', 'LIKE', "%{$item}%")


                        
                        ->paginate(20);
                           
              return view('admin.search',compact('member'));

            }



}
