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
        margin: 0px;
        height: 100%;
      }
      button:focus-visible {
        outline: 2px solid #4a90e2 !important;
        outline: -webkit-focus-ring-color auto 5px !important;
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
      .form-notifikasi .depth-frame {
        display: flex;
        flex-direction: column;
        width: 530px;
        align-items: flex-start;
        position: absolute;
        top: 40px;
        left: 0;
      }
      .form-notifikasi .depth-frame-2 {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        padding: 8px 16px 12px;
        position: relative;
        align-self: stretch;
        width: 100%;
        flex: 0 0 auto;
        background-color: #ffffff;
        border-top-width: 1px;
        border-top-style: solid;
        border-color: #eff2f4;
      }
      .form-notifikasi .depth-frame-3 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
        gap: 4px;
        position: relative;
        flex: 1;
        flex-grow: 1;
      }
      .form-notifikasi .depth-frame-wrapper {
        height: 32px;
        align-items: center;
        justify-content: center;
        display: inline-flex;
        position: relative;
      }
      .form-notifikasi .vector-wrapper {
        position: relative;
        flex: 1;
        flex-grow: 1;
        height: 24px;
      }
      .form-notifikasi .vector {
        position: absolute;
        width: 18px;
        height: 19px;
        top: 2px;
        left: 3px;
      }
      .form-notifikasi .div-wrapper {
        flex-direction: column;
        align-items: flex-start;
        flex: 0 0 auto;
        display: inline-flex;
        position: relative;
      }
      .form-notifikasi .text-wrapper {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Public Sans-Medium", Helvetica;
        font-weight: 500;
        color: #607789;
        font-size: 12px;
        letter-spacing: 0;
        line-height: 18px;
      }
      .form-notifikasi .depth-frame-4 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
        gap: 4px;
        border-radius: 27px;
        position: relative;
        flex: 1;
        flex-grow: 1;
      }
      .form-notifikasi .img {
        position: absolute;
        width: 19px;
        height: 19px;
        top: 2px;
        left: 2px;
      }
      .form-notifikasi .text-wrapper-2 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Public Sans-Medium", Helvetica;
        font-weight: 500;
        color: #111416;
        font-size: 12px;
        letter-spacing: 0;
        line-height: 18px;
      }
      .form-notifikasi .ellipse {
        position: absolute;
        width: 82px;
        height: 80px;
        top: 0;
        left: 224px;
        background-color: #d1e2fb;
        border-radius: 41px / 40px;
        border: 1px solid;
        border-color: #a9a9a9;
      }
      .form-notifikasi .rectangle {
        position: absolute;
        width: 50px;
        height: 52px;
        top: 13px;
        left: 240px;
        object-fit: cover;
      }
      .form-notifikasi .overlap {
        position: absolute;
        width: 514px;
        height: 681px;
        top: 79px;
        left: 25px;
      }
      .form-notifikasi .rectangle-2 {
        position: absolute;
        width: 365px;
        height: 681px;
        top: 0;
        left: 0;
        background-color: #f2f2f5;
        border-radius: 30px;
        border: 1px solid;
        border-color: #9f9f9f;
        box-shadow: inset 0px 4px 4px #00000040;
      }
      .form-notifikasi .text-wrapper-3 {
        position: absolute;
        top: 138px;
        left: 69px;
        text-shadow: 0px 4px 4px #00000040;
        font-family: "Poppins-Regular", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 32px;
        letter-spacing: 0;
        line-height: normal;
      }
      .form-notifikasi .rectangle-3 {
        position: absolute;
        width: 325px;
        height: 360px;
        top: 159px;
        left: 17px;
        object-fit: cover;
      }
      .form-notifikasi .rectangle-4 {
        position: absolute;
        width: 310px;
        height: 52px;
        top: 521px;
        left: 26px;
        background-color: #4080bf;
        border-radius: 120px;
        border: 1px solid;
        border-color: #000000;
        box-shadow: 0px 4px 4px #00000040;
      }
      .form-notifikasi .text-wrapper-4 {
        position: absolute;
        width: 382px;
        top: 528px;
        left: 132px;
        font-family: "Poppins-SemiBold", Helvetica;
        font-weight: 600;
        color: #ffffff;
        font-size: 24px;
        letter-spacing: 0;
        line-height: normal;
      }
      .form-notifikasi .depth-frame-5 {
        display: flex;
        width: 413px;
        height: 65px;
        align-items: center;
        justify-content: space-between;
        padding: 16px 16px 8px;
        position: absolute;
        top: 0;
        left: -1px;
        background-color: #508eeb;
      }
      .form-notifikasi .depth-frame-6 {
        height: 23px;
        position: relative;
        flex: 1;
        flex-grow: 1;
      }
      .form-notifikasi .text-wrapper-5 {
        position: relative;
        width: 228px;
        height: 24px;
        text-shadow: 0px 4px 4px #00000040;
        font-family: "Poppins-SemiBold", Helvetica;
        font-weight: 600;
        color: #ffffff;
        font-size: 16px;
        letter-spacing: 0;
        line-height: normal;
      }
      .form-notifikasi .rectangle-5 {
        position: relative;
        width: 43px;
        height: 47px;
        margin-bottom: -7.00px;
        margin-right: -9.00px;
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
              <div class="depth-frame-3">
                <div class="depth-frame-wrapper">
                  <div class="vector-wrapper"><img class="vector" src="img/image.svg" /></div>
                </div>
                <div class="div-wrapper"><div class="text-wrapper">Beranda</div></div>
              </div>
              <div class="depth-frame-4">
                <div class="depth-frame-wrapper">
                  <div class="vector-wrapper"><img class="img" src="img/vector-0.svg" /></div>
                </div>
                <div class="div-wrapper"><div class="text-wrapper-2">Profil</div></div>
              </div>
            </div>
          </div>
          <div class="ellipse"></div>
          <img class="rectangle" src="img/image.png" />
        </div>
        <div class="overlap">
          <div class="rectangle-2"></div>
          <div class="text-wrapper-3">Absen Sukses!</div>
          <img class="rectangle-3" src="img/rectangle-124.png" />
          <div class="rectangle-4"></div>
          <div class="text-wrapper-4">Kembali</div>
        </div>
        <div class="depth-frame-5">
          <div class="depth-frame-6"></div>
          <div class="text-wrapper-5">e-Absen Sebelas</div>
          <img class="rectangle-5" src="img/rectangle-110.png" />
        </div>
      </div>
    </div>
  </body>
</html>
