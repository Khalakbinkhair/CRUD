<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
class RecordController extends Controller
{
    public function record(){
        $user= Record::all();
        return view('home.regfile')
        ->with('user',$user);
    }

    public function newfile(){
        return view('home.newfile');
    }

    public function regsubmit(Request $req){

         $input = $req->all();
         $user =new Record();
         $user->name= $req->name;
         $user->email= $req->email;    
         $user->save();

         return redirect()->route('record');
    }

    public function edit($id){
    
        $user= Record::where('id',$id)->first();
        return view('home.editfile')->with('user',$user);
 
 
    }
    public function editsubmit(Request $req){


        $user= Record::where('id',$req->id)->first();
        $user->name= $req->name;
        $user->email= $req->email;    
        $user->save();
        return redirect()->route('record');
 
    }
    public function delete($id){


        $user= Record::where('id',$id)->first();
        $user->delete();
        return redirect()->route('record');

 
    }
}
