<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuridSeeder extends Seeder
{
    public function run(): void
    {
        // Data murid yang sudah ada di database
        $muridXIIRPL = [
            // XII RPL 1
            ['NIS' => '2306510493', 'NamaMurid' => 'ANDRI DWI SOMANTRI', 'TanggalLahir' => '2006-01-15', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510496', 'NamaMurid' => 'BAGAS DIWU PUTRA', 'TanggalLahir' => '2006-03-20', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510500', 'NamaMurid' => 'DAFA ATA UL GHALIB', 'TanggalLahir' => '2006-05-10', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510501', 'NamaMurid' => 'DIAZ KARTIKA ELL YANASARI', 'TanggalLahir' => '2006-07-25', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510502', 'NamaMurid' => 'DICKSTRA KHALIL INZAGHI', 'TanggalLahir' => '2006-02-14', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510507', 'NamaMurid' => 'FADLY ARIAN SASTRA JAYA AMANCA', 'TanggalLahir' => '2006-04-18', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510510', 'NamaMurid' => 'FERRARI PRAYOGA SETIYAWAN', 'TanggalLahir' => '2006-06-30', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510511', 'NamaMurid' => 'FRANSISKA MARTINES', 'TanggalLahir' => '2006-08-12', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510512', 'NamaMurid' => 'ILYAS FACHRUL NIZWAN', 'TanggalLahir' => '2006-09-05', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510513', 'NamaMurid' => 'INDRA JAYA PERMANA', 'TanggalLahir' => '2006-11-20', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510514', 'NamaMurid' => 'IRHAN ACHMAD JANITRA', 'TanggalLahir' => '2006-12-08', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510515', 'NamaMurid' => 'IRMA LISTIYA WARDHANI', 'TanggalLahir' => '2006-01-30', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510517', 'NamaMurid' => 'KEY THEOLA DIPA PRATAMA', 'TanggalLahir' => '2006-03-15', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510518', 'NamaMurid' => 'LAYLA NURHIDAYATI SUHERMAN', 'TanggalLahir' => '2006-05-22', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510519', 'NamaMurid' => 'MAURA BUNGA AL ZENA', 'TanggalLahir' => '2006-07-10', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510521', 'NamaMurid' => 'MOCHAMMAD LUTFI ABDUL AZIZ', 'TanggalLahir' => '2006-09-18', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510524', 'NamaMurid' => 'MUHAMAD ARIEF FAHRIZAL', 'TanggalLahir' => '2006-11-03', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510525', 'NamaMurid' => 'MUHAMAD AZKA AR RIZKY', 'TanggalLahir' => '2006-12-25', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510526', 'NamaMurid' => 'MUHAMAD RIANSAN', 'TanggalLahir' => '2006-02-28', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510528', 'NamaMurid' => 'MUHAMAD AL-KAHFI SATRIA DWIPA', 'TanggalLahir' => '2006-04-16', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510530', 'NamaMurid' => 'MUHAMMAD ARSYAL AL-MALIK', 'TanggalLahir' => '2006-06-12', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510531', 'NamaMurid' => 'MUHAMMAD FAHRI RAMADHAN', 'TanggalLahir' => '2006-08-07', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510534', 'NamaMurid' => 'MUHAMMAD RASYA RIZKI RAMDHAN', 'TanggalLahir' => '2006-10-21', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510540', 'NamaMurid' => 'NAUFAL FAUZAN NUGRAHA', 'TanggalLahir' => '2006-12-14', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510545', 'NamaMurid' => 'RAUFA UMMUHANI', 'TanggalLahir' => '2006-01-25', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510546', 'NamaMurid' => 'RAYFAN SATRIA PUTRA GURNING', 'TanggalLahir' => '2006-03-11', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510549', 'NamaMurid' => 'RENO SUSANTO', 'TanggalLahir' => '2006-05-08', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510550', 'NamaMurid' => 'REVALDY DWI DESVIANTO', 'TanggalLahir' => '2006-07-19', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510552', 'NamaMurid' => 'RICHARD NIXON', 'TanggalLahir' => '2006-09-26', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510553', 'NamaMurid' => 'RIZKY ALFATH HUMAEDI', 'TanggalLahir' => '2006-11-13', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510554', 'NamaMurid' => 'RIZKY ALIANDI SOPIAN', 'TanggalLahir' => '2006-12-30', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510555', 'NamaMurid' => 'SANDI RAHMAN', 'TanggalLahir' => '2006-02-17', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510556', 'NamaMurid' => 'SHERMY DIHYA KHUMAIRAH AFFANDI', 'TanggalLahir' => '2006-04-04', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510557', 'NamaMurid' => 'SIFA NUR AGNIA', 'TanggalLahir' => '2006-06-21', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510559', 'NamaMurid' => 'SUWAZ JAHIDAH ASH SHAFFA', 'TanggalLahir' => '2006-08-28', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],
            ['NIS' => '2306510560', 'NamaMurid' => 'SYAHLEVI IZZA MAHENDRA', 'TanggalLahir' => '2006-10-15', 'NamaKelas' => 'XII RPL 1', 'Gambar' => null],

            // XII RPL 2
            ['NIS' => '2306510490', 'NamaMurid' => 'ABIJALU ANGGA PUTRA', 'TanggalLahir' => '2006-01-08', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510491', 'NamaMurid' => 'AHMAD LUTFI KHAIRUL KHAIR', 'TanggalLahir' => '2006-03-14', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510492', 'NamaMurid' => 'AKHDAN DWI RAMADHAN MAMBRAKU', 'TanggalLahir' => '2006-05-27', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510494', 'NamaMurid' => 'ANDRIANA SYAHPUTRA', 'TanggalLahir' => '2006-07-09', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510495', 'NamaMurid' => 'ARGA TEJA ALMUGHNI', 'TanggalLahir' => '2006-09-16', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510498', 'NamaMurid' => 'BAYU RESNADI', 'TanggalLahir' => '2006-11-23', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510499', 'NamaMurid' => 'CARIN ZULEYKA', 'TanggalLahir' => '2006-12-11', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510503', 'NamaMurid' => 'DWI NUR ALIFA', 'TanggalLahir' => '2006-02-05', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510504', 'NamaMurid' => 'EKA ADITYA RACHMAT', 'TanggalLahir' => '2006-04-22', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510505', 'NamaMurid' => 'EVI RESTIYANI', 'TanggalLahir' => '2006-06-18', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510506', 'NamaMurid' => 'FABIAN VARGA ADITYA', 'TanggalLahir' => '2006-08-03', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510508', 'NamaMurid' => 'FAJAR SIDIQ', 'TanggalLahir' => '2006-10-12', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510509', 'NamaMurid' => 'FARREL LURI ARIESTA', 'TanggalLahir' => '2006-12-29', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510516', 'NamaMurid' => 'KEISHA AQILAH PUTRI FELLIA', 'TanggalLahir' => '2006-01-24', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510520', 'NamaMurid' => 'MOCHAMAD AKMAL ZAINS', 'TanggalLahir' => '2006-03-07', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510522', 'NamaMurid' => 'MOSSES ARYO BIMO', 'TanggalLahir' => '2006-05-13', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510523', 'NamaMurid' => 'MUHAMMAD ADIL BADILLAH', 'TanggalLahir' => '2006-07-31', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510527', 'NamaMurid' => 'MUHAMMAD RIPKI', 'TanggalLahir' => '2006-09-08', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510529', 'NamaMurid' => 'MUHAMMAD ANDRA MAULANA', 'TanggalLahir' => '2006-11-15', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510532', 'NamaMurid' => 'MUHAMMAD IRHAM BACHTIAR', 'TanggalLahir' => '2006-01-02', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510533', 'NamaMurid' => 'MUHAMMAD NADHIP RAHMATILAH', 'TanggalLahir' => '2006-03-19', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510535', 'NamaMurid' => 'MUHAMMAD RIZKY ALAMSYAH', 'TanggalLahir' => '2006-05-26', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510536', 'NamaMurid' => 'MUHAMMAD SULAEMAN', 'TanggalLahir' => '2006-07-14', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510537', 'NamaMurid' => 'MUHAMMAD TAUFIK RIAYADI', 'TanggalLahir' => '2006-09-21', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510538', 'NamaMurid' => 'NABIL FAUZI NASRULLOH', 'TanggalLahir' => '2006-11-06', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510539', 'NamaMurid' => 'NABILLA DEWI ARIATI', 'TanggalLahir' => '2006-12-24', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510541', 'NamaMurid' => 'NOVI AULIA', 'TanggalLahir' => '2006-02-11', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510542', 'NamaMurid' => 'NUR MAHENDRA SETIABUDI', 'TanggalLahir' => '2006-04-28', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510543', 'NamaMurid' => 'ODZA INZAGHI MASRI', 'TanggalLahir' => '2006-06-15', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510544', 'NamaMurid' => 'PUTRA NUGRAHA', 'TanggalLahir' => '2006-08-02', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510547', 'NamaMurid' => 'REGIEL RADIT SETIAWAN', 'TanggalLahir' => '2006-10-19', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510548', 'NamaMurid' => 'REGINA BUNGA PRATIWI', 'TanggalLahir' => '2006-12-06', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510551', 'NamaMurid' => 'RIANI DESTIANTI', 'TanggalLahir' => '2006-01-23', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null],
            ['NIS' => '2306510558', 'NamaMurid' => 'SITI DIYAH WULANDARI', 'TanggalLahir' => '2006-03-10', 'NamaKelas' => 'XII RPL 2', 'Gambar' => null]
        ];

        // Data murid untuk kelas lain (contoh)
        $muridKelasLain = [
            // XI RPL 1
            ['NIS' => '2406510001', 'NamaMurid' => 'ANDI PRATAMA', 'TanggalLahir' => '2007-01-15', 'NamaKelas' => 'XI RPL 1', 'Gambar' => null],
            ['NIS' => '2406510002', 'NamaMurid' => 'BUDI SANTOSO', 'TanggalLahir' => '2007-02-20', 'NamaKelas' => 'XI RPL 1', 'Gambar' => null],
            ['NIS' => '2406510003', 'NamaMurid' => 'CITRA DEWI', 'TanggalLahir' => '2007-03-25', 'NamaKelas' => 'XI RPL 1', 'Gambar' => null],
            ['NIS' => '2406510004', 'NamaMurid' => 'DONI WIJAYA', 'TanggalLahir' => '2007-04-10', 'NamaKelas' => 'XI RPL 1', 'Gambar' => null],
            ['NIS' => '2406510005', 'NamaMurid' => 'EKA SARI', 'TanggalLahir' => '2007-05-18', 'NamaKelas' => 'XI RPL 1', 'Gambar' => null],

            // XI RPL 2
            ['NIS' => '2406510006', 'NamaMurid' => 'FAJAR NUGRAHA', 'TanggalLahir' => '2007-01-22', 'NamaKelas' => 'XI RPL 2', 'Gambar' => null],
            ['NIS' => '2406510007', 'NamaMurid' => 'GITA PERMATA', 'TanggalLahir' => '2007-02-28', 'NamaKelas' => 'XI RPL 2', 'Gambar' => null],
            ['NIS' => '2406510008', 'NamaMurid' => 'HADI SETIAWAN', 'TanggalLahir' => '2007-03-15', 'NamaKelas' => 'XI RPL 2', 'Gambar' => null],
            ['NIS' => '2406510009', 'NamaMurid' => 'IKA MAHARANI', 'TanggalLahir' => '2007-04-12', 'NamaKelas' => 'XI RPL 2', 'Gambar' => null],
            ['NIS' => '2406510010', 'NamaMurid' => 'JOKO SUSILO', 'TanggalLahir' => '2007-05-30', 'NamaKelas' => 'XI RPL 2', 'Gambar' => null],

            // X RPL 1
            ['NIS' => '2506510001', 'NamaMurid' => 'KEVIN ADRIANTO', 'TanggalLahir' => '2008-01-08', 'NamaKelas' => 'X RPL 1', 'Gambar' => null],
            ['NIS' => '2506510002', 'NamaMurid' => 'LILA SARI', 'TanggalLahir' => '2008-02-14', 'NamaKelas' => 'X RPL 1', 'Gambar' => null],
            ['NIS' => '2506510003', 'NamaMurid' => 'MARIO FERNANDES', 'TanggalLahir' => '2008-03-20', 'NamaKelas' => 'X RPL 1', 'Gambar' => null],
            ['NIS' => '2506510004', 'NamaMurid' => 'NINA KARTIKA', 'TanggalLahir' => '2008-04-26', 'NamaKelas' => 'X RPL 1', 'Gambar' => null],
            ['NIS' => '2506510005', 'NamaMurid' => 'OSCAR RAMADHAN', 'TanggalLahir' => '2008-05-15', 'NamaKelas' => 'X RPL 1', 'Gambar' => null],

            // X RPL 2
            ['NIS' => '2506510006', 'NamaMurid' => 'PUTRI AMANDA', 'TanggalLahir' => '2008-01-18', 'NamaKelas' => 'X RPL 2', 'Gambar' => null],
            ['NIS' => '2506510007', 'NamaMurid' => 'QORI ALAMSYAH', 'TanggalLahir' => '2008-02-24', 'NamaKelas' => 'X RPL 2', 'Gambar' => null],
            ['NIS' => '2506510008', 'NamaMurid' => 'RINA SUSANTI', 'TanggalLahir' => '2008-03-30', 'NamaKelas' => 'X RPL 2', 'Gambar' => null],
            ['NIS' => '2506510009', 'NamaMurid' => 'SANDI PRATAMA', 'TanggalLahir' => '2008-04-16', 'NamaKelas' => 'X RPL 2', 'Gambar' => null],
            ['NIS' => '2506510010', 'NamaMurid' => 'TARI WULANDARI', 'TanggalLahir' => '2008-05-22', 'NamaKelas' => 'X RPL 2', 'Gambar' => null]
        ];

        // Insert semua data murid
        DB::table('murid')->insert(array_merge($muridXIIRPL, $muridKelasLain));
    }
}