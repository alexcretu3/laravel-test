<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class GContractController extends Controller
{
    public function index(Request $request)
    {
        $contracts = Contract::orderBy('nume','ASC')->paginate(5);
        $value=($request->input('page',1)-1)*5;
        return view('contracts.glist',compact('contracts'))->with('i',$value);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

   
}
