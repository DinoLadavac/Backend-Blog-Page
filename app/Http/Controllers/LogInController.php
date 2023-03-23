<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function create()
    {
        return view("login");
    }
    public function store()
    {
        //validate
        $attributes= request()->validate([
            "email"=>"required",  //check if email is in db
            "password" => "required"
        
        ]);
        if(auth()->attempt($attributes))
        {
            return redirect("/") -> with("success", "You have succesfully logged in");
        }

        return back()->withInput()->withErrors(["email" => "You have provided an email that doesn't exist or the password is incorrect"]);
    }
}