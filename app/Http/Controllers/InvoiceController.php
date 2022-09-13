<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Service;
use GuzzleHttp\Psr7\Response as Psr7Response;
use Illuminate\Auth\Access\Response as AccessResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialtysData['data'] = Service::orderby("name")
            ->select('id', 'name', 'price')
            ->get();


        return view('invoice.create')->with("specialtysData", $specialtysData);
    }
    public function index2()
    {
        $apps = Invoice::get();
        return view('invoice.index', compact('apps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Invoice::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'discount' => $request->discount,
            'total' => $request->total,
            'serid' => $request->sel_ser,
            



        ]);
        return redirect()->route('invoice.print');
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
        //
    }
    public function print(Request $reques)
    {

        $aps = Invoice::get()->last();
       
        return view('invoice.print',compact('aps'));
    }
   
    public function getPrice($id)
    {
     //   $getPrice = $_GET['id'];
     //   var_dump($getPrice);
 
       $price['data'] = DB::table('services')->where('id', $id)->get();
       return response()->json($price);
    }
    
}
