<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    // public function index()
    // {
    //     $users = User::all();
    //     $role = Role::all();
    //     return view('admin.users.index',compact('users','role'));
    // }
    // public function create()
    // {
    //     $role =  Role::all();
    //     return view('admin.users.create',compact('role'));
    // }
    // public function destroy($id)
    // {
    //     $userData = User::find($id);
    //     $imglink1 = $userData->nationalid;
    //     $imglink2 = $userData->agreement_paper;
    //     $img1 = public_path('upload/' . $imglink1);
    //     $img2 = public_path('upload/' . $imglink2);

    //     if(File::exists($img1))
    //     {
    //         unlink($img1);
    //     }
    //     if(File::exists($img2))
    //     {
    //         unlink($img2);
    //     }
    //     User::destroy($id);
    //     return redirect('usermanage');
    // }


    // public function store(Request $request)
    // {
    //     $nationalid = $request->nationalid;
    //     $agreementpaper = $request->agreementpaper;
    //     if ($nationalid)
    //     {
    //         $nationalidimg = 'nationalid'. time().'.'.$nationalid->getClientOriginalExtension();
    //         $nationalid->move(public_path('upload/'), $nationalidimg);
    //         $nationalid = $nationalidimg; 
    //     }
    //     else
    //     {
    //         $nationalid = ''; 
    //     }
    //     if ($agreementpaper)
    //     {
    //         $agreementpaperimg = 'agreementpaper' . time().'.'.$agreementpaper->getClientOriginalExtension();
    //         $agreementpaper->move(public_path('upload/'), $agreementpaperimg);
    //         $agreementpaper = $agreementpaperimg; 
    //     }
    //     else
    //     {
    //         $agreementpaper = ''; 
    //     }

    //     $username = $request->username; 
    //     $userrolle = $request->userrolle;
    //     $email = $request->email; 
    //     $address = $request->address; 
    //     $contactno = $request->contactno; 
    //     $referenceper = $request->referenceper;
    //     $password = Hash::make($request->password);

    //     $userData  = 
    //     [
    //         'name'=>$username,
    //         'roleid'=>$userrolle,
    //         'email'=>$email,
    //         'address'=>$address,
    //         'contact_no'=>$contactno,
    //         'reference_by'=>$referenceper,
    //         'nationalid'=>$nationalid,
    //         'agreement_paper'=>$agreementpaper,
    //         'password'=>$password,
    //     ];
    //     User::create($userData);
        
    //     return redirect('usermanage');
    // }

    // public function edit($id)
    // {
    //     $user = User::find($id);
    //     $role =  Role::all();
    //     return view('admin.users.edit',compact('user','role'));
    // }
    // public function update(Request $request)
    // {
    //     $id = $request->id;
    //     $userData = User::find($id);
    //     $imglink1 = $userData->nationalid;
    //     $imglink2 = $userData->agreement_paper;
    //     $img1 = public_path('upload/' . $imglink1);
    //     $img2 = public_path('upload/' . $imglink2);

    //     if($imglink1)
    //     {
    //         unlink($img1);
    //     }
    //     if($imglink2)
    //     {
    //         unlink($img2);
    //     }

    //     $nationalid = $request->nationalid;
    //     $agreementpaper = $request->agreementpaper;
    //     if ($nationalid)
    //     {
    //         $nationalidimg = 'nationalid'. time().'.'.$nationalid->getClientOriginalExtension();
    //         $nationalid->move(public_path('upload/'), $nationalidimg);
    //         $nationalid = $nationalidimg; 
    //     }
    //     else
    //     {
    //         $nationalid = ''; 
    //     }
    //     if ($agreementpaper)
    //     {
    //         $agreementpaperimg = 'agreementpaper' . time().'.'.$agreementpaper->getClientOriginalExtension();
    //         $agreementpaper->move(public_path('upload/'), $agreementpaperimg);
    //         $agreementpaper = $agreementpaperimg; 
    //     }
    //     else
    //     {
    //         $agreementpaper = ''; 
    //     }

    //     $username = $request->username; 
    //     $userrolle = $request->userrolle;
    //     $email = $request->email; 
    //     $address = $request->address; 
    //     $contactno = $request->contactno; 
    //     $referenceper = $request->referenceper;
    //     $password = Hash::make($request->password);

    //     $userData  = 
    //     [
    //         'name'=>$username,
    //         'roleid'=>$userrolle,
    //         'email'=>$email,
    //         'address'=>$address,
    //         'contact_no'=>$contactno,
    //         'reference_by'=>$referenceper,
    //         'nationalid'=>$nationalid,
    //         'agreement_paper'=>$agreementpaper,
    //         'password'=>$password,
    //     ];

    //     User::find($id)->update($userData);
    //     return redirect('usermanage');
    // }
}