<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuridSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil data kelas untuk mapping nama kelas ke ID
        $kelasMap = DB::table('kelas')->pluck('id', 'nama_kelas');

        $muridData = [
            ['nis' => '2306510493', 'nama' => 'ANDRI DWI SOMANTRI', 'tanggal_lahir' => '2006-01-15', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510496', 'nama' => 'BAGAS DIWU PUTRA', 'tanggal_lahir' => '2006-03-20', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510500', 'nama' => 'DAFA ATA UL GHALIB', 'tanggal_lahir' => '2006-05-10', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510501', 'nama' => 'DIAZ KARTIKA ELL YANASARI', 'tanggal_lahir' => '2006-07-25', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510502', 'nama' => 'DICKSTRA KHALIL INZAGHI', 'tanggal_lahir' => '2006-02-14', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510507', 'nama' => 'FADLY ARIAN SASTRA JAYA AMANCA', 'tanggal_lahir' => '2006-04-18', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510510', 'nama' => 'FERRARI PRAYOGA SETIYAWAN', 'tanggal_lahir' => '2006-06-30', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510511', 'nama' => 'FRANSISKA MARTINES', 'tanggal_lahir' => '2006-08-12', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510512', 'nama' => 'ILYAS FACHRUL NIZWAN', 'tanggal_lahir' => '2006-09-05', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510513', 'nama' => 'INDRA JAYA PERMANA', 'tanggal_lahir' => '2006-11-20', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510514', 'nama' => 'IRHAN ACHMAD JANITRA', 'tanggal_lahir' => '2006-12-08', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510515', 'nama' => 'IRMA LISTIYA WARDHANI', 'tanggal_lahir' => '2006-01-30', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510517', 'nama' => 'KEY THEOLA DIPA PRATAMA', 'tanggal_lahir' => '2006-03-15', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510518', 'nama' => 'LAYLA NURHIDAYATI SUHERMAN', 'tanggal_lahir' => '2006-05-22', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510519', 'nama' => 'MAURA BUNGA AL ZENA', 'tanggal_lahir' => '2006-07-10', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510521', 'nama' => 'MOCHAMMAD LUTFI ABDUL AZIZ', 'tanggal_lahir' => '2006-09-18', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510524', 'nama' => 'MUHAMAD ARIEF FAHRIZAL', 'tanggal_lahir' => '2006-11-03', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510525', 'nama' => 'MUHAMAD AZKA AR RIZKY', 'tanggal_lahir' => '2006-12-25', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510526', 'nama' => 'MUHAMAD RIANSAN', 'tanggal_lahir' => '2006-02-28', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510528', 'nama' => 'MUHAMAD AL-KAHFI SATRIA DWIPA', 'tanggal_lahir' => '2006-04-16', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510530', 'nama' => 'MUHAMMAD ARSYAL AL-MALIK', 'tanggal_lahir' => '2006-06-12', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510531', 'nama' => 'MUHAMMAD FAHRI RAMADHAN', 'tanggal_lahir' => '2006-08-07', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510534', 'nama' => 'MUHAMMAD RASYA RIZKI RAMDHAN', 'tanggal_lahir' => '2006-10-21', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510540', 'nama' => 'NAUFAL FAUZAN NUGRAHA', 'tanggal_lahir' => '2006-12-14', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510545', 'nama' => 'RAUFA UMMUHANI', 'tanggal_lahir' => '2006-01-25', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510546', 'nama' => 'RAYFAN SATRIA PUTRA GURNING', 'tanggal_lahir' => '2006-03-11', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510549', 'nama' => 'RENO SUSANTO', 'tanggal_lahir' => '2006-05-08', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510550', 'nama' => 'REVALDY DWI DESVIANTO', 'tanggal_lahir' => '2006-07-19', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510552', 'nama' => 'RICHARD NIXON', 'tanggal_lahir' => '2006-09-26', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510553', 'nama' => 'RIZKY ALFATH HUMAEDI', 'tanggal_lahir' => '2006-11-13', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510554', 'nama' => 'RIZKY ALIANDI SOPIAN', 'tanggal_lahir' => '2006-12-30', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510555', 'nama' => 'SANDI RAHMAN', 'tanggal_lahir' => '2006-02-17', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510556', 'nama' => 'SHERMY DIHYA KHUMAIRAH AFFANDI', 'tanggal_lahir' => '2006-04-04', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510557', 'nama' => 'SIFA NUR AGNIA', 'tanggal_lahir' => '2006-06-21', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510559', 'nama' => 'SUWAZ JAHIDAH ASH SHAFFA', 'tanggal_lahir' => '2006-08-28', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510560', 'nama' => 'SYAHLEVI IZZA MAHENDRA', 'tanggal_lahir' => '2006-10-15', 'nama_kelas' => 'XII RPL 1'],
            ['nis' => '2306510490', 'nama' => 'ABIJALU ANGGA PUTRA', 'tanggal_lahir' => '2006-01-08', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510491', 'nama' => 'AHMAD LUTFI KHAIRUL KHAIR', 'tanggal_lahir' => '2006-03-14', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510492', 'nama' => 'AKHDAN DWI RAMADHAN MAMBRAKU', 'tanggal_lahir' => '2006-05-27', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510494', 'nama' => 'ANDRIANA SYAHPUTRA', 'tanggal_lahir' => '2006-07-09', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510495', 'nama' => 'ARGA TEJA ALMUGHNI', 'tanggal_lahir' => '2006-09-16', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510498', 'nama' => 'BAYU RESNADI', 'tanggal_lahir' => '2006-11-23', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510499', 'nama' => 'CARIN ZULEYKA', 'tanggal_lahir' => '2006-12-11', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510503', 'nama' => 'DWI NUR ALIFA', 'tanggal_lahir' => '2006-02-05', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510504', 'nama' => 'EKA ADITYA RACHMAT', 'tanggal_lahir' => '2006-04-22', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510505', 'nama' => 'EVI RESTIYANI', 'tanggal_lahir' => '2006-06-18', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510506', 'nama' => 'FABIAN VARGA ADITYA', 'tanggal_lahir' => '2006-08-03', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510508', 'nama' => 'FAJAR SIDIQ', 'tanggal_lahir' => '2006-10-12', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510509', 'nama' => 'FARREL LURI ARIESTA', 'tanggal_lahir' => '2006-12-29', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510516', 'nama' => 'KEISHA AQILAH PUTRI FELLIA', 'tanggal_lahir' => '2006-01-24', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510520', 'nama' => 'MOCHAMAD AKMAL ZAINS', 'tanggal_lahir' => '2006-03-07', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510522', 'nama' => 'MOSSES ARYO BIMO', 'tanggal_lahir' => '2006-05-13', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510523', 'nama' => 'MUHAMMAD ADIL BADILLAH', 'tanggal_lahir' => '2006-07-31', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510527', 'nama' => 'MUHAMMAD RIPKI', 'tanggal_lahir' => '2006-09-08', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510529', 'nama' => 'MUHAMMAD ANDRA MAULANA', 'tanggal_lahir' => '2006-11-15', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510532', 'nama' => 'MUHAMMAD IRHAM BACHTIAR', 'tanggal_lahir' => '2006-01-02', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510533', 'nama' => 'MUHAMMAD NADHIP RAHMATILAH', 'tanggal_lahir' => '2006-03-19', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510535', 'nama' => 'MUHAMMAD RIZKY ALAMSYAH', 'tanggal_lahir' => '2006-05-26', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510536', 'nama' => 'MUHAMMAD SULAEMAN', 'tanggal_lahir' => '2006-07-14', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510537', 'nama' => 'MUHAMMAD TAUFIK RIAYADI', 'tanggal_lahir' => '2006-09-21', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510538', 'nama' => 'NABIL FAUZI NASRULLOH', 'tanggal_lahir' => '2006-11-06', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510539', 'nama' => 'NABILLA DEWI ARIATI', 'tanggal_lahir' => '2006-12-24', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510541', 'nama' => 'NOVI AULIA', 'tanggal_lahir' => '2006-02-11', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510542', 'nama' => 'NUR MAHENDRA SETIABUDI', 'tanggal_lahir' => '2006-04-28', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510543', 'nama' => 'ODZA INZAGHI MASRI', 'tanggal_lahir' => '2006-06-15', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510544', 'nama' => 'PUTRA NUGRAHA', 'tanggal_lahir' => '2006-08-02', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510547', 'nama' => 'REGIEL RADIT SETIAWAN', 'tanggal_lahir' => '2006-10-19', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510548', 'nama' => 'REGINA BUNGA PRATIWI', 'tanggal_lahir' => '2006-12-06', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510551', 'nama' => 'RIANI DESTIANTI', 'tanggal_lahir' => '2006-01-23', 'nama_kelas' => 'XII RPL 2'],
            ['nis' => '2306510558', 'nama' => 'SITI DIYAH WULANDARI', 'tanggal_lahir' => '2006-03-10', 'nama_kelas' => 'XII RPL 2'],
        ];

        foreach ($muridData as $m) {
            $kelasId = $kelasMap[$m['nama_kelas']] ?? null;

            if ($kelasId) {
                DB::table('murid')->updateOrInsert(
                    ['nis' => $m['nis']], // Kunci unik
                    [
                        'nama' => $m['nama'],
                        'tanggal_lahir' => $m['tanggal_lahir'],
                        'kelas_id' => $kelasId, // Menggunakan ID kelas yang ditemukan
                        'gambar' => null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}