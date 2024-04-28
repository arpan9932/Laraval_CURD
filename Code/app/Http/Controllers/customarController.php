<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customar;

class customarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customar=DB::table('customars')->get();
        return view('customarList',['data'=>$customar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customaradd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|max:255',
            'DateofBirth' => 'required|date',
            'Email' => 'required|email',
            'PhoneNumber' => 'required|numeric',
            'City'=>'required',
        ]);

        $customar = new customar;
        $customar->Name = $request->Name;
        $customar->DOB = $request->DateofBirth;
        $customar->Phone = $request->PhoneNumber;
        $customar->Email = $request->Email;
        $customar->City = $request->City;
        $customar->save();
        if($customar){
            $request->session()->flash('status', 'Saved successfully!');
            return redirect('/customar');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customar = customar::find($id);

        return view('customaredit',['data'=>$customar]);
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
        $request->validate([
            'Name' => 'required|max:255',
            'DateofBirth' => 'required|date',
            'Email' => 'required|email',
            'PhoneNumber' => 'required|numeric',
            'City'=>'required',
        ]);

        $customar = customar::find($id);
        $customar->Name = $request->Name;
        $customar->DOB = $request->DateofBirth;
        $customar->Phone = $request->PhoneNumber;
        $customar->Email = $request->Email;
        $customar->City = $request->City;
        $customar->save();
        if($customar){
            $request->session()->flash('status', 'Update successfully!');
            return redirect('/customar');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $customar = customar::find($id);

        $customar->delete();
        if($customar){
            $request->session()->flash('status', 'Deleted successfully!');
            return redirect('/customar');
        }
    }
}
