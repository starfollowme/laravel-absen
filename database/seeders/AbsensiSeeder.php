<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AbsensiSeeder extends Seeder
{
    public function run(): void
    {
        $absensiData = [];
        $today = Carbon::now();


        for ($i = 0; $i < 30; $i++) {
            $tanggal = $today->copy()->subDays($i);


            if ($tanggal->isWeekend()) {
                continue;
            }


            $sampleNIS = [
                '2306510490',
                '2306510491',
                '2306510492',
                '2306510493',
                '2306510494',
                '2306510495',
                '2306510496',
                '2306510498',
                '2306510499',
                '2306510500',
                '2306510501',
                '2306510502',
                '2306510503',
                '2306510504',
                '2306510505',
                '2306510506',
                '2306510507',
                '2306510508',
                '2306510509',
                '2306510510'
            ];


            $nipGuru = [
                '196501011990031001', // Super Admin
                '197203051995122001', // Guru
                '198005101998032002', // Guru
                '198712152010122003', // Walikelas
                '199002201012122004', // Walikelas
                '198508181998032005'  // Kesiswaan
            ];

            foreach ($sampleNIS as $index => $nis) {
                // Random status absensi
                $statusOptions = ['Hadir', 'Sakit', 'Izin', 'Alpha'];
                $status = $statusOptions[array_rand($statusOptions)];

                // Random jam datang (07:00 - 07:30 untuk hadir, null untuk lainnya)
                $jamDatang = null;
                $keterangan = null;

                if ($status === 'Hadir') {
                    $jamDatang = '07:' . str_pad(rand(0, 30), 2, '0', STR_PAD_LEFT) . ':00';
                } elseif ($status === 'Sakit') {
                    $keterangan = 'Sakit demam';
                } elseif ($status === 'Izin') {
                    $keterangan = 'Keperluan keluarga';
                } else {
                    $keterangan = 'Tanpa keterangan';
                }

                $absensiData[] = [
                    'Kode_Absensi' => 'ABS' . $tanggal->format('Ymd') . str_pad($index + 1, 3, '0', STR_PAD_LEFT),
                    'Tanggal' => $tanggal->format('Y-m-d'),
                    'JamDatang' => $jamDatang ?: '00:00:00',
                    'StatusAbsensi' => $status,
                    'Keterangan' => $keterangan,
                    'NIP' => $nipGuru[array_rand($nipGuru)],
                    'NIS' => $nis
                ];
            }
        }

        DB::table('absensi')->insert($absensiData);
    }
}
