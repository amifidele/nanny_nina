<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function filter(Request $request){
        
        $query= $request->input('query');


        $users = User::where('name', 'like', '%$query%')
                     ->orWhere('age', 'like', '%$query%')
                     ->orWhere('location', 'like', '%$query%');

        dd($users);


    }

}
