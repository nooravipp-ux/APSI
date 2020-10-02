<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Exports\PendaftaranSatpamExport;
use App\Exports\PendaftaranBUJPExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KeanggotaanController extends Controller
{
    
    public function pendaftaran_personil(){
        return view('website.keanggotaan.pendaftaran');
    }

    public function pendaftaran_BUJP(){
        return view('website.keanggotaan.pendaftaran_bujp');
    }

    public function simpan_pendaftar(Request $req){
        $ktp = $req->file('file_ktp');
        $extension_ktp = $ktp->getClientOriginalExtension();
        Storage::disk('public')->put($ktp->getFilename().'.'.$extension_ktp,  File::get($ktp));

        $ijazah = $req->file('file_ijazah');
        $extension_ijazah = $ijazah->getClientOriginalExtension();
        Storage::disk('public')->put($ijazah->getFilename().'.'.$extension_ijazah,  File::get($ijazah));

        $foto = $req->file('file_foto');
        $extension_foto = $foto->getClientOriginalExtension();
        Storage::disk('public')->put($foto->getFilename().'.'.$extension_foto,  File::get($foto));

        DB::table('tbl_pendaftaran_satpam')->insert(
            [
                'nama' => $req->nama, 'nama_perusahaan' => $req->nama_perusahaan, 
                'tanggal_lahir' => $req->tgl_lahir,
                'alamat_kantor' => $req->alamat_kantor,
                'telepon' => $req->no_telepon,
                'email' => $req->email,
                'jabatan'=>$req->calon_anggota,
                'ktp'=>$ktp->getFilename().'.'.$extension_ktp,
                'ktp_mime'=>$ktp->getClientMimeType(),
                'ktp_original_file_name'=>$ktp->getClientOriginalName(),
                'ijazah'=>$ijazah->getFilename().'.'.$extension_ijazah,
                'ijazah_mime'=>$ijazah->getClientMimeType(),
                'ijazah_original_file_name'=>$ijazah->getClientOriginalName(),
                'foto'=>$foto->getFilename().'.'.$extension_foto,
                'foto_mime'=>$foto->getClientMimeType(),
                'foto_original_file_name'=>$foto->getClientOriginalName()
            ]
        );

        return redirect('/')->with('status', 'Data di Simpan!');
    }

    public function simpan_pendaftar_bujp(Request $req){
        $app = $req->file('akta_pendirian_perusahaan');
        $extension_app = $app->getClientOriginalExtension();
        Storage::disk('public')->put($app->getFilename().'.'.$extension_app,  File::get($app));
        
        $siup = $req->file('siup');
        $extension_siup = $siup->getClientOriginalExtension();
        Storage::disk('public')->put($siup->getFilename().'.'.$extension_siup,  File::get($siup));
        
        $nib = $req->file('nib');
        $extension_nib = $nib->getClientOriginalExtension();
        Storage::disk('public')->put($nib->getFilename().'.'.$extension_nib,  File::get($nib));

        $simp = $req->file('ijin_mabes_polri');
        $extension_simp = $simp->getClientOriginalExtension();
        Storage::disk('public')->put($simp->getFilename().'.'.$extension_simp,  File::get($simp));

        DB::table('tbl_pendaftaran_bujp')->insert(
            [
                'nama_perusahaan' => $req->nama_perusahaan,
                'alamat_kantor' => $req->alamat_kantor,
                'penanggung_jawab' => $req->penanggung_jawab,
                'jabatan' => $req->jabatan,
                'jml_gada_pratama'=>$req->gada_pratama,
                'jml_gada_madya'=>$req->gada_madya,
                'jml_gada_utama'=>$req->gada_utama,
                'app'=>$app->getFilename().'.'.$extension_app,
                'app_mime'=>$app->getClientMimeType(),
                'app_original_file_name'=>$app->getClientOriginalName(),
                'siup'=>$siup->getFilename().'.'.$extension_siup,
                'siup_mime'=>$siup->getClientMimeType(),
                'siup_original_file_name'=>$siup->getClientOriginalName(),
                'nib'=>$nib->getFilename().'.'.$extension_nib,
                'nib_mime'=>$nib->getClientMimeType(),
                'nib_original_file_name'=>$nib->getClientOriginalName(),
                'simp'=>$simp->getFilename().'.'.$extension_simp,
                'simp_mime'=>$simp->getClientMimeType(),
                'simp_original_file_name'=>$simp->getClientOriginalName()
            ]
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
