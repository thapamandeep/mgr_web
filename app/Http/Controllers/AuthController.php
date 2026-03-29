<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Role;
use App\Models\Register;
use App\Models\Contact;
use App\Mail\ContactMail;
use App\Mail\otpMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user(Request $request){
    $data = $request->validate([
         'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'name' => 'required|string',
        'email' => 'required|string|email',
        'phone'=>'required|string',
        'password' => 'required|string|min:6',
        'role_id'=>'required'
        
    ]);

         $newImage = "";
        if($request->hasFile('image')){
            $file =$request->file('image');
            $newImage = time(). '.'.$file->getClientOriginalExtension();
            $file->storeAs('profile', $newImage, 'public');
        }

    
    $user = new User();
    $user->image = $newImage;
    $user->name = $data['name'];
    $user->email = $data['email'];
    $user->phone = $data['phone'];
    $user->password = Hash::make( $data['password']);
    $user->role_id = $data['role_id'];

    $user->save();

    Session::flash('success','your register has been success');

    return redirect()->back();
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|min:6'
        ]);

        $user = User::where('email',$data['email'])->first();

        if($user){

        if(Hash::check($data['password'],$user->password)){

       Auth::login($user);

       if(Auth::user()->role_id == 3){
        return redirect()->route('home.page');
    
        }elseif(Auth::user()->role_id == 2){

        return redirect()->route('get.admin');
        }else{
            Session::flash('error_message','your password has been incorrect');
            return redirect()->back();
        }

       
        }else{
            Session::flash('error_message','user has not been found');
            return redirect()->back();
        }
    }
    }

    // ------------------------------form----------------------------//

    public function form(){

    $roles = Role::all();

    return view('pages.form', compact('roles'));
    }


    // --------------------------form store-----------------------//

    public function form_store(Request $request){
        $data = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email',
            'phone'=>'required|string|max:10',
            'house_no'=>'required|integer',
            'family_members'=>'required|integer',
            'role_id'=>'required',
        
            'otp'=>'nullable|string'
          
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
        $user->otp =  $data['otp'];
       

        $user->save();
       
        Session::flash('success','your form has been submited successfully');
        return back();
    }

    public function index(){
    $users = User::all();
    return view('pages.index',compact('users'));
    }

    // -------------------------contact-------------------------//
  
    public function contact(){

    return view('pages.contact',);
    }

    // -----------------------contact store---------------------------//

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

  
    Mail::to('')->send(new ContactMail($contact));

    Session::flash('success','your message has been submit successfully');
    
    return redirect()->back();
    }

    // ----------------------------------show-----------------------//


public function show(User $user){

return view('pages.view', compact('user'));
}

// -----------------------edit-------------------------------//

public function edit(User $user){
$roles = Role::all();
return view('pages.edit', compact('user','roles'));
}

// -------------------------register store-----------------------//


// ------------------forgot password------------------------//

public function forgot_password(){

return view('pages.forgot-password');
}

public function reset_password(Request $request){
    $request->validate([
        'email'=>'required|email|exists:registers,email',
    ]);

    // otp generate
    $otp = rand(100000,999999);

    $register = Register::where('email', $request->email)->first();
    
    $register->otp = $otp;
    $register->save();

    Mail::to($request->email)->send(new otpMail($otp));

    return redirect()->route('get.reset.password')->with('status','6 digit code sent to your email');

}

public function resetPassword(){

return view('pages.reset-password');
}

public function updatePassword(Request $request){
 $data = $request->validate([
    'email'=>'required|email|',
    'otp'=>'required',
    'new_password'=>'required',
    'confirm_password'=>'required|same:new_password'
 ]);

 $register = Register::where('email',$data['email'])->first();

 if(!$register){

 return back()->with('error','id has not found');
 }elseif($register->otp != $data['otp']){

 return back()->with('error','otp invalid');
 }

 $register->password = Hash::make($data['new_password']);
 $register->otp = "";
 $register->save();

 Session::flash('success','your password has been updated');
 return redirect()->route('login.page');
}

public function editStore(Request $request, User $user){
   $data = $request->validate([
    'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'name' => 'required|string',
        'email' => 'required|string|email',
        'phone'=>'required|string',
        'password' => 'nullable|string|min:6',
        'role_id'=>'required'
        
    ]);

         $newImage = "";
        if($request->hasFile('image')){
            $file =$request->file('image');
            $newImage = time(). '.'.$file->getClientOriginalExtension();
            $file->storeAs('profile', $newImage, 'public');

                
   
    $user->image = $newImage;
    $user->name = $data['name'];
    $user->email = $data['email'];
    $user->phone = $data['phone'];
    $user->password = Hash::make( $data['password']);
    $user->role_id = $data['role_id'];

    $user->save();

    Session::flash('success','your register has been success');

    return redirect()->back();
    }

   
}

public function membersIndex(){

$users = User::orderByRaw("FIELD(role_id, 2 , 3 , 1)")->get();

return view('pages.members-index', compact('users'));
}

}


