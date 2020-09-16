<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Exports\PendaftaranSatpamExport;
use App\Exports\PendaftaranBUJPExport;
use Maatwebsite\Excel\Facades\Excel;

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
        $path_file_foto = $req->file('file_foto')->getRealPath();

        $file_ktp = base64_encode(file_get_contents($path_file_ktp));
        $file_ijazah = base64_encode(file_get_contents($path_file_ijazah));
        $file_foto = base64_encode(file_get_contents($path_file_foto));
        DB::table('tbl_pendaftaran_satpam')->insert(
            ['nama' => $req->nama, 'nama_perusahaan' => $req->nama_perusahaan, 'tanggal_lahir' => $req->tgl_lahir, 'alamat_kantor' => $req->alamat_kantor,'telepon' => $req->no_telepon, 'email' => $req->email, 'jabatan'=>$req->calon_anggota, 'ktp'=>$file_ktp, 'ijazah_diklat'=>$file_ijazah, 'foto'=>$file_foto]
        );

        return redirect('/')->with('status', 'Data di Simpan!');
    }

    public function simpan_pendaftar_bujp(Request $req){
        // dd($req->all());
        // $this->validate($req, [
        //     'file-ktp' => 'required|file|image|mimes:jpeg,png,jpg|max:1048',
        //     'file-ijazah' => 'required|file|image|mimes:jpeg,png,jpg|max:1048',
        //     'file-verifikasi' => 'required|file|image|mimes:jpeg,png,jpg|max:1048',
        //     'file-foto' => 'required|file|image|mimes:jpeg,png,jpg|max:1048',
        // ]);

        $path_akta_pendirian_perusahaan = $req->file('akta_pendirian_perusahaan')->getRealPath();
        $path_file_siup = $req->file('siup')->getRealPath();
        $path_file_nib = $req->file('nib')->getRealPath();
        $path_file_ijin_mabes_polri = $req->file('ijin_mabes_polri')->getRealPath();

        $akta_pendirian_perusahaan = base64_encode(file_get_contents($path_akta_pendirian_perusahaan));
        $siup = base64_encode(file_get_contents($path_file_siup));
        $nib = base64_encode(file_get_contents($path_file_nib));
        $ijin_mabes_polri = base64_encode(file_get_contents($path_file_ijin_mabes_polri));
        DB::table('tbl_pendaftaran_bujp')->insert(
            ['nama_perusahaan' => $req->nama_perusahaan, 'alamat_kantor' => $req->alamat_kantor,'penanggung_jawab' => $req->penanggung_jawab, 'jabatan' => $req->jabatan, 'jml_gada_pratama'=>$req->gada_pratama, 'jml_gada_madya'=>$req->gada_madya, 'jml_gada_utama'=>$req->gada_utama, 'akta_pendirian_perusahaan'=>$akta_pendirian_perusahaan, 'siup'=>$siup, 'nib'=>$nib, 'ijin_mabes_polri'=>$ijin_mabes_polri]
        );

        return redirect('/')->with('status', 'Data di Simpan!');
    }

    public function data_pendaftar(){

        $data_pendaftar = DB::table('tbl_pendaftaran_satpam')->get();
        return view('admin.anggota.pendaftar', compact('data_pendaftar'));
    }
    public function data_pendaftar_bujp(){

        $data_pendaftar = DB::table('tbl_pendaftaran_bujp')->get();
        return view('admin.anggota.pendaftar_bujp', compact('data_pendaftar'));
    }

    public function detail_pendaftar($no_pendaftaran){
        $data_pendaftar = DB::table('tbl_pendaftaran_satpam')->where('no_pendaftaran', $no_pendaftaran)->first();
        return view('admin.anggota.aktivasi', compact('data_pendaftar'));
    }
    public function detail_pendaftar_bujp($no_pendaftaran){
        $data_pendaftar = DB::table('tbl_pendaftaran_bujp')->where('no_pendaftaran', $no_pendaftaran)->first();
        return view('admin.anggota.confirmasi_pendaftar_bujp', compact('data_pendaftar'));
    }
    public function confirmasi_pendaftar_bujp(Request $res){
        DB::table('tbl_pendaftaran_bujp')->where('no_pendaftaran', $res->no_pendaftaran)->update(['status'=>'CONFIRMED']);

        $data_pendaftar = DB::table('tbl_pendaftaran_bujp')->get();
        return view('admin.anggota.pendaftar_bujp', compact('data_pendaftar'));
    }

    public function confirmasi_pendaftar_satpam(Request $req){
        DB::table('tbl_pendaftaran_satpam')->where('no_pendaftaran', $req->no_pendaftaran)->update(['status'=>'CONFIRMED']);

        $data_pendaftar = DB::table('tbl_pendaftaran_satpam')->get();
        return view('admin.anggota.pendaftar', compact('data_pendaftar'));
    }

    public function export_satpam_excel(){
        return Excel::download(new PendaftaranSatpamExport, 'Data-Pendaftaran-Satpam.xlsx');
    }
    public function export_bujp_excel(){
        return Excel::download(new PendaftaranBUJPExport, 'Data-Pendaftaran-BUJP.xlsx');
    }
}
