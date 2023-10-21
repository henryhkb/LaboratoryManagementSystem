<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\labResults;

class labResultController extends Controller
{
    //
    public function addLabResult(Request $request)
    {
        $addLab = new labResults;
        $addLab->patient_id = $request->patient_id;
        $addLab->date_of_birth = $request->date_of_birth;
        $addLab->Lab_number = $request->Lab_number;
        $addLab->today_Date = $request->today_Date;
        $addLab->Gender  = $request->Gender;
        $addLab->Name = $request->Name;
        $addLab->drawn_date_time = $request->drawn_date_time;
        $addLab->LH = $request->LH;
        $addLab->FSH = $request->FSH;
        $addLab->prolactin = $request->prolactin;
        $addLab->progesterone = $request->progesterone;
        $addLab->obstrogen = $request->obstrogen;
        $addLab->testosterone = $request->testosterone;
        $addLab->comments = $request->comments;
        $addLab->validated_by = $request->validated_by;

        $addLab->save();

        return redirect()->back();


    }

    public function viewReproAssay()
    {
        $reproAssay = labResults::all();
        return view('Hormones.viewreproductiveAssay', compact('reproAssay'));
    }

    public function reproAssayDetails($id){
        $reproAssayDetails = labResults::find($id);
        return view('Hormones.reproAssayDetails', compact('reproAssayDetails'));
    }
}
