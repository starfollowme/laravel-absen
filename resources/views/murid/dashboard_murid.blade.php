

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Murid</title>
  <link rel="stylesheet" href="/globals.css" />
  <link rel="stylesheet" href="/style.css" />
</head>
<body>
  <div class="container" style="max-width:412px;margin:auto;background:#fff;min-height:100vh;box-shadow:0 0 8px #eee;">
    <!-- Top Bar -->
    <div style="background:#508eeb;padding:12px 16px;display:flex;align-items:center;justify-content:space-between;">
      <div style="display:flex;align-items:center;gap:8px;">
        <button style="background:none;border:none;padding:0;margin-right:8px;"><img src="/img/logo11.png" alt="Menu" style="width:28px;height:28px;"></button>
        <span style="color:#fff;font-weight:600;font-size:18px;">e-Absen Sebelas</span>
      </div>
      <img src="/img/logo11.png" alt="Logo" style="width:40px;height:40px;border-radius:8px;box-shadow:0 2px 8px #0002;">
    </div>

    <!-- Main Content -->
    <div style="padding:16px;">
      <h2 style="font-size:22px;font-weight:600;color:#222;margin-bottom:12px;">Selamat Datang !</h2>
      <div style="display:flex;gap:16px;align-items:center;justify-content:center;margin-bottom:16px;">
        <div style="background:#e3f0ff;border-radius:16px;padding:0 0 0 12px;box-shadow:0 2px 8px #0001;display:flex;align-items:center;justify-content:center;width:90px;height:120px;margin-right:-24px;z-index:1;">
          <img src="/img/foto-murid.png" alt="Foto Murid" style="width:60px;height:60px;border-radius:50%;object-fit:cover;box-shadow:0 2px 8px #0001;">
        </div>
        <div style="background:#f5f7fa;border-radius:12px;padding:12px 18px;box-shadow:0 2px 8px #0001;min-width:220px;max-width:240px;position:relative;z-index:2;">
          <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
            <img src="/img/logo-sekolah.png" alt="Logo" style="width:28px;height:28px;">
            <div>
              <div style="font-size:10px;color:#222;font-weight:600;">PEMERINTAH PROVINSI JAWA BARAT</div>
              <div style="font-size:13px;color:#222;font-weight:700;">SMK NEGERI 11 BANDUNG</div>
              <div style="font-size:8px;color:#444;">Bisnis Manajemen - Teknologi Informasi - Seni dan Ekonomi Kreatif</div>
            </div>
          </div>
          <hr style="margin:6px 0;">
          <div style="font-size:12px;font-weight:700;margin-bottom:6px;">MUHAMMAD ANDRA MAULANA</div>
          <div style="display:grid;grid-template-columns:90px 1fr;gap:2px 8px;font-size:10px;">
            <div>NIS/NISN</div><div>: 0000000000000000</div>
            <div>Tempat / Tgl.Lahir</div><div>: Bandung, 23-03-2008</div>
            <div>Jenis Kelamin</div><div>: Laki-laki</div>
            <div>Alamat</div><div>: Jl. Bomber Barat No. 23 RT.03/29,<br>Melong, Cimahi Selatan</div>
            <div>Program Keahlian</div><div>: PPLG - RPL</div>
            <div>Tahun Masuk</div><div>: 2023</div>
          </div>
        </div>
      </div>
      <!-- Bagian dobel dihapus, hanya satu set yang tampil -->
      <div style="width:100%;display:flex;justify-content:center;margin-bottom:16px;">
        <div style="background:#e53935;color:#fff;font-weight:600;font-size:18px;padding:10px 0;border-radius:8px;width:100%;max-width:320px;box-shadow:0 2px 8px #0002;text-align:center;">Status: Belum Absen</div>
      </div>
      <div style="text-align:center;color:#222;margin-bottom:12px;">Segera Absen dengan QR Code dibawah ini!</div>
      <div style="display:flex;justify-content:center;margin-bottom:20px;">
        <img src="/img/qr.png" alt="QR Code" style="width:180px;height:180px;border-radius:16px;box-shadow:0 2px 8px #0001;">
      </div>
      <div style="font-size:18px;font-weight:600;color:#222;margin-bottom:12px;">Rekap Bulan</div>
      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:10px;">
        <div style="background:#e3f0ff;border-radius:12px;padding:12px 0;text-align:center;box-shadow:0 2px 8px #0001;">
          <img src="/img/hadir.svg" alt="Hadir" style="width:32px;height:32px;margin-bottom:4px;">
          <div style="font-size:13px;font-weight:600;color:#222;">Hadir</div>
          <div style="font-size:20px;font-weight:700;color:#508eeb;">10</div>
          <div style="font-size:13px;color:#222;">Hari</div>
        </div>
        <div style="background:#e3f0ff;border-radius:12px;padding:12px 0;text-align:center;box-shadow:0 2px 8px #0001;">
          <img src="/img/izin.svg" alt="Izin" style="width:32px;height:32px;margin-bottom:4px;">
          <div style="font-size:13px;font-weight:600;color:#222;">Izin</div>
          <div style="font-size:20px;font-weight:700;color:#508eeb;">3</div>
          <div style="font-size:13px;color:#222;">Hari</div>
        </div>
        <div style="background:#e3f0ff;border-radius:12px;padding:12px 0;text-align:center;box-shadow:0 2px 8px #0001;">
          <img src="/img/sakit.svg" alt="Sakit" style="width:32px;height:32px;margin-bottom:4px;">
          <div style="font-size:13px;font-weight:600;color:#222;">Sakit</div>
          <div style="font-size:20px;font-weight:700;color:#508eeb;">1</div>
          <div style="font-size:13px;color:#222;">Hari</div>
        </div>
        <div style="background:#e3f0ff;border-radius:12px;padding:12px 0;text-align:center;box-shadow:0 2px 8px #0001;">
          <img src="/img/alpa.svg" alt="Alpa" style="width:32px;height:32px;margin-bottom:4px;">
          <div style="font-size:13px;font-weight:600;color:#222;">Alpa</div>
          <div style="font-size:20px;font-weight:700;color:#508eeb;">-</div>
          <div style="font-size:13px;color:#222;">Hari</div>
        </div>
      </div>
    </div>

    <!-- Bottom Navigation -->
    <div style="background:#fff;border-top:1px solid #f0f2f5;padding:10px 0;display:flex;justify-content:space-around;align-items:center;position:sticky;bottom:0;">
      <div style="text-align:center;color:#508eeb;font-size:12px;">
        <img src="/img/home.svg" alt="Home" style="width:24px;height:24px;">
        <div>Beranda</div>
      </div>
      <div style="text-align:center;color:#61788a;font-size:12px;">
        <img src="/img/profile.svg" alt="Profil" style="width:24px;height:24px;">
        <div>Profil</div>
      </div>
    </div>
  </div>
</body>
</html>