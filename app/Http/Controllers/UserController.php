<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
        $users=User::all();
        return view('index')->with('users',$users);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
         
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id){
        //
    }

    
    public function update($id,Request $request)
    {
         
    }

   
    public function destroy($id)
    {
        

    }
}
