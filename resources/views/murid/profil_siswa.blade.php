<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Siswa</title>
  <link rel="stylesheet" href="/globals.css" />
  <link rel="stylesheet" href="/style.css" />
</head>
<body style="background:#e3f0ff;">
  <div class="container" style="max-width:412px;margin:auto;background:none;min-height:100vh;">
    <!-- Top Bar -->
    <div style="background:#508eeb;padding:12px 0 0 0;">
      <div style="display:flex;align-items:center;gap:8px;padding:0 16px;">
        <button style="background:none;border:none;padding:0;margin-right:8px;"><img src="/img/arrow-left.svg" alt="Kembali" style="width:28px;height:28px;"></button>
        <span style="color:#fff;font-weight:600;font-size:18px;">Profil Siswa</span>
      </div>
    </div>

    <!-- Main Content -->
    <div style="padding:24px 0 0 0;">
      <div style="display:flex;flex-direction:column;align-items:center;">
        <div style="background:#fff;border-radius:50%;width:110px;height:110px;box-shadow:0 2px 8px #0001;display:flex;align-items:center;justify-content:center;margin-bottom:12px;">
          <img src="/img/profil_siswa.png" alt="Foto Siswa" style="width:100px;height:100px;border-radius:50%;object-fit:cover;">
        </div>
        <div style="font-size:20px;font-weight:700;color:#222;margin-bottom:2px;">Aulia Azzahra</div>
        <div style="font-size:15px;color:#508eeb;margin-bottom:2px;">NIS: 123456789</div>
        <div style="font-size:15px;color:#61788a;margin-bottom:18px;">Kelas: XII RPL 2</div>
      </div>
      <div style="font-size:16px;font-weight:600;color:#222;margin-bottom:10px;margin-top:18px;">Aksi Profil</div>
      <div style="display:flex;flex-direction:column;gap:12px;max-width:320px;margin:auto;">
        <div style="display:flex;align-items:center;gap:10px;background:#fff;border-radius:10px;padding:12px 14px;box-shadow:0 2px 8px #0001;cursor:pointer;">
          <img src="/img/password.svg" alt="Ubah Password" style="width:24px;height:24px;">
          <span style="font-size:15px;color:#222;">Ubah Password</span>
        </div>
        <div style="display:flex;align-items:center;gap:10px;background:#fff;border-radius:10px;padding:12px 14px;box-shadow:0 2px 8px #0001;cursor:pointer;">
          <img src="/img/notif.svg" alt="Notifikasi" style="width:24px;height:24px;">
          <span style="font-size:15px;color:#222;">Notifikasi</span>
        </div>
        <div style="display:flex;align-items:center;gap:10px;background:#fff;border-radius:10px;padding:12px 14px;box-shadow:0 2px 8px #0001;cursor:pointer;">
          <img src="/img/logout.svg" alt="Logout" style="width:24px;height:24px;">
          <span style="font-size:15px;color:#222;">Logout</span>
        </div>
      </div>
    </div>

    <!-- Bottom Navigation -->
    <div style="background:#fff;border-top:1px solid #f0f2f5;padding:10px 0 24px 0;display:flex;justify-content:space-around;align-items:center;position:sticky;bottom:0;max-width:412px;margin:auto;">
      <div style="text-align:center;color:#508eeb;font-size:12px;">
        <img src="/img/rumah.png" alt="Home" style="width:24px;height:24px;">
        <div>Beranda</div>
      </div>
      <div style="text-align:center;color:#61788a;font-size:12px;">
        <img src="/img/orng.png" alt="Profil" style="width:24px;height:24px;">
        <div>Profil</div>
      </div>
    </div>
  </div>
</body>
</html>
