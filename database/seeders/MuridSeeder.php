<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuridSeeder extends Seeder
{
    public function run(): void
    {
        $kelasMap = DB::table('kelas')->pluck('KelasID', 'KelasID')->toArray();
        
        $muridXIIRPL = [
            // 5
            ['NIS' => '2306510493', 'Nama' => 'ANDRI DWI SOMANTRI', 'TanggalLahir' => '2006-01-15', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510496', 'Nama' => 'BAGAS DIWU PUTRA', 'TanggalLahir' => '2006-03-20', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510500', 'Nama' => 'DAFA ATA UL GHALIB', 'TanggalLahir' => '2006-05-10', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510501', 'Nama' => 'DIAZ KARTIKA ELL YANASARI', 'TanggalLahir' => '2006-07-25', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510502', 'Nama' => 'DICKSTRA KHALIL INZAGHI', 'TanggalLahir' => '2006-02-14', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510507', 'Nama' => 'FADLY ARIAN SASTRA JAYA AMANCA', 'TanggalLahir' => '2006-04-18', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510510', 'Nama' => 'FERRARI PRAYOGA SETIYAWAN', 'TanggalLahir' => '2006-06-30', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510511', 'Nama' => 'FRANSISKA MARTINES', 'TanggalLahir' => '2006-08-12', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510512', 'Nama' => 'ILYAS FACHRUL NIZWAN', 'TanggalLahir' => '2006-09-05', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510513', 'Nama' => 'INDRA JAYA PERMANA', 'TanggalLahir' => '2006-11-20', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510514', 'Nama' => 'IRHAN ACHMAD JANITRA', 'TanggalLahir' => '2006-12-08', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510515', 'Nama' => 'IRMA LISTIYA WARDHANI', 'TanggalLahir' => '2006-01-30', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510517', 'Nama' => 'KEY THEOLA DIPA PRATAMA', 'TanggalLahir' => '2006-03-15', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510518', 'Nama' => 'LAYLA NURHIDAYATI SUHERMAN', 'TanggalLahir' => '2006-05-22', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510519', 'Nama' => 'MAURA BUNGA AL ZENA', 'TanggalLahir' => '2006-07-10', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510521', 'Nama' => 'MOCHAMMAD LUTFI ABDUL AZIZ', 'TanggalLahir' => '2006-09-18', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510524', 'Nama' => 'MUHAMAD ARIEF FAHRIZAL', 'TanggalLahir' => '2006-11-03', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510525', 'Nama' => 'MUHAMAD AZKA AR RIZKY', 'TanggalLahir' => '2006-12-25', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510526', 'Nama' => 'MUHAMAD RIANSAN', 'TanggalLahir' => '2006-02-28', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510528', 'Nama' => 'MUHAMAD AL-KAHFI SATRIA DWIPA', 'TanggalLahir' => '2006-04-16', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510530', 'Nama' => 'MUHAMMAD ARSYAL AL-MALIK', 'TanggalLahir' => '2006-06-12', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510531', 'Nama' => 'MUHAMMAD FAHRI RAMADHAN', 'TanggalLahir' => '2006-08-07', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510534', 'Nama' => 'MUHAMMAD RASYA RIZKI RAMDHAN', 'TanggalLahir' => '2006-10-21', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510540', 'Nama' => 'NAUFAL FAUZAN NUGRAHA', 'TanggalLahir' => '2006-12-14', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510545', 'Nama' => 'RAUFA UMMUHANI', 'TanggalLahir' => '2006-01-25', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510546', 'Nama' => 'RAYFAN SATRIA PUTRA GURNING', 'TanggalLahir' => '2006-03-11', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510549', 'Nama' => 'RENO SUSANTO', 'TanggalLahir' => '2006-05-08', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510550', 'Nama' => 'REVALDY DWI DESVIANTO', 'TanggalLahir' => '2006-07-19', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510552', 'Nama' => 'RICHARD NIXON', 'TanggalLahir' => '2006-09-26', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510553', 'Nama' => 'RIZKY ALFATH HUMAEDI', 'TanggalLahir' => '2006-11-13', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510554', 'Nama' => 'RIZKY ALIANDI SOPIAN', 'TanggalLahir' => '2006-12-30', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510555', 'Nama' => 'SANDI RAHMAN', 'TanggalLahir' => '2006-02-17', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510556', 'Nama' => 'SHERMY DIHYA KHUMAIRAH AFFANDI', 'TanggalLahir' => '2006-04-04', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510557', 'Nama' => 'SIFA NUR AGNIA', 'TanggalLahir' => '2006-06-21', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510559', 'Nama' => 'SUWAZ JAHIDAH ASH SHAFFA', 'TanggalLahir' => '2006-08-28', 'KelasID' => '5', 'Gambar' => null],
            ['NIS' => '2306510560', 'Nama' => 'SYAHLEVI IZZA MAHENDRA', 'TanggalLahir' => '2006-10-15', 'KelasID' => '5', 'Gambar' => null],

            // 6
            ['NIS' => '2306510490', 'Nama' => 'ABIJALU ANGGA PUTRA', 'TanggalLahir' => '2006-01-08', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510491', 'Nama' => 'AHMAD LUTFI KHAIRUL KHAIR', 'TanggalLahir' => '2006-03-14', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510492', 'Nama' => 'AKHDAN DWI RAMADHAN MAMBRAKU', 'TanggalLahir' => '2006-05-27', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510494', 'Nama' => 'ANDRIANA SYAHPUTRA', 'TanggalLahir' => '2006-07-09', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510495', 'Nama' => 'ARGA TEJA ALMUGHNI', 'TanggalLahir' => '2006-09-16', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510498', 'Nama' => 'BAYU RESNADI', 'TanggalLahir' => '2006-11-23', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510499', 'Nama' => 'CARIN ZULEYKA', 'TanggalLahir' => '2006-12-11', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510503', 'Nama' => 'DWI NUR ALIFA', 'TanggalLahir' => '2006-02-05', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510504', 'Nama' => 'EKA ADITYA RACHMAT', 'TanggalLahir' => '2006-04-22', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510505', 'Nama' => 'EVI RESTIYANI', 'TanggalLahir' => '2006-06-18', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510506', 'Nama' => 'FABIAN VARGA ADITYA', 'TanggalLahir' => '2006-08-03', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510508', 'Nama' => 'FAJAR SIDIQ', 'TanggalLahir' => '2006-10-12', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510509', 'Nama' => 'FARREL LURI ARIESTA', 'TanggalLahir' => '2006-12-29', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510516', 'Nama' => 'KEISHA AQILAH PUTRI FELLIA', 'TanggalLahir' => '2006-01-24', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510520', 'Nama' => 'MOCHAMAD AKMAL ZAINS', 'TanggalLahir' => '2006-03-07', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510522', 'Nama' => 'MOSSES ARYO BIMO', 'TanggalLahir' => '2006-05-13', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510523', 'Nama' => 'MUHAMMAD ADIL BADILLAH', 'TanggalLahir' => '2006-07-31', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510527', 'Nama' => 'MUHAMMAD RIPKI', 'TanggalLahir' => '2006-09-08', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510529', 'Nama' => 'MUHAMMAD ANDRA MAULANA', 'TanggalLahir' => '2006-11-15', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510532', 'Nama' => 'MUHAMMAD IRHAM BACHTIAR', 'TanggalLahir' => '2006-01-02', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510533', 'Nama' => 'MUHAMMAD NADHIP RAHMATILAH', 'TanggalLahir' => '2006-03-19', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510535', 'Nama' => 'MUHAMMAD RIZKY ALAMSYAH', 'TanggalLahir' => '2006-05-26', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510536', 'Nama' => 'MUHAMMAD SULAEMAN', 'TanggalLahir' => '2006-07-14', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510537', 'Nama' => 'MUHAMMAD TAUFIK RIAYADI', 'TanggalLahir' => '2006-09-21', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510538', 'Nama' => 'NABIL FAUZI NASRULLOH', 'TanggalLahir' => '2006-11-06', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510539', 'Nama' => 'NABILLA DEWI ARIATI', 'TanggalLahir' => '2006-12-24', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510541', 'Nama' => 'NOVI AULIA', 'TanggalLahir' => '2006-02-11', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510542', 'Nama' => 'NUR MAHENDRA SETIABUDI', 'TanggalLahir' => '2006-04-28', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510543', 'Nama' => 'ODZA INZAGHI MASRI', 'TanggalLahir' => '2006-06-15', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510544', 'Nama' => 'PUTRA NUGRAHA', 'TanggalLahir' => '2006-08-02', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510547', 'Nama' => 'REGIEL RADIT SETIAWAN', 'TanggalLahir' => '2006-10-19', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510548', 'Nama' => 'REGINA BUNGA PRATIWI', 'TanggalLahir' => '2006-12-06', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510551', 'Nama' => 'RIANI DESTIANTI', 'TanggalLahir' => '2006-01-23', 'KelasID' => '6', 'Gambar' => null],
            ['NIS' => '2306510558', 'Nama' => 'SITI DIYAH WULANDARI', 'TanggalLahir' => '2006-03-10', 'KelasID' => '6', 'Gambar' => null]
        ];

    $insertData = [];

            foreach ($muridXIIRPL as $m) {
                if (!isset($kelasMap[$m['KelasID']])) {
                    throw new \Exception("Kelas '{$m['KelasID']}' tidak ditemukan di tabel kelas.");
                }

                $insertData[] = [
                    'NIS' => $m['NIS'],
                    'Nama' => $m['Nama'],
                    'TanggalLahir' => $m['TanggalLahir'],
                    'KelasID' => $m['KelasID'],
                    'Gambar' => $m['Gambar'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            DB::table('murid')->insert($insertData);
        }
}