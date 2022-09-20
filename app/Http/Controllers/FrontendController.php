<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function software()
    {
        return view('frontend.software');
    }
    public function hardware()
    {
        return view('frontend.hardware');
    }
    public function digitalmarketing()
    {
        return view('frontend.digitalmarketing');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function blogdetail()
    {
        return view('frontend.blogdetail');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function privacypolicy()
    {
        return view('frontend.privacypolicy');
    }
    public function storecontactform(Request $request)
    {
        $data = $request->validate([
            'first_name'  => 'required',
            'last_name'      => 'required',
            'email'   => 'required',
            'message'       => 'required'
        ]);
        Contact::create($data);
        return redirect()->back()->with('success','Message Sent Successfully!');
    }
}
