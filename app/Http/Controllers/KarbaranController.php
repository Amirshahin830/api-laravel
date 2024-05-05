<?php

namespace App\Http\Controllers;

use App\Models\karbaran;
use Illuminate\Http\Request;

class KarbaranController extends Controller
{
    public function users(Request $request)
    {
        $request->validate([
            'fullname'=>'required|max:191',
            'email'=>'required|max:191',
            'phonenumber'=>'required|max:191',
            'nationalcode'=>'required|max:191',
            'fathername'=>'required|max:191',

        ]);
        $karbaran = new karbaran();
        $karbaran->fullname=$request->fullname;
        $karbaran->email=$request->email;
        $karbaran->phonenumber=$request->phonenumber;
        $karbaran->nationalcode=$request->nationalcode;
        $karbaran->fathername=$request->fathername;
        $karbaran->save();
        return response()->json(['message'=>'karbar added succesfully ! ']);
    }
    public function show()
    {
        $karbaran=karbaran::all();
        return $karbaran;
    }
    public function destroy(Request $request)
    {
        $user = karbaran::where('email', $request->email);
        $user->delete();
        return response()->json(['message'=>'karbar nabod shode ! ']);
    }
    public function find(Request $request)
    {
        $user = karbaran::where('email',$request->email)->get();
        return $user;
    }
}
