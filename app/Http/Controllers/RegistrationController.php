<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validations;
use App\Models\User;
class RegistrationController extends Controller
{
    public function create()
    {
        return view("register.create");
    }
    public function store()
    {
        //Validate the sent values
        $attributes = request()->validate([
            "name" => ["required","max:255"],
            "username" => ["required","min:3","max:255", "unique:users,username"],
            "email" => ["required","email","unique:users,email"],
            "password" => ["required","min:7","max:255"]
        ]);

        //If validation passes -> create a user
        $user=User::create($attributes);
      
        auth()->login($user);
        // return to homepage and flash message
        return redirect("/")->with("success", "You have created an account");


    }
}
