<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function nameFilter(Request $request){
        
        $query= $request->input('name_query');


        $users = User::where('name', 'like', '%$query%')
                     ->orWhere('age', 'like', '%$query%')
                     ->orWhere('location', 'like', '%$query%');

        dd($users);


    }

    public function ageFilter(Request $request){

        $query = $request->input('age_query');

        $users = User::where('age', 'like', '%$query%');

        dd($user);

    }


}
