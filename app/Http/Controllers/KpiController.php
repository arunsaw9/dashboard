<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kpi;

class KpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //$this->middleware('auth:');
    }

    public function index()
    {
        $RW = kpi::where('name', 'Regular Workforce')->get();
        return view('kpi.index', compact('RW'));
        //return view('kpi.list', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kpi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        // echo "<pre>";
        // print_r($request->all());
        //die;
        $save = new kpi;
        $save->name = $request->name;
        $save->month = $request->month;
        $save->year = $request->year;

        $data_value = $request->data_value;

        if(isset($request->rwf)){
            $save->officers = (object)(str_replace('"', '', $request->rwf['officers']));
            $save->staff = (object)(str_replace('"', '', $request->rwf['staff']));
            $save->contractors = (object)(str_replace('"', '', $request->rwf['contractors']));
        }
            
         if(isset($request->HTA)){
            $save->data_value = $request->HTA;
         }
            
         if(isset($request->achievement)){
            $save->data_value = $request->achievement;
         }
           
        if(isset($request->TraningDays)){
            $save->TraningDays = $request->TraningDays;
            $save->Participants = $request->Participants;
        }

        $save->save();
        return $save;
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
        $editkpis = kpi::find($id);
        return view('kpi.edit',compact('editkpis'));
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
        // echo '<pre>';
        // print_r($request->all());
        //return $request->all();
        $update = kpi::find($id);
        $update->name = $request->name;
        $update->month = $request->month;
        $update->year = $request->year;

        $data_value = $request->data_value;

        if(isset($request->rwf)){
            $update->officers = (object)(str_replace('"', '', $request->rwf['officers']));
            $update->staff = (object)(str_replace('"', '', $request->rwf['staff']));
            $update->contractors = (object)(str_replace('"', '', $request->rwf['contractors']));
        }
            
         if(isset($request->HTA)){
            //return 'ok';
            $update->Execcutive = $request->Execcutive;
            $update->staff = $request->staff;
         }
            
         if(isset($request->achievement)){
            $update->data_value = (object)$request->achievement;
         }
           
        if(isset($request->Traning)){
             $update->TraningDays = (object)$request->TraningDays;
             $update->Participants = (object)$request->Participants;
        }

        //return $update;
        $update->save();
        return redirect()->route('kpis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kpi::where('_id',$id)->delete();
        return redirect()->back()->with('message','User is deleted successfully');
    }
}