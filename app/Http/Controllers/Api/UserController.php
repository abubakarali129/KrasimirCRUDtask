<?php

namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
        $users=User::all();
        return response()->json($users);
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
        $user=User::findorfail ($id);
        return response()->json($user);
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update($id,Request $request)
    {
         
    }

   
    public function destroy($id)
    {
        $user=User::findorfail ($id);
        if($user->delete()){
             return response()->json(['data' => 'User delete successfully']);
         }else{
             return response()->json(['error' => 'There is issue please try again later']);
         }
    }
}
