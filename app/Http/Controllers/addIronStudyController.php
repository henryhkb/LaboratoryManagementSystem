<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ironStudy;


class addIronStudyController extends Controller
{
    //
    public function addIronStudy(Request $request){
        $addIronStudy = new ironStudy;
        $addIronStudy->fill($request->all());
        $addIronStudy->save();
        return redirect()->back();
    }

    public function viewIronStudy(){
        return view("IronStudy.viewIronStudy");
    }
}
