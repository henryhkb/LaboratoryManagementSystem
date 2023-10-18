<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ironStudy extends Model
{
    use HasFactory;
    protected $fillable = ['TRANSFERING','VITAMINB12','FOLATE','TIBC','IRON','FERRITIN','DRAWN_DATE_TIME','NAME',
    'GENDER','TODAY_DATE','LAB_NUMBER','DATE_OF_BIRTH',
    'PATIENT_ID','DOB','_token','_method'] ;
}
