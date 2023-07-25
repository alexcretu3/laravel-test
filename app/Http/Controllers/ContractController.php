<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contracts = Contract::orderBy('nume','ASC')->paginate(5);
        $value=($request->input('page',1)-1)*5;
        return view('contracts.list',compact('contracts'))->with('i',$value);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contracts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['descriere' => 'required','data_intoc' => 'required','cnp_cui' => 'required','nume' => 'required','durata_luni' => 'required','suma' => 'required']);
        Contract::create($request->all());
        return redirect()->route('contracts.index')->with('success', 'Contractul a fost adaugat cu success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contract = Contract::find($id);
        return view('contracts.show', compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = Contract::find($id);
        return view('contracts.edit', compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descriere' => 'required',
            'data_intoc' => 'required',
            'cnp_cui' => 'required',
            'nume' => 'required',
            'durata_luni' => 'required',
            'suma' => 'required'
            ]);
            Contract::find($id)->update($request->all());
            return redirect()->route('contracts.index')->with('success','Contractul a fost actualizat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contract::find($id)->delete();
        return redirect()->route('contracts.index')->with('success','Contractul a fost sters');
    }
}
