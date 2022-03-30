<?php
/*
 * File name: UserAPIController.php
 * Last modified: 2021.08.02 at 22:53:11
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Rider;

class RiderAPIController extends Controller
{


    public function getCompanyRiders($id)
    {
        $riders =   Rider::where('company_id', $id)->with('user')->get();
        
        return response()->json([
            'success' => true,
            'data' => $riders,
            'message' => 'All Riders according to company'
        ]);
    }
}
