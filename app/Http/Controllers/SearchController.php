<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;


class SearchController extends Controller
{


      

    public function Search(Request $request)
    {
        $search = $request->search;
        
        $users = User::where('lastname', 'LIKE', '%'.$search.'%')
        ->orWhere('firstname', 'LIKE', '%'.$search.'%')
        ->orWhere('username', 'LIKE', '%'.$search.'%')
        ->orWhere('middlename', 'LIKE', '%'.$search.'%')->get();
        return view('search', compact('users'));
    } 



  

    public function Searching(Request $request)
    {
        $search = $request->search;
        
        $users = \App\User::where([ 
            ['lastname', 'LIKE', '%' . $search . '%'],
            //['firstname', 'LIKE', '%' . $search . '%'],
        ])->get();
    
        return view('search', compact('users'));
    } 

}
