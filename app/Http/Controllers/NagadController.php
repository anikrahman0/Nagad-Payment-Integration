<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codeboxr\Nagad\Facade\NagadPayment;


class NagadController extends Controller
{
    public function createPayment(Request $request){
        $validate = $request->validate([
            'amount' => 'required|numeric|max:100000',
            'payment'=> 'required|string'
        ]);
        if($request->payment == 'nagad'){
            $amount = $request->amount;
            $randominvoice = rand(100000, 999999);
            NagadPayment::create($amount,$randominvoice);
        }
    }
  
}
