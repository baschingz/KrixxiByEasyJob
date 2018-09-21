<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RequirementController extends Controller {

    public function Requirement(Request $data) {
      $gender = $data.gender;
      $age = $data.age;
      $rate = $data.rate;
      $all_Job_Seeker = DB::table('job_seeker')
      ->select('name','gender','tel','status','email')
      ->where('gender','=',$gender)->get();
        
      
    }
 
}

?>