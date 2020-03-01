<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SessionController extends Controller
{
    public function storeFinancial(Request $request)
	{
	    session([ 'totalPrice' => $request->totalPrice]);
	    session([ 'credit' => $request->credit]);
	    session([ 'percent' => $request->percent."%"]);
	    session([ 'tenor' => $request->tenor]);
	}
}
