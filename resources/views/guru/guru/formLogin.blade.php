<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>e-Absen Sebelas - Login</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
      * {
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
      }

      html,
      body {
        height: 100%;
        background-color: #ffffff;
      }

      .form-login {
        display: flex;
        justify-content: center;
        background-color: #ffffff;
        width: 100%;
      }

      .overlap-group-wrapper {
        background-color: #ffffff;
        overflow: hidden;
        width: 412px;
        height: 917px;
      }

      .overlap-group {
        position: relative;
        width: 489px;
        height: 971px;
        left: -40px;
      }

      .unnamed {
        position: absolute;
        width: 412px;
        height: 398px;
        top: 0;
        left: 40px;
        object-fit: cover;
        border-bottom-left-radius: 60px;
        border-bottom-right-radius: 60px;
      }

      .rectangle {
        position: absolute;
        width: 489px;
        height: 761px;
        top: 210px;
        left: 0;
        background-color: #d9d9d9;
        border-radius: 159px;
        border: 1px solid #000000;
      }

      .div,
      .rectangle-2 {
        position: absolute;
        width: 341px;
        height: 96px;
        background-color: #508eeb;
        border-radius: 10px;
        border: 1px solid #707070;
        box-shadow: 0px 4px 4px #00000040;
        left: 75px;
      }

      .div {
        top: 427px;
      }

      .rectangle-2 {
        top: 560px;
      }

      .img,
      .rectangle-3 {
        position: absolute;
        width: 65px;
        height: 60px;
        object-fit: cover;
        left: 89px;
      }

      .img {
        top: 445px;
      }

      .rectangle-3 {
        top: 578px;
      }

      .text-wrapper,
      .text-wrapper-2 {
        position: absolute;
        font-size: 32px;
        font-weight: 600;
        color: #ffffff;
        text-shadow: 0px 4px 4px #00000040;
        line-height: normal;
      }

      .text-wrapper {
        top: 455px;
        left: 177px;
        width: 115px;
      }

      .text-wrapper-2 {
        top: 585px;
        left: 177px;
        width: 105px;
      }

      .text-wrapper-3 {
        position: absolute;
        top: 249px;
        left: 104px;
        width: 282px;
        font-size: 32px;
        font-weight: 600;
        color: #000000;
        text-shadow: 0px 4px 4px #00000040;
      }

      .text-wrapper-4 {
        position: absolute;
        top: 377px;
        left: 78px;
        width: 162px;
        font-size: 20px;
        font-weight: 600;
        color: #000000;
        text-shadow: 0px 4px 4px #00000040;
      }
    </style>
  </head>
  <body>
    <div class="form-login">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
          <!-- Foto Sekolah -->
          <img class="unnamed" src="img/smkn11.jpeg" alt="SMKN 11 BANDUNG" />

          <!-- Background abu-abu melengkung -->
          <div class="rectangle"></div>

          <!-- Tombol Murid -->
          <div class="div"></div>
          <img class="img" src="img/murid.png" alt="ikon murid" />
          <div class="text-wrapper">MURID</div>

          <!-- Tombol Guru -->
          <div class="rectangle-2"></div>
          <img class="rectangle-3" src="img/guru.png" alt="ikon guru" />
          <div class="text-wrapper-2">GURU</div>

          <!-- Judul dan Label -->
          <div class="text-wrapper-3">e-Absen Sebelas</div>
          <div class="text-wrapper-4">Login Sebagai</div>
        </div>
      </div>
    </div>
  </body>
</html>