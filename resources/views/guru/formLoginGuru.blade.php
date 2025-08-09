<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Guru - e-Absen Sebelas</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Abel&family=Poppins:wght@400;600&display=swap");

      * {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
      }

      html,
      body {
        margin: 0;
        height: 100%;
        font-family: 'Poppins', sans-serif;
      }

      a {
        text-decoration: none;
      }

      button:focus-visible {
        outline: 2px solid #4a90e2 !important;
        outline: -webkit-focus-ring-color auto 5px !important;
      }

      .form-login-guru {
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        width: 100%;
      }

      .overlap-wrapper {
        background-color: #ffffff;
        overflow: hidden;
        width: 412px;
        height: 917px;
      }

      .overlap {
        position: relative;
        width: 690px;
        height: 1082px;
        top: -112px;
        left: -199px;
      }

      .group {
        position: absolute;
        width: 690px;
        height: 1082px;
        top: 0;
        left: 0;
      }

      .overlap-group {
        position: relative;
        width: 489px;
        height: 970px;
        top: 112px;
        left: 160px;
      }

      .unnamed {
        position: absolute;
        width: 412px;
        height: 398px;
        top: 0;
        left: 39px;
        object-fit: cover;
        border-bottom-left-radius: 60px;
        border-bottom-right-radius: 60px;
      }

      .rectangle {
        position: absolute;
        width: 489px;
        height: 761px;
        top: 209px;
        left: 0;
        background-color: #d9d9d9;
        border-radius: 159px;
        border: 1px solid #000000;
      }

      .text-wrapper {
        position: absolute;
        width: 109px;
        top: 572px;
        left: 109px;
        font-size: 11px;
        color: #000000;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        text-shadow: 0px 4px 4px #00000040;
      }

      .div {
        position: absolute;
        width: 303px;
        height: 48px;
        top: 397px;
        left: 93px;
        background-color: #ffffff;
        border-radius: 7px;
        border: 1px solid #508eeb;
        box-shadow: 0px 4px 4px #00000040;
      }

      .text-wrapper-2 {
        position: absolute;
        width: 97px;
        top: 412px;
        left: 113px;
        font-size: 16px;
        color: #6c7474;
        font-family: 'Abel', sans-serif;
      }

      .rectangle-2 {
        position: absolute;
        width: 303px;
        height: 48px;
        top: 495px;
        left: 94px;
        background-color: #ffffff;
        border-radius: 7px;
        border: 1px solid #508eeb;
        box-shadow: 0px 4px 4px #00000040;
      }

      .rectangle-3 {
        position: absolute;
        width: 24px;
        height: 25px;
        top: 566px;
        left: 94px;
        background-color: #ffffff;
        border-radius: 7px;
        border: 1px solid #508eeb;
        box-shadow: 0px 4px 4px #00000040;
      }

      .text-wrapper-3 {
        position: absolute;
        width: 282px;
        top: 250px;
        left: 104px;
        font-size: 32px;
        font-weight: 600;
        color: #000000;
        text-shadow: 0px 4px 4px #00000040;
        font-family: 'Poppins', sans-serif;
      }

      .text-wrapper-4 {
        position: absolute;
        width: 97px;
        top: 508px;
        left: 113px;
        font-size: 16px;
        color: #6c7474;
        font-family: 'Abel', sans-serif;
      }

      .rectangle-4 {
        position: absolute;
        width: 310px;
        height: 52px;
        top: 700px;
        left: 94px;
        background-color: #508eeb;
        border-radius: 20px;
        border: 1px solid #8a8585;
        box-shadow: 0px 4px 4px #00000040;
      }

      .text-wrapper-5 {
        position: absolute;
        top: 716px;
        left: 216px;
        font-size: 16px;
        color: #ffffff;
        font-family: 'Zen Dots', sans-serif;
        text-shadow: 0px 5px 4px #00000040;
        white-space: nowrap;
      }

      .view-alt-fill {
        position: absolute;
        width: 24px;
        height: 24px;
        top: 620px;
        left: 513px;
      }
    </style>
  </head>
  <body>
    <div class="form-login-guru">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="group">
            <div class="overlap-group">
              <!-- Foto Header -->
              <img class="unnamed" src="img/smkn11.jpeg" alt="header" />

              <!-- Background Abu -->
              <div class="rectangle"></div>

              <!-- Input NIP -->
              <div class="div"></div>
              <div class="text-wrapper-2">Masukan NIP</div>

              <!-- Input Password -->
              <div class="rectangle-2"></div>
              <div class="text-wrapper-4">Password</div>

              <!-- Checkbox -->
              <div class="rectangle-3"></div>
              <div class="text-wrapper">Remember Me</div>

              <!-- Header Judul -->
              <div class="text-wrapper-3">e-Absen Sebelas</div>

              <!-- Tombol Login -->
              <div class="rectangle-4"></div>
              <div class="text-wrapper-5">LOGIN</div>
            </div>
          </div>

          <!-- Icon Mata (Lihat Password) -->
          <img class="view-alt-fill" src="img/view-alt-fill.svg" alt="lihat password" />
        </div>
      </div>
    </div>
  </body>
</html>