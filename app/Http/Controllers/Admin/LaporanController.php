<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LaporanExport;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $tanggalMulai = $request->input('tanggal_mulai', Carbon::today()->toDateString());
        $tanggalAkhir = $request->input('tanggal_akhir', Carbon::today()->toDateString());

        $absensi = DB::table('absensi')
            ->join('murid', 'absensi.murid_id', '=', 'murid.id')
            ->join('kelas', 'murid.kelas_id', '=', 'kelas.id')
            ->select('absensi.*', 'murid.nama as nama_murid', 'murid.nis', 'kelas.nama_kelas')
            ->whereBetween('absensi.tanggal', [$tanggalMulai, $tanggalAkhir])
            ->orderBy('absensi.tanggal', 'desc')
            ->orderBy('kelas.nama_kelas', 'asc')
            ->orderBy('murid.nama', 'asc')
            ->paginate(20)
            ->appends([
                'tanggal_mulai' => $tanggalMulai,
                'tanggal_akhir' => $tanggalAkhir
            ]);

        return view('admin.laporan.index', compact('absensi', 'tanggalMulai', 'tanggalAkhir'));
    }

    public function export(Request $request)
    {
        $tanggalMulai = $request->input('tanggal_mulai', Carbon::today()->toDateString());
        $tanggalAkhir = $request->input('tanggal_akhir', Carbon::today()->toDateString());

        return Excel::download(new LaporanExport($tanggalMulai, $tanggalAkhir), 'laporan_absensi.xlsx');
    }
}
