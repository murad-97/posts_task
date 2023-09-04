<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


// use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{


    public function get(Request $request)
    {
        $request->validate([
            "Username" => "required|min:8",
            "email" => ["required", "email","unique:users,email"],
            "password" => ["required", "regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"],
            "confirm" => "required|same:password",

        ]);
        // return redirect("welcome");
        $new = new User;
        $new->email = $request->email;
        $new->name = $request->Username;
        $new->password = Hash::make($request->password);
        $new->save();

return redirect("login");
    }

   



}