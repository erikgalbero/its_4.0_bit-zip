<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Reason;

class ReasonController extends Controller
{
    public function getReason(Request $Request) {
        $data = DB::table('reasons')->get(['id','text']);
        
        return response()
        ->json([
            "code" => 200,
            "message" => "OK",
            "data" => $data
        ], 200);

    }
}
