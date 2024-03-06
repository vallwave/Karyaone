<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class GolonganController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }
    public function golongan()
    {
    $golongan = Golongan::all(); 

    return view('golongan', compact('golongan'));
    }

    public function tambahgolongan(){
        return view('tambahgolongan');
    }

    public function storegolongan(Request $request){
        $this->validate($request,[
           'nama_golongan' => 'required',
           'gaji_pokok' => 'required',
           'tunjangan_istri' => 'required',
           'tunjangan_anak' => 'required',
           'tunjangan_transport' => 'required',
           'tunjangan_makan' => 'required',
           'created_at'    => 'required',
           'updated_at'    => 'required',

        ]);        

        Golongan::create([

        $golongan['nama_golongan'] = $request->nama_golongan,
        $golongan['gaji_pokok'] = $request->gaji_pokok,
        $golongan['tunjangan_istri'] = $request->tunjangan_istri,
        $golongan['tunjangan_anak'] = $request->tunjangan_anak,
        $golongan['tunjangan_transport'] = $request->tunjangan_transport,
        $golongan['tunjangan_makan'] = $request->tunjangan_makan,
        $golongan['created_at']  = $request->created_at,
        $golongan['updated_at']  = $request->updated_at,
        ]);
        
        return redirect()->route('admin.golongan');
    }

    public function editgolongan(Request $request,$id){
        $golongan = Golongan::find($id);

        return view('editgolongan',compact('golongan'));
    }

    public function updategolongan(Request $request,$id){
        $this->validate($request,[
            'nama_golongan' => 'required',
            'gaji_pokok' => 'required',
            'tunjangan_istri' => 'required',
            'tunjangan_anak' => 'required',
            'tunjangan_transport' => 'required',
            'tunjangan_makan' => 'required',
            'created_at'    => 'required',
            'updated_at'    => 'required',
         ]);

        $golongan['nama_golongan'] = $request->nama_golongan;
        $golongan['gaji_pokok'] = $request->gaji_pokok;
        $golongan['tunjangan_istri'] = $request->tunjangan_istri;
        $golongan['tunjangan_anak'] = $request->tunjangan_anak;
        $golongan['tunjangan_transport'] = $request->tunjangan_transport;
        $golongan['tunjangan_makan'] = $request->tunjangan_makan;
        $golongan['created_at']  = $request->created_at;
        $golongan['updated_at']  = $request->updated_at;
         
         
 
         Golongan::whereId($id)->update($golongan);
         
         return redirect()->route('admin.golongan'); 
        }

        public function deletekaryawan(Request $request,$id){
            $golongan = Golongan::find($id);

            if($golongan){
                $golongan->delete();
            }

            return redirect()->route('admin.golongan');
        }
}
