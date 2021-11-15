<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{

    public function users(){

        $users = User::all();

    }

    


    public function nameFilter(Request $request){
        
        $query= $request->input('name_query');

        $users = User::where('name', 'like', '%$query%');

        dd($users);


    }

    
    public function ageFilter(Request $request){

        $query = $request->input('age_query');

        $users = User::where('age', 'like', '%$query%');

        dd($user);

    }


    public function locationFilter(Request $request){

        $query = $request->input('location_query');

        $users = User::where('location', 'like', '%$query%' );

        dd($users);     


    }


}
