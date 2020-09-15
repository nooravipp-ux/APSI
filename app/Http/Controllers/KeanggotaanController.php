<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class KeanggotaanController extends Controller
{
    
    public function pendaftaran_personil(){
        return view('website.keanggotaan.pendaftaran');
    }

    public function pendaftaran_BUJP(){
        return view('website.keanggotaan.pendaftaran_bujp');
    }

    public function simpan_pendaftar(Request $req){
        // dd($req->all());
        // $this->validate($req, [
        //     'file-ktp' => 'required|file|image|mimes:jpeg,png,jpg|max:1048',
        //     'file-ijazah' => 'required|file|image|mimes:jpeg,png,jpg|max:1048',
        //     'file-verifikasi' => 'required|file|image|mimes:jpeg,png,jpg|max:1048',
        //     'file-foto' => 'required|file|image|mimes:jpeg,png,jpg|max:1048',
        // ]);

        $path_file_ktp = $req->file('file_ktp')->getRealPath();
        $path_file_ijazah = $req->file('file_ijazah')->getRealPath();
        $path_file_verifikasi = $req->file('file_verifikasi')->getRealPath();
        $path_file_foto = $req->file('file_foto')->getRealPath();

        $file_ktp = base64_encode(file_get_contents($path_file_ktp));
        $file_ijazah = base64_encode(file_get_contents($path_file_ijazah));
        $file_verifikasi = base64_encode(file_get_contents($path_file_verifikasi));
        $file_foto = base64_encode(file_get_contents($path_file_foto));
        DB::table('tbl_pendaftaran')->insert(
            ['nama' => $req->nama, 'alamat_kantor' => $req->alamat_kantor,'telepon' => $req->no_telepon, 'email' => $req->email, 'calon_anggota'=>$req->calon_anggota, 'ktp'=>$file_ktp, 'ijazah_pelatihan'=>$file_ijazah, 'verifikasi_dcp'=>$file_verifikasi, 'foto'=>$file_foto]
        );

        return redirect('/')->with('status', 'Data di Simpan!');
    }

    public function data_pendaftar(){

        $data_pendaftar = DB::table('tbl_pendaftaran')->get();
        return view('admin.anggota.pendaftar', compact('data_pendaftar'));
    }

    public function detail_pendaftar($no_pendaftaran){
        $data_pendaftar = DB::table('tbl_pendaftaran')->where('no_pendaftaran', $no_pendaftaran)->first();
        return view('admin.anggota.aktivasi', compact('data_pendaftar'));
    }
    public function aktivasi_pendaftar($no_pendaftaran){
        DB::table('tbl_pendaftaran')->where('no_pendaftaran', $no_pendaftaran)->update(['']);

        $data_pendaftar = DB::table('tbl_pendaftaran')->get();
        return view('admin.anggota.pendaftar', compact('data_pendaftar'));
    }
}
