<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\Role;
use App\User;
use App\advertiser;
use File;
use Auth;
use Validator;
use App\Payment;

class dashboardvertiserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         // GET Advertisers
        $advertisers = advertiser::simplePaginate(10);
        return view('dashboard.dashboardAds.index',compact('advertisers'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        // GET Advertisers
        return view('dashboard.dashboardAds.create');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        // ADD new advertiser
        $payment = new Payment();
        $payment->payment_id = $request-> $arr['id'];
        $payment->payer_id = $request-> $arr['payer']['payer_info']['payer_id'];
        $payment->payer_email = $request-> $arr['payer']['payer_info']['email'];
        $payment->amount = $request-> $arr['transactions'][0]['amount']['total'];
        $payment->currency = $request-> env('PAYPAL_CURRENCY');
        $payment->payment_status = $request-> $arr['state']; 
    }*/
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */

   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ADD delete advertiser
        $Ads = advertiser::findOrFail($id);
        File::delete($Ads->image);
        $Ads->delete();
        return back()->with('Delete','Ads Deleted successfully');
    }

    public function store(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];

                $payment->save();

                return "Payment is Successfull. Your Transaction Id is : " . $arr['id'];

            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return 'Payment declined!!';
        }
    }
}
