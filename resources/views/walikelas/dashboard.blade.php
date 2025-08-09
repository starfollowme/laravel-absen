<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Guru Mapel</title>
    <style>
      @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");

      * {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
      }

      html,
      body {
        margin: 0px;
        height: 100%;
        font-family: 'Poppins', sans-serif;
      }

      a {
        text-decoration: none;
      }

      .dashboard-guru-mapel {
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        width: 100%;
      }

      .dashboard-guru-mapel .div {
        background-color: #ffffff;
        width: 412px;
        height: 917px;
        position: relative;
        overflow: hidden;
      }

      .depth-frame-4 {
        width: 100%;
        padding: 16px;
        background-color: #508eeb;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: absolute;
        top: 0;
        left: 0;
      }

      .text-wrapper-10 {
        color: #fff;
        font-size: 16px;
        font-weight: 600;
      }

      .rectangle-4 {
        width: 43px;
        height: 47px;
        object-fit: cover;
      }

      .overlap-4 {
        position: absolute;
        top: 89px;
        left: 36px;
      }

      .text-wrapper-7 {
        font-size: 32px;
        font-weight: 600;
        color: #000;
        text-shadow: 0px 4px 4px #00000040;
      }

      .overlap-3 {
        position: absolute;
        width: 354px;
        height: 102px;
        top: 173px;
        left: 29px;
      }

      .rectangle-2 {
        background-color: #508eeb;
        height: 51px;
        border-radius: 7px;
      }

      .text-wrapper-5 {
        position: absolute;
        top: 8px;
        left: 13px;
        color: #fff;
        font-size: 24px;
        font-weight: 600;
      }

      .text-wrapper-4 {
        position: absolute;
        top: 65px;
        left: 108px;
        color: #6c7474;
        font-size: 16px;
      }

      .rounded-rectangle {
        position: absolute;
        top: 43px;
        width: 100%;
        height: 59px;
        background-color: #f2f2f5;
        border-radius: 7px;
        border: 1px solid #ccc;
        box-shadow: 0px 4px 4px #00000040;
      }

      .overlap-2 {
        position: absolute;
        top: 308px;
        left: 28px;
        background-color: #d1e1fb;
        border-radius: 7px;
        width: 356px;
        height: 159px;
        box-shadow: 0px 4px 4px #00000040;
        border: 1px solid #d1e2fb;
      }

      .ellipse {
        width: 88px;
        height: 86px;
        border-radius: 50%;
        object-fit: cover;
        position: absolute;
        top: 36px;
        left: 21px;
      }

      .text-wrapper-2 {
        position: absolute;
        top: 35px;
        left: 137px;
        font-size: 24px;
        font-weight: 700;
        color: #000;
        text-shadow: 0px 4px 4px #00000040;
      }

      .text-wrapper-3 {
        position: absolute;
        top: 80px;
        left: 177px;
        font-size: 16px;
        font-weight: 700;
        color: #000;
      }

      .overlap {
        position: absolute;
        top: 538px;
        left: 215px;
        width: 164px;
        height: 93px;
        background-color: #d1e1fb;
        border-radius: 7px;
        border: 1px solid #d1e2fb;
        box-shadow: 0px 4px 4px #00000040;
      }

      .riwayat-absensi {
        position: absolute;
        top: 22px;
        left: 21px;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
        color: #000;
      }

      .overlap-group {
        position: absolute;
        top: 538px;
        left: 31px;
        width: 164px;
        height: 93px;
        background-color: #d1e1fb;
        border-radius: 7px;
        border: 1px solid #d1e2fb;
        box-shadow: 0px 4px 4px #00000040;
      }

      .text-wrapper {
        position: absolute;
        top: 20px;
        left: 69px;
        font-size: 20px;
        font-weight: 600;
        color: #000;
      }

      .text-wrapper-6 {
        position: absolute;
        top: 491px;
        left: 34px;
        font-size: 24px;
        font-weight: 600;
        color: #000;
        text-shadow: 0px 4px 4px #00000040;
      }

      .depth-frame {
        position: absolute;
        bottom: 0;
        width: 100%;
        background-color: #fff;
        border-top: 1px solid #eff2f4;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px 0;
      }

      .depth-frame .icon {
        text-align: center;
        color: #607789;
        font-size: 12px;
      }

      .icon img {
        width: 20px;
        height: 20px;
        margin-bottom: 4px;
      }

    </style>
  </head>

  <body>
    <div class="dashboard-guru-mapel">
      <div class="div">
        <!-- HEADER -->
        <div class="depth-frame-4">
          <div class="text-wrapper-10">e-Absen Sebelas</div>
          <img class="rectangle-4" src="img/logo11.png" alt="Logo" />
        </div>

        <!-- GREETING -->
        <div class="overlap-4">
          <div class="text-wrapper-7">Selamat Datang !</div>
        </div>

        <!-- DATA ABSENSI -->
        <div class="overlap-3">
          <div class="rectangle-2"></div>
          <div class="rounded-rectangle"></div>
          <div class="text-wrapper-5">Data Absensi</div>
          <div class="text-wrapper-4">Kamis, 20 Nov 2026</div>
        </div>

        <!-- PROFIL GURU -->
        <div class="overlap-2">
          <img
            class="ellipse"
            src="img/foto-michael.jpg"
            alt="Foto Guru"
          />
          <div class="text-wrapper-2">Michael Saputra</div>
          <div class="text-wrapper-3">84023456789</div>
        </div>

        <!-- MENU UTAMA -->
        <div class="text-wrapper-6">Menu Utama</div>

        <!-- KARTU 1 -->
        <div class="overlap-group">
          <div class="text-wrapper">Absen Hari ini</div>
        </div>

        <!-- KARTU 2 -->
        <div class="overlap">
          <div class="riwayat-absensi">Riwayat<br />Absensi</div>
        </div>

        <!-- NAVIGATION BAR -->
        <div class="depth-frame">
          <div class="icon">
            <img src="img/beranda.png" alt="Beranda" />
            <div>Beranda</div>
          </div>
          <div class="icon">
            <img src="img/guru.png" alt="Profil" />
            <div>Profil</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>