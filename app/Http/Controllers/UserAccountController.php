<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Input;
use Auth;
use Flash;
use Session;

class UserAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        return view('auth.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $this->validate(request(), [
        'lastname' => 'required|string|max:25',
        'firstname' => 'required|string|max:25',
        'username' => 'required|string|max:255|confirmed',
        'email' => 'required|string|email|max:255',
       // 'password' => 'required|string|min:2|confirmed',
        'institution' => 'required',
        'department' => 'required',
        'gender' => 'required',
 ]); 
        //dd($request->all());
       $user = Auth::user();
      $user->lastname = request()->input('lastname');
      $user->firstname = request()->input('firstname');
      $user->middlename = request()->input('middlename');
      $user->username = request()->input('username');
      $user->email =  request()->input('email');
      //$user->password = \Hash::make($request->input('password'));
      $user->gender = request()->input('gender');
      $user->institution = request()->input('institution');
      $user->department = request()->input('department');
      $user->phone = request()->input('phone');
      $user->idnumber = request()->input('username');
      
      $user->save(); 
      session::flash('status', 'successfully Updated');
      
      return redirect()->route('home');
            
     
        }
    /**
        * return view('clientes.index')->withUser($user);
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
