<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Carbon\Carbon;

class LaporanExport implements FromCollection, WithHeadings
{
    protected $tanggalMulai;
    protected $tanggalAkhir;

    public function __construct($tanggalMulai, $tanggalAkhir)
    {
        $this->tanggalMulai = $tanggalMulai;
        $this->tanggalAkhir = $tanggalAkhir;
    }

    public function collection()
    {
        return DB::table('absensi')
            ->join('murid', 'absensi.murid_id', '=', 'murid.id')
            ->join('kelas', 'murid.kelas_id', '=', 'kelas.id')
            ->select(
                'absensi.tanggal',
                'murid.nis',
                'murid.nama as nama_murid',
                'kelas.nama_kelas',
                'absensi.status'
            )
            ->whereBetween('absensi.tanggal', [$this->tanggalMulai, $this->tanggalAkhir])
            ->orderBy('absensi.tanggal', 'desc')
            ->orderBy('kelas.nama_kelas', 'asc')
            ->orderBy('murid.nama', 'asc')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'NIS',
            'Nama Murid',
            'Kelas',
            'Status Kehadiran'
        ];
    }
}
