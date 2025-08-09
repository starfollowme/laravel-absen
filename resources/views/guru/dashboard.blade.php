<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Guru - e-Absen Sebelas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
      * { box-sizing: border-box; }
      html, body { margin: 0; height: 100%; font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
      a { text-decoration: none; }
      .container { max-width: 412px; margin: 0 auto; background-color: #ffffff; min-height: 100vh; position: relative; padding-bottom: 80px; }
      .header { padding: 16px; background-color: #508eeb; display: flex; justify-content: space-between; align-items: center; color: #fff; }
      .header-title { font-size: 16px; font-weight: 600; }
      .header-logo { width: 43px; height: 47px; object-fit: cover; }
      .content { padding: 24px 16px; }
      .greeting { font-size: 28px; font-weight: 600; color: #000; margin-bottom: 12px; }
      .date-info { font-size: 16px; color: #6c7474; margin-bottom: 24px; }
      .profile-card { background-color: #d1e1fb; border-radius: 7px; padding: 20px; display: flex; align-items: center; gap: 20px; margin-bottom: 32px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
      .profile-pic { width: 88px; height: 88px; border-radius: 50%; object-fit: cover; }
      .profile-info .name { font-size: 20px; font-weight: 700; color: #000; }
      .profile-info .nip { font-size: 16px; color: #333; }
      .main-menu-title { font-size: 24px; font-weight: 600; color: #000; margin-bottom: 16px; }
      .menu-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
      .menu-card { background-color: #d1e1fb; border-radius: 7px; padding: 20px; text-align: center; font-size: 18px; font-weight: 600; color: #000; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 93px; }
      .bottom-nav { position: fixed; bottom: 0; max-width: 412px; width: 100%; background-color: #fff; border-top: 1px solid #eff2f4; display: flex; justify-content: space-around; padding: 10px 0; }
      .nav-item { text-align: center; color: #607789; font-size: 12px; flex: 1; }
      .nav-item.active { color: #508eeb; font-weight: bold; }
      .nav-item img { width: 24px; height: 24px; margin-bottom: 4px; }
    </style>
  </head>
  <body>
    <div class="container">
      <header class="header">
        <div class="header-title">e-Absen Sebelas</div>
        <img class="header-logo" src="{{ asset('img/logo11.png') }}" alt="Logo" />
      </header>

      <main class="content">
        <h1 class="greeting">Selamat Datang!</h1>
        <p class="date-info">{{ $tanggalHariIni }}</p>

        <div class="profile-card">
          <img class="profile-pic" src="{{ asset('img/foto-michael.jpg') }}" alt="Foto Guru" />
          <div class="profile-info">
            <div class="name">{{ $guru->name ?? 'Nama Guru' }}</div>
            <div class="nip">{{ $guru->nip ?? 'NIP Guru' }}</div>
          </div>
        </div>

        <h2 class="main-menu-title">Menu Utama</h2>
        <div class="menu-grid">
            <a href="{{ route('guru.absensi.index') }}" class="menu-card">Absen Hari ini</a>
            <a href="#" class="menu-card">Riwayat<br />Absensi</a>
        </div>
      </main>

      <nav class="bottom-nav">
        <a href="{{ route('guru.dashboard') }}" class="nav-item active">
          <img src="{{ asset('img/beranda.png') }}" alt="Beranda" />
          <div>Beranda</div>
        </a>
        <a href="{{ route('guru.profile') }}" class="nav-item">
          <img src="{{ asset('img/guru.png') }}" alt="Profil" />
          <div>Profil</div>
        </a>
      </nav>
    </div>
  </body>
</html>
