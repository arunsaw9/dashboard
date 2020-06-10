<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kpi;

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
        //$RW = kpi::where('name', 'Regular Workforce')->get();
        //return view('kpi.index', compact('RW'));
        $lists = Kpi::all();
        return view('kpi.list', compact('lists'));
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
        $this->validate($request,[
            'name' =>'required',
            'month' =>'required',
            'year' =>'required',
        ]);

        $save = new kpi;
        $save->name = $request->name;
        $save->month = $request->month;
        $save->year = $request->year;

        $data_value = $request->data_value;

        if(isset($request->rwf)){

            $this->validate(
                $request, 
                [   
                    'rwf.officers.actual' => 'required',
                    'rwf.staff.actual' => 'required',
                    'rwf.contractors.actual' => 'required',
                ],
                [   
                    "rwf.officers.actual.required" => 'officers field is required',
                    "rwf.staff.actual.required" => 'staff field is required',
                    "rwf.contractors.actual.required" => 'contractors field is required',
                ]
            );

            $save->officers = (object)(str_replace('"', '', $request->rwf['officers']));
            $save->staff = (object)(str_replace('"', '', $request->rwf['staff']));
            $save->contractors = (object)(str_replace('"', '', $request->rwf['contractors']));
        }
            
         if(isset($request->HTA)){
            $this->validate(
                $request, 
                [   
                    'HTA.Execcutive' => 'required',
                    'HTA.staff' => 'required',
                ],
                [   
                    "HTA.Execcutive.required" => 'Execcutive field of Hiring Target Achievement is required',
                    "HTA.staff.required" => 'Staff field of Hiring Target Achievement is required',
                ]
            );

            $save->data_value = $request->HTA;
         }
            
         if(isset($request->achievement)){
            $this->validate(
                $request, 
                [   
                    'achievement.actual' => 'required',
                    'achievement.target' => 'required',
                ],
                [   
                    "achievement.actual.required" => 'Actual field of CSR Target Achievement is required',
                    "achievement.target.required" => 'Target field of CSR Target Achievement is required',
                ]
            );
            $save->data_value = $request->achievement;
         }
           
        if(isset($request->TraningDays)){
            $this->validate(
                $request, 
                [   
                    'TraningDays.actual' => 'required',
                    'TraningDays.target' => 'required',
                    'Participants.actual' => 'required',
                    'Participants.target' => 'required',
                ],
                [   
                    "TraningDays.actual.required" => 'Actual field of Traning Days is required',
                    "TraningDays.target.required" => 'Target field of Traning Days is required',
                    "Participants.actual.required" => 'Actual field of Participants is required',
                    "Participants.target.required" => 'Target field of Participants is required',
                ]
            );
            $save->TraningDays = $request->TraningDays;
            $save->Participants = $request->Participants;
        }

        $save->save();
        return redirect()->route('kpis.index');
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
        $editkpis = Kpi::find($id);
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

        $this->validate($request,[
            'name' =>'required',
            'month' =>'required',
            'year' =>'required',
        ]);

        $update = Kpi::find($id);
        $update->name = $request->name;
        $update->month = $request->month;
        $update->year = $request->year;

        $data_value = $request->data_value;

        if(isset($request->rwf)){
            $this->validate(
                $request, 
                [   
                    'rwf.officers.actual' => 'required',
                    'rwf.staff.actual' => 'required',
                    'rwf.contractors.actual' => 'required',
                ],
                [   
                    "rwf.officers.actual.required" => 'officers field is required',
                    "rwf.staff.actual.required" => 'staff field is required',
                    "rwf.contractors.actual.required" => 'contractors field is required',
                ]
            );
            $update->officers = (object)(str_replace('"', '', $request->rwf['officers']));
            $update->staff = (object)(str_replace('"', '', $request->rwf['staff']));
            $update->contractors = (object)(str_replace('"', '', $request->rwf['contractors']));
        }
            
         if(isset($request->HTA)){

            $this->validate(
                $request, 
                [   
                    'Execcutive' => 'required', 
                    'staff' => 'required',
                ],
                [   
                    "Execcutive.required" => 'Execcutive field of Hiring Target Achievement is required',
                    "staff.required" => 'Staff field of Hiring Target Achievement is required',
                ]
            );
            $update->Execcutive = $request->Execcutive;
            $update->staff = $request->staff;
         }
            
         if(isset($request->achievement)){
            $this->validate(
                $request, 
                [   
                    'achievement.actual' => 'required',
                    'achievement.target' => 'required',
                ],
                [   
                    "achievement.actual.required" => 'Actual field of CSR Target Achievement is required',
                    "achievement.target.required" => 'Target field of CSR Target Achievement is required',
                ]
            );
            $update->achievement = (object)$request->achievement;
         }
           
        if(isset($request->Traning)){

            $this->validate(
                $request, 
                [   
                    'TraningDays.actual' => 'required',
                    'TraningDays.target' => 'required',
                    'Participants.actual' => 'required',
                    'Participants.target' => 'required',
                ],
                [   
                    "TraningDays.actual.required" => 'Actual field of Traning Days is required',
                    "TraningDays.target.required" => 'Target field of Traning Days is required',
                    "Participants.actual.required" => 'Actual field of Participants is required',
                    "Participants.target.required" => 'Target field of Participants is required',
                ]
            );
            
            $update->TraningDays = (object)$request->TraningDays;
            $update->Participants = (object)$request->Participants;
        }
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
        Kpi::where('_id',$id)->delete();
        return redirect()->back()->with('message','User is deleted successfully');
    }
}