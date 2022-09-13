<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\Service;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = appointment::get();
        return view('appointments.index', compact('apps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create()
    {


        $users = User::where('role', 0)->get();
        $doctors = Doctor::get();

        $specialtysData['data'] = Service::orderby("name")
            ->select('id', 'name')
            ->get();


        return view('appointments.create', compact('users', 'doctors'))->with("specialtysData", $specialtysData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        appointment::create([
            'pname' => $request->pname,
            'phone' => $request->phone,
            'DocID' => $request->DocID,
            'date' => $request->Date,
            'userid' => $request->userid,




        ]);
        return redirect()->route('apointments.index');
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
    
    public function print(Request $request,$id)
    {

        $apps = appointment::find($id);
       
        return view('appointments.print',compact('apps'));
    }
    public function logout()
    {
        session()->invalidate();
        return redirect('/login');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        appointment::find($id)->delete();
        return redirect()->route('apointments.index');
    }

    public function getDoctors($serviceid = 0)
    {
        $docData['data'] = Doctor::orderby('name')->select('id', 'name')->where('serid', $serviceid)->get();
        return response()->json($docData);
    }
}
