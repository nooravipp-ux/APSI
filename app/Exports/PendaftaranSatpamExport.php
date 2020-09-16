<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class PendaftaranSatpamExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data_pendaftaran_satpam = DB::table('tbl_pendaftaran_satpam')
                                ->select('tgl_pendaftaran','nama_perusahaan','nama','tanggal_lahir','alamat_kantor','telepon','email','jabatan','status')   
                                ->get();
        return $data_pendaftaran_satpam;
    }
    public function headings(): array
    {
        return [
            'Tanggal Pendaftaran',
            'Nama Perusahaan',
            'Nama Pendaftar',
            'Tanggal Lahir',
            'Alamat Kantor',
            'No Telp',
            'Email',
            'Jabatan',
            'Status'
        ];
    }
}
