<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
    {
        public function AdminDashboard(){
            return view('admin.index');
        
    }//end of AdminDashboard method

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }//end of destroy method

    public function AdminLogin(){
        return view('admin.admin_login');
    }//end of AdminLogin method

    public function AdminProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));


    }//end of AdminProfile method
 
    public function AdminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

       if($request->file('photo')){
        $file = $request->file('photo');
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/admin_images/'),$filename);
        $data['photo'] = $filename;
        
       }

       $data->save();

       $notification = array(
        'Admin' => 'Admin Profile Updated Successfully',
        'alert-type' =>'success',
       );
       return redirect()->back()->with($notification);
        
    }//end of Admin method
    
}//end of AdminController