<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }
    public function index(){

        $data = User::get();

        return view('index',compact('data'));
    }

    public function tambahuser(){
        return view('tambahuser');
    }

    public function storeuser(Request $request){
        $validator = Validator::make($request->all(),[
           'email' => 'required|email',
           'nama' => 'required',
           'password' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->nama;
        $data['password'] = Hash::make($request->password);

        User::create($data);
        
        return redirect()->route('admin.index');
    }

    public function edituser(Request $request,$id){
        $data = User::find($id);

        return view('edituser',compact('data'));
    }

    public function updateuser(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'email'    => 'required|email',
            'nama'     => 'required',
            'password' => 'nullable',
         ]);
 
         if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
 
         $data['email'] = $request->email;
         $data['name'] = $request->nama;

         if($request->password){
            $data['password'] = Hash::make($request->password);
         }
         
 
         User::whereId($id)->update($data);
         
         return redirect()->route('admin.index'); 
        }

        public function deleteuser(Request $request,$id){
            $data = User::find($id);

            if($data){
                $data->delete();
            }

            return redirect()->route('admin.index');
        }
}
