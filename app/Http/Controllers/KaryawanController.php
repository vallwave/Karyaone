<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class KaryawanController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }
    public function karyawan()
    {
    $karyawan = Karyawan::all(); 

    return view('karyawan', compact('karyawan'));
    }

    public function tambahkaryawan(){
        return view('tambahkaryawan');
    }

    public function storekaryawan(Request $request){
        $this->validate($request,[
           'nip' => 'required',
           'nik' => 'required',
           'nama' => 'required',
           'jenis_kelamin' => 'required',
           'tempat_lahir' => 'required',
           'tanggal_lahir' => 'required',
           'telpon' => 'required',
           'agama' => 'required',
           'status_nikah' => 'required',
           'alamat' => 'required',
           'golongan_id' => 'required',
           'created_at'    => 'required',
           'updated_at'    => 'required',

        ]);        

        Karyawan::create([

        $karyawan['nip'] = $request->nip,
        $karyawan['nik'] = $request->nik,
        $karyawan['nama'] = $request->nama,
        $karyawan['jenis_kelamin'] = $request->jenis_kelamin,
        $karyawan['tempat_lahir'] = $request->tempat_lahir,
        $karyawan['tanggal_lahir'] = $request->tanggal_lahir,
        $karyawan['telpon'] = $request->telpon,
        $karyawan['agama'] = $request->agama,
        $karyawan['status_nikah'] = $request->status_nikah,
        $karyawan['alamat'] = $request->alamat,
        $karyawan['golongan_id'] = $request->golongan_id,
        $karyawan['created_at']  = $request->created_at,
        $karyawan['updated_at']  = $request->updated_at,
        ]);
        
        return redirect()->route('admin.karyawan');
    }

    public function editkaryawan(Request $request,$id){
        $karyawan = Karyawan::find($id);

        return view('editkaryawan',compact('karyawan'));
    }

    public function updateuser(Request $request,$id){
        $this->validate($request,[
           'nip' => 'required',
           'nik' => 'required',
           'nama' => 'required',
           'jenis_kelamin' => 'required',
           'tempat_lahir' => 'required',
           'tanggal_lahir' => 'required',
           'telpon' => 'required',
           'agama' => 'required',
           'status_nikah' => 'required',
           'alamat' => 'required',
           'golongan_id' => 'required',
           'created_at'    => 'required',
           'updated_at'    => 'required',
         ]);

         $karyawan['nip'] = $request->nip;
         $karyawan['nik'] = $request->nik;
         $karyawan['nama'] = $request->nip;
         $karyawan['jenis_kelamin'] = $request->nik;
         $karyawan['tempat_lahir'] = $request->nip;
         $karyawan['tanggal_lahir'] = $request->nik;
         $karyawan['telpon'] = $request->nip;
         $karyawan['agama'] = $request->nik;
         $karyawan['status_nikah'] = $request->nip;
         $karyawan['alamat'] = $request->nik;
         $karyawan['golongan_id'] = $request->nip;
         $karyawan['created_at']  = $request->created_at;
         $karyawan['updated_at']  = $request->updated_at;
         
 
         Karyawan::whereId($id)->update($karyawan);
         
         return redirect()->route('admin.karyawan'); 
        }

        public function deletekaryawan(Request $request,$id){
            $karyawan = Karyawan::find($id);

            if($karyawan){
                $karyawan->delete();
            }

            return redirect()->route('admin.karyawan');
        }
}
