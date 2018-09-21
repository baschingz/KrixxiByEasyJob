<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegisterController extends Controller {

    public function registerEmployer(Request $data) {
        $name = $data.name;
        $address = $data.address;
        $type = $data.type;
        $tel = $data.tel;
        $email = $data.email;
        $current_time = Carbon::now()->toDateTimeString();
        DB::table('employer')->insertGetId(
            ['name' => $name, 'address' => $address , 'type' => $type , 'tel' => $tel , 'email' => $email , 'created_at' => $current_time]
        );
        $myJSON = json_encode($data);       
        return $myJSON;
    }

    public function registerJobSeeker(Request $data) {
        $name = $data.name;
        $status = $data.status;
        $gender = $data.gender;
        $tel = $data.tel;
        $email = $data.email;

        DB::table('่job_seeker')->insertGetId(
            ['name' => $name, 'status' => $status , 'gender' => $gender , 'tel' => $tel , 'email' => $email]
        );

        $myJSON = json_encode($data);       
        return $myJSON;
    }
 
}

?>