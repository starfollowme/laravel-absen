<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User; // Diasumsikan model User ada
use App\Models\Murid; // Diasumsikan model Murid ada

class AbsensiSeeder extends Seeder
{
    /**
     * Catatan: Pastikan UserSeeder dan MuridSeeder sudah dijalankan sebelumnya
     * agar data NIP guru dan NIS murid tersedia di database.
     */
    public function run(): void
    {
        $absensiData = [];
        $today = Carbon::now();

        // Ambil data murid dan user untuk dicocokkan (lebih efisien)
        $muridNisMap = Murid::pluck('id', 'nis')->all();
        $userNipMap = User::pluck('id', 'nip')->all();

        $sampleNIS = array_keys($muridNisMap);
        $nipGuru = array_keys($userNipMap);

        // Jika data user/murid kosong, hentikan seeder
        if (empty($sampleNIS) || empty($nipGuru)) {
            $this->command->info('Tidak ada data Murid atau User. Lewati AbsensiSeeder.');
            return;
        }

        for ($i = 0; $i < 30; $i++) {
            $tanggal = $today->copy()->subDays($i);

            if ($tanggal->isWeekend()) {
                continue;
            }

            foreach ($sampleNIS as $nis) {
                $statusOptions = ['Hadir', 'Sakit', 'Izin', 'Alpha'];
                $status = $statusOptions[array_rand($statusOptions)];

                $jamDatang = null;
                $keterangan = null;

                if ($status === 'Hadir') {
                    $hour = '07';
                    $minute = rand(0, 30);
                    if ($minute > 15) { // Contoh logika untuk terlambat
                        $status = 'Terlambat';
                    }
                    $jamDatang = $hour . ':' . str_pad($minute, 2, '0', STR_PAD_LEFT) . ':00';
                } elseif ($status === 'Sakit') {
                    $keterangan = 'Sakit demam';
                } elseif ($status === 'Izin') {
                    $keterangan = 'Keperluan keluarga';
                } else { // Alpha
                    $keterangan = 'Tanpa keterangan';
                }

                // Ambil id dari map yang sudah dibuat
                $muridId = $muridNisMap[$nis];
                $userId = $userNipMap[$nipGuru[array_rand($nipGuru)]];

                $absensiData[] = [
                    'murid_id' => $muridId,
                    'user_id' => $userId,
                    'tanggal' => $tanggal->format('Y-m-d'),
                    'jam_datang' => $jamDatang,
                    'status' => $status,
                    'keterangan' => $keterangan,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Insert data dalam batch untuk performa yang lebih baik
        DB::table('absensi')->insert($absensiData);
    }
}