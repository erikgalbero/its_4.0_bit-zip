<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Models\User;


class RegistrationController extends Controller
{
    public function create(Request $request) {
        $userData = json_decode($request->getContent());

        $user = new User();

        $user->name = $userData->name;
        $user->surname = $userData->surname;
        $user->phone = $userData->phone;
        $user->email = $userData->email;
        $user->privacy_agreement = $userData->privacy_agreement;
        $user->reason_id = $userData->reason_id;
        $user->role_id = $userData->role_id;
        
        $user->save();

        return response()
                ->json([
                    "registered_user" => $user
                ], 200);

    }
   
    public function getUser($id) {
        return User::find($id);
    }

    
}
