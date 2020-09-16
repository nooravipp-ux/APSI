<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class PendaftaranBUJPExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data_pendaftaran_bujp = DB::table('tbl_pendaftaran_bujp')
                                ->select('tgl_pendaftaran','nama_perusahaan','alamat_kantor','penanggung_jawab','jml_gada_pratama','jml_gada_madya','jml_gada_utama','status')   
                                ->get();
        return $data_pendaftaran_bujp;
    }
    public function headings(): array
    {
        return [
            'Tanggal Pendaftaran',
            'Nama Perusahaan',
            'Alamat Kantor',
            'Penanggung_jawab',
            'Gada Pratama',
            'Gada Madya',
            'Gada Utama',
            'Status'
        ];
    }
}
