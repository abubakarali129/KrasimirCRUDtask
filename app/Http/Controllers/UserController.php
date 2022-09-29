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
        
    }

   
    public function store(Request $request)
    {
        
        $validator =  Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:8',     
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }

        $user=User::create($request->all());

         if($user){
            return response()->json(['data' => 'User Created successfully']);
        }else{
            return response()->json(['error' => 'There is issue please try again later']);
        } 
    }

   
    public function show($id)
    {
        $user=User::findorfail ($id);
        return response()->json($user);
    }

   
    public function edit($id){
        //
    }

    
    public function update($id,Request $request)
    {
         $validator =  Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'password' => 'sometimes|string|min:8',
        ]);
              
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }

        $user=User::findorfail($id);



        if($user->update($request->all())){
            return response()->json(['data' => 'User Update successfully']);
        }else{
            return response()->json(['error' => 'There is issue please try again later']);
        }
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
