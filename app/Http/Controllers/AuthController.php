<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Role;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // public function user(Request $request){
    // $data = $request->validate([
    //     'name' => 'required|string',
    //     'email' => 'required|string|email',
    //     'password' => 'required|string|min:6'
    // ]);
    // $user = new User();
    // $user->name = $data['name'];
    // $user->email = $data['email'];
    // $user->password = Hash::make( $data['password']);

    // $user->save();

    // return redirect()->back();
    // }

    // public function login(Request $request){
    //     $data = $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     $user = User::where('email',$data['email'])->first();

    //     if($user){

    //     if(Hash::check($data['password'],$user->password)){

       
    //     return redirect()->route('home.page');
    
    //     }else{
    //         Session::flash('error_message','your password has been incorrect');
    //         return redirect()->back();
    //     }

       
    //     }else{
    //         Session::flash('error_message','user has not been found');
    //         return redirect()->back();
    //     }
    // }

    public function form(){

    $roles = Role::all();

    return view('pages.form', compact('roles'));
    }

    public function form_store(Request $request){
        $data = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email',
            'phone'=>'required|string|max:10',
            'house_no'=>'required|integer',
            'family_members'=>'required|integer',
            'role_id'=>'required',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
          
        ]);

        $newImage = "";
        if($request->hasFile('image')){
            $file =$request->file('image');
            $newImage = time(). '.'.$file->getClientOriginalExtension();
            $file->storeAs('profile', $newImage, 'public');
        }

        $user = new User();
        $user->name = $data['name'];
        $user->email= $data['email'];
        $user->phone= $data['phone'];
        $user->house_number= $data['house_no'];
        $user->no_of_family_members= $data['family_members'];
        $user->role_id = $data['role_id'];
        $user->image = $newImage;
       

        $user->save();
       
        Session::flash('success','your form has been submited successfully');
        return back();
    }

    public function index(){
    $users = User::all();
    return view('pages.index',compact('users'));
    }
  
    public function contact(){

    return view('pages.contact',);
    }

    public function contact_store(Request $request){

    $data = $request->validate([
    'name'=>'required|string',
    'email'=>'required|email',
    'message'=>'required|string'
    ]);

    $contact = new Contact();
    $contact->name = $data['name'];
    $contact->email = $data['email'];
    $contact->message = $data['message'];

  
    Mail::to('mgrmandeep07@gmail.com')->send(new ContactMail($contact));

    Session::flash('success','your message has been submit successfully');
    
    return redirect()->back();
    }


}
