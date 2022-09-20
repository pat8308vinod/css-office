<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BackendController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }
    public function profile()
    {
        $profile = User::where('id',Auth::user()->id)->first();
        return view('backend.profile',compact('profile'));
    }
    public function updateprofile(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
        ],[
            'name.required'     => "Please Enter Name.",
            'email.required'     => "Please Enter Email."
        ]);
        User::where('id',Auth::user()->id)->update([
            'name'      => $request->name,
            'email'      => $request->email,
        ]);
        return redirect()->back()->with('success','Profile updated sucessfully!');
    }
    public function resetpassword()
    {
        return view('backend.passwordreset');
    }
    public function storeresetpassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("success", "Password changed successfully!");
    }
    public function contacts()
    {
        $contacts = Contact::all();
        return view('backend.contacts',compact('contacts'));
    }
    public function destroycontacts($id)
    {
        $data = Contact::where('id',$id)->first();
        $data->delete();
        return redirect()->back()->with("success", "Message Deleted Successfully !");
    }
}
