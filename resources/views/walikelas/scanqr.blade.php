<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Scan QR</title>
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
        font-family: "Poppins", sans-serif;
      }

      a {
        text-decoration: none;
      }

      .scan-QR {
        background-color: #f2f2f5;
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 100%;
      }

      .scan-QR .div {
        background-color: #f2f2f5;
        overflow: hidden;
        width: 412px;
        height: 906px;
        position: relative;
      }

      .depth-frame {
        display: flex;
        width: 412px;
        align-items: center;
        justify-content: space-between;
        padding: 16px 16px 8px;
        position: absolute;
        top: 0;
        left: 1px;
        background-color: #508eeb;
      }

      .text-wrapper {
        font-weight: 600;
        color: #ffffff;
        font-size: 16px;
      }

      .rectangle {
        width: 43px;
        height: 47px;
        object-fit: cover;
      }

      .overlap-group {
        position: absolute;
        width: 307px;
        height: 337px;
        top: 309px;
        left: 53px;
      }

      .rectangle-2 {
        width: 281px;
        height: 337px;
        top: 0;
        left: 9px;
        background-color: #ffffff;
        border-radius: 50px;
        border: 1px solid #6e6e6e;
        position: absolute;
      }

      .img {
        width: 307px;
        height: 249px;
        top: 39px;
        left: 0;
        object-fit: cover;
        position: absolute;
      }

      .line {
        width: 299px;
        height: 1px;
        top: 678px;
        left: 58px;
        object-fit: cover;
        position: absolute;
      }

      .text-wrapper-2 {
        top: 683px;
        left: 159px;
        opacity: 0.3;
        font-family: "Aoboshi One", serif;
        font-weight: 400;
        color: #000000;
        font-size: 24px;
        position: absolute;
      }

      .p {
        width: 346px;
        top: 167px;
        left: 33px;
        font-weight: 400;
        color: #000000;
        font-size: 36px;
        text-align: center;
        position: absolute;
      }

      .depth-frame-2 {
        display: flex;
        width: 596px;
        height: 98px;
        padding: 8px 16px 12px;
        position: absolute;
        top: 820px;
        left: -88px;
        background-color: #ffffff;
        border-top: 1px solid #eff2f4;
      }

      .depth-frame-3,
      .depth-frame-4 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
        gap: 4px;
        flex: 1;
      }

      .vector-wrapper {
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }

      .vector,
      .vector-2 {
        width: 18px;
        height: 19px;
      }

      .text-wrapper-3,
      .text-wrapper-4 {
        font-weight: 500;
        font-size: 12px;
        line-height: 18px;
      }

      .text-wrapper-3 {
        color: #607789;
      }

      .text-wrapper-4 {
        color: #111416;
      }
    </style>
  </head>

  <body>
    <div class="scan-QR">
      <div class="div">
        <!-- Header -->
        <div class="depth-frame">
          <div class="text-wrapper">e-Absen Sebelas</div>
          <img class="rectangle" src="img/logo11.png" alt="Logo Sekolah" />
        </div>

        <!-- Judul -->
        <p class="p">Silahkan scan QR untuk absen</p>

        <!-- Gambar QR -->
        <div class="overlap-group">
          <div class="rectangle-2"></div>
          <img class="img" src="img/rectangle-143.png" alt="Gambar QR" />
        </div>

        <!-- Label Scan -->
        <img class="line" src="img/line-2.svg" alt="Line" />
        <div class="text-wrapper-2">Scan QR</div>

        <!-- Bottom Navbar -->
        <div class="depth-frame-2">
          <div class="depth-frame-3">
            <div class="vector-wrapper">
              <img class="vector" src="img/beranda.png" alt="Beranda" />
            </div>
            <div class="text-wrapper-3">Beranda</div>
          </div>
          <div class="depth-frame-4">
            <div class="vector-wrapper">
              <img class="vector-2" src="img/guru.png" alt="Profil" />
            </div>
            <div class="text-wrapper-4">Profil</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>