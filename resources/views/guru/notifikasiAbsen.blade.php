<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <style>
      @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");

      * {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
      }

      html,
      body {
        margin: 0;
        height: 100%;
        font-family: "Poppins", sans-serif;
      }

      a {
        text-decoration: none;
      }

      .form-notifikasi {
        background-color: #d1e2fb;
        display: grid;
        justify-items: center;
        align-items: start;
        width: 100vw;
        min-height: 100vh;
        height: 100%;
      }

      .form-notifikasi .div {
        background-color: #d1e2fb;
        overflow: hidden;
        width: 412px;
        height: 917px;
        position: relative;
      }

      .form-notifikasi .overlap-group {
        position: absolute;
        width: 530px;
        height: 115px;
        top: 788px;
        left: -57px;
      }

      .depth-frame {
        display: flex;
        flex-direction: column;
        width: 530px;
        position: absolute;
        top: 40px;
        left: 0;
      }

      .depth-frame-2 {
        display: flex;
        gap: 8px;
        padding: 8px 16px 12px;
        width: 100%;
        background-color: #ffffff;
        border-top: 1px solid #eff2f4;
        justify-content: space-around;
      }

      .depth-frame-3,
      .depth-frame-4 {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
        flex: 1;
      }

      .depth-frame-wrapper {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .vector-wrapper {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .vector,
      .img {
        max-width: 100%;
        max-height: 100%;
        height: auto;
        width: auto;
        object-fit: contain;
        display: block;
      }

      .text-wrapper,
      .text-wrapper-2 {
        font-weight: 500;
        font-size: 12px;
        color: #607789;
      }

      .text-wrapper-2 {
        color: #111416;
      }

      .ellipse {
        position: absolute;
        width: 82px;
        height: 80px;
        top: 0;
        left: 224px;
        background-color: #d1e2fb;
        border-radius: 50%;
        border: 1px solid #a9a9a9;
      }

      .rectangle {
        position: absolute;
        width: 50px;
        height: 52px;
        top: 13px;
        left: 240px;
        object-fit: cover;
      }

      .overlap {
        position: absolute;
        width: 514px;
        height: 681px;
        top: 79px;
        left: 25px;
      }

      .rectangle-2 {
        position: absolute;
        width: 365px;
        height: 681px;
        top: 0;
        left: 0;
        background-color: #f2f2f5;
        border-radius: 30px;
        border: 1px solid #9f9f9f;
        box-shadow: inset 0px 4px 4px #00000040;
      }

      .text-wrapper-3 {
        position: absolute;
        top: 138px;
        left: 69px;
        font-size: 32px;
        font-weight: 400;
        color: #000000;
        text-shadow: 0px 4px 4px #00000040;
      }

      .rectangle-3 {
        position: absolute;
        width: 325px;
        height: 360px;
        top: 159px;
        left: 17px;
        object-fit: cover;
      }

      .rectangle-4 {
        position: absolute;
        width: 310px;
        height: 52px;
        top: 521px;
        left: 26px;
        background-color: #4080bf;
        border-radius: 120px;
        border: 1px solid #000000;
        box-shadow: 0px 4px 4px #00000040;
      }

      .text-wrapper-4 {
        position: absolute;
        top: 528px;
        left: 150px;
        font-size: 20px;
        font-weight: 600;
        color: #ffffff;
      }

      .depth-frame-5 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 16px 8px;
        position: absolute;
        top: 0;
        left: -1px;
        width: 413px;
        height: 65px;
        background-color: #508eeb;
      }

      .text-wrapper-5 {
        font-size: 16px;
        font-weight: 600;
        color: #ffffff;
        text-shadow: 0px 4px 4px #00000040;
      }

      .rectangle-5 {
        width: 43px;
        height: 47px;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
    <div class="form-notifikasi">
      <div class="div">
        <div class="overlap-group">
          <div class="depth-frame">
            <div class="depth-frame-2">
              <!-- Beranda -->
              <div class="depth-frame-3">
                <div class="depth-frame-wrapper">
                  <div class="vector-wrapper">
                    <img class="vector" src="img/beranda.png" alt="Beranda" />
                  </div>
                </div>
                <div><div class="text-wrapper">Beranda</div></div>
              </div>
              <!-- Profil -->
              <div class="depth-frame-4">
                <div class="depth-frame-wrapper">
                  <div class="vector-wrapper">
                    <img class="img" src="img/guru.png" alt="Profil" />
                  </div>
                </div>
                <div><div class="text-wrapper-2">Profil</div></div>
              </div>
            </div>
          </div>
          <div class="ellipse"></div>
          <img class="rectangle" src="img/barcode.png" alt="Middle Icon" />
        </div>

        <div class="overlap">
          <div class="rectangle-2"></div>
          <div class="text-wrapper-3">Absen Sukses!</div>
          <img class="rectangle-3" src="img/ceklisijo.png" alt="Checkmark" />
          <div class="rectangle-4"></div>
          <div class="text-wrapper-4">Kembali</div>
        </div>

        <div class="depth-frame-5">
          <div></div>
          <div class="text-wrapper-5">e-Absen Sebelas</div>
          <img class="rectangle-5" src="img/logo11.png" alt="Logo" />
        </div>
      </div>
    </div>
  </body>
</html>
