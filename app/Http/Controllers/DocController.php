<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Service; 

use Illuminate\Http\Request;

class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::get();
        return view('doctorss.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = service::get();
        return view('doctorss.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Doctor::create([
            'name' => $request->name,
            'email'=>$request->email,
            'serid'=>$request->serid
        ]);
        return redirect()->route('doctorss.index');
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
    public function edit($id,Request $req)
    {   
        Doctor::find($id)->update(

            [
                'name'  => $req->name,
                'email'  => $req->email,
                'serid'=>$req->serid



            ]

        );
        return redirect()->route('doctorss.index');
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
        $doctors = Doctor::find($id);
        $services = service::get();
    
        return view('doctorss.update',compact('doctors','services'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::find($id)->delete();
        return redirect()->route('doctorss.index');
    }
}
