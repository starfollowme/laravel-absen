<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>e-Absen Sebelas</title>
    <style>
      @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
      * {
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      body {
        margin: 0;
        background-color: #ffffff;
      }

      .container {
        max-width: 412px;
        margin: 0 auto;
        background-color: #fff;
        min-height: 100vh;
        border: 1px solid #ccc;
        position: relative;
      }

      .header {
        background-color: #508eeb;
        color: #fff;
        padding: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .header img {
        height: 40px;
      }

      .header-title {
        font-weight: 600;
        font-size: 16px;
      }

      .checkmark {
        width: 160px;
        margin: 32px auto 16px auto;
        display: block;
      }

      .content {
        padding: 0 20px;
      }

      .title {
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 4px;
        color: #000;
      }

      .status {
        font-size: 18px;
        color: #38c23d;
        font-weight: 700;
        margin-bottom: 24px;
      }

      .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
        border-bottom: 1px solid #dcdcdc;
        padding-bottom: 6px;
      }

      .info-item img {
        width: 24px;
        height: 24px;
        margin-right: 12px;
      }

      .info-label {
        font-weight: 600;
        font-size: 16px;
        margin-right: 12px;
        color: #000;
        width: 80px;
      }

      .info-value {
        color: #4c7099;
        font-size: 16px;
      }

      .kembali-btn {
        margin-top: 20px;
        text-align: right;
      }

      .kembali-btn button {
        background-color: #508eeb;
        border: none;
        border-radius: 7px;
        padding: 6px 20px;
        color: white;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
      }

      .bottom-nav {
        position: fixed;
        bottom: 0;
        max-width: 412px;
        width: 100%;
        background-color: #ffffff;
        border-top: 1px solid #eff2f4;
        display: flex;
        justify-content: space-around;
        padding: 10px 0;
      }

      .nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 12px;
        color: #607789;
      }

      .nav-item.active {
        color: #111416;
      }

      .nav-item img {
        width: 20px;
        height: 20px;
        margin-bottom: 4px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <img src="img/panah.png" alt="Back" />
        <div class="header-title">e-Absen Sebelas</div>
        <img src="img/logo11.png" alt="Logo" />
      </div>

      <img src="img/ceklisijo.png" alt="Checkmark" class="checkmark" />

      <div class="content">
        <div class="title">Detail Absen</div>
        <div class="status">Hadir</div>

        <div class="info-item">
          <img src="img/nis.png" alt="icon" />
          <div class="info-label">NIS</div>
          <div class="info-value">000000000</div>
        </div>

        <div class="info-item">
          <img src="img/nama.png" alt="icon" />
          <div class="info-label">Nama</div>
          <div class="info-value">Siti Ropeah</div>
        </div>

        <div class="info-item">
          <img src="img/kelas.png" alt="icon" />
          <div class="info-label">Kelas</div>
          <div class="info-value">XII RPL 2</div>
        </div>

        <div class="info-item">
          <img src="img/waktu.png" alt="icon" />
          <div class="info-label">Waktu</div>
          <div class="info-value">06.30.17</div>
        </div>

        <div class="info-item">
          <img src="img/tanggal.png" alt="icon" />
          <div class="info-label">Tanggal</div>
          <div class="info-value">20-11-2026</div>
        </div>

        <div class="info-item">
          <img src="img/status.png" alt="icon" />
          <div class="info-label">Status</div>
          <div class="info-value">Hadir</div>
        </div>

        <div class="kembali-btn">
          <button>Kembali</button>
        </div>
      </div>

      <div class="bottom-nav">
        <div class="nav-item active">
          <img src="img/beranda.png" alt="Beranda" />
          Beranda
        </div>
        <div class="nav-item">
          <img src="img/guru.png" alt="Profil" />
          Profil
        </div>
      </div>
    </div>
  </body>
</html>
