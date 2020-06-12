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
        //return $request->all();
        $this->validate($request,[
            'month' =>'required',
            'year' =>'required',
        ]);

        $save = new kpi;
        $save->name = $request->data_value;
        $save->month = $request->month;
        $save->year = $request->year;

        $data_value = $request->data_value;

        if($request->data_value == 'Regular Workforce'){

            $this->validate(
                $request, 
                [   
                    'rwf_officers_actual' => 'required',
                    'rwf_staff_actual' => 'required',
                    'rwf_contractors_actual' => 'required',
                ],
                [   
                    "rwf_officers_actual.required" => 'officers field is required',
                    "rwf_staff_actual.required" => 'staff field is required',
                    "rwf_contractors_actual.required" => 'contractors field is required',
                ]
            );

            $save->officers =  [
                'actual' => $request->rwf_officers_actual,
                //'planned' => $request->rwf_officers_planned
            ];
            $save->staff =  [
                'actual'=>$request->rwf_staff_actual
            ];
            $save->contractors =  [
                'actual' => $request->rwf_contractors_actual
            ];
        }
            
         if($request->data_value =='Hiring Target Achievement'){
            $this->validate(
                $request, 
                [   
                    'HTA_Execcutive' => 'required',
                    'HTA_staff' => 'required',
                ],
                [   
                    "HTA_Execcutive.required" => 'Execcutive field of Hiring Target Achievement is required',
                    "HTA_staff.required" => 'Staff field of Hiring Target Achievement is required',
                ]
            );

            $save->Execcutive = [
                'Execcutive' => $request->HTA_Execcutive
            ];
            $save->staff = [
                'staff' => $request->HTA_staff
            ];
         }
            
         if($request->data_value == 'CSR Target Achievement'){
            $this->validate(
                $request, 
                [   
                    'achievement_actual' => 'required',
                    'achievement_target' => 'required',
                ],
                [   
                    "achievement_actual.required" => 'Actual field of CSR Target Achievement is required',
                    "achievement_target.required" => 'Target field of CSR Target Achievement is required',
                ]
            );
            $save->CSR_achievement_actual =  [
                'actual' => $request->achievement_actual
            ];
            $save->CSR_achievement_target =  [
                'target' => $request->achievement_target
            ];
         }
           
        if($request->data_value == 'Training'){
            $this->validate(
                $request, 
                [   
                    'TraningDays_actual' => 'required',
                    'TraningDays_target' => 'required',
                    'Participants_actual' => 'required',
                    'Participants_target' => 'required',
                ],
                [   
                    "TraningDays_actual.required" => 'Actual field of Traning Days is required',
                    "TraningDays_target.required" => 'Target field of Traning Days is required',
                    "Participants_actual.required" => 'Actual field of Participants is required',
                    "Participants_target.required" => 'Target field of Participants is required',
                ]
            );
            $save->TraningDays =  [
                'actual' => $request->TraningDays_actual,
                'target' => $request->TraningDays_target
            ];
            $save->Participants =  [
                'actual' => $request->Participants_actual,
                'target' => $request->Participants_target
            ];
        }

        //return $save;
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
            'month' =>'required',
            'year' =>'required',
        ]);

        $editeddata = kpi::find($id);
        $editeddata->name = $request->name;
        $editeddata->month = $request->month;
        $editeddata->year = $request->year;

        if($request->name == 'Regular Workforce'){

            $this->validate(
                $request, 
                [   
                    'rwf_officers_actual' => 'required',
                    'rwf_staff_actual' => 'required',
                    'rwf_contractors_actual' => 'required',
                ],
                [   
                    "rwf_officers_actual.required" => 'officers field is required',
                    "rwf_staff_actual.required" => 'staff field is required',
                    "rwf_contractors_actual.required" => 'contractors field is required',
                ]
            );

            $editeddata->officers =  [
                'actual' => $request->rwf_officers_actual,
                //'planned' => $request->rwf_officers_planned
            ];
            $editeddata->staff =  [
                'actual'=>$request->rwf_staff_actual
            ];
            $editeddata->contractors =  [
                'actual' => $request->rwf_contractors_actual
            ];
        }
       

        if($request->name =='Hiring Target Achievement'){
           $this->validate(
               $request, 
               [   
                   'HTA_Execcutive' => 'required',
                   'HTA_staff' => 'required',
               ],
               [   
                   "HTA_Execcutive.required" => 'Execcutive field of Hiring Target Achievement is required',
                   "HTA_staff.required" => 'Staff field of Hiring Target Achievement is required',
               ]
           );

            $editeddata->HTA_Execcutive = ['Execcutive' => $request->HTA_Execcutive];
            $editeddata->HTA_staff = ['staff' => $request->HTA_staff];
        }

        if($request->name == 'CSR Target Achievement'){
           $this->validate(
               $request, 
               [   
                   'achievement_actual' => 'required',
                   'achievement_target' => 'required',
               ],
               [   
                   "achievement_actual.required" => 'Actual field of CSR Target Achievement is required',
                   "achievement_target.required" => 'Target field of CSR Target Achievement is required',
               ]
           );

           $editeddata->CSR_achievement_actual =  [
               'actual' => $request->achievement_actual
           ];
           $editeddata->CSR_achievement_target =  [
               'target' => $request->achievement_target
           ];
        }

        if($request->name == 'Training'){
            $this->validate(
                $request, 
                [   
                    'TraningDays_actual' => 'required',
                    'TraningDays_target' => 'required',
                    'Participants_actual' => 'required',
                    'Participants_target' => 'required',
                ],
                [   
                    "TraningDays_actual.required" => 'Actual field of Traning Days is required',
                    "TraningDays_target.required" => 'Target field of Traning Days is required',
                    "Participants_actual.required" => 'Actual field of Participants is required',
                    "Participants_target.required" => 'Target field of Participants is required',
                ]
            );
            $editeddata->TraningDays = [
                'actual' => $request->TraningDays_actual,
                'target' => $request->TraningDays_target
            ];
            $editeddata->Participants = [
                'actual' => $request->Participants_actual,
                'target' => $request->Participants_target
            ];
        }

         $editeddata->save();
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