<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect("/")->with("success", "Succesfully Logged out!");
    }
}
