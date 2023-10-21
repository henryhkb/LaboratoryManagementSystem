<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ironStudy;


class addIronStudyController extends Controller
{
    //
    public function addIronStudy(Request $request){
        $addIronStudy = new ironStudy;
        $addIronStudy->patient_id = $request->patient_id;
        $addIronStudy->date_of_birth = $request->date_of_birth;
        $addIronStudy->Lab_number = $request->Lab_number;
        $addIronStudy->today_Date = $request->today_Date;
        $addIronStudy->Gender = $request->Gender;
        $addIronStudy->Name = $request->Name;
        $addIronStudy->drawn_date_time = $request->drawn_date_time;
        $addIronStudy->Ferritin_Male = $request->Ferritin_Male;
        $addIronStudy->Ferritin_Female = $request->Ferritin_Female;
        $addIronStudy->Iron = $request->Iron;
        $addIronStudy->TIBC = $request->TIBC;
        $addIronStudy->Folate = $request->Folate;
        $addIronStudy->VitaminB12 = $request->VitaminB12;
        $addIronStudy->Transfering = $request->Transfering;
        $addIronStudy->comments = $request->comments;
        $addIronStudy->validated_by = $request->validated_by;
        
        $addIronStudy->save();
        
        return redirect()->back();
    }

    public function viewIronStudy(){
        $viewIronStudy = ironStudy::all();

        return view("IronStudy.viewIronStudy", compact('viewIronStudy'));
    }
}
