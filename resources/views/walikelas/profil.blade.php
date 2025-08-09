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
      /* a blue color as a generic focus style */
      button:focus-visible {
        outline: 2px solid #4a90e2 !important;
        outline: -webkit-focus-ring-color auto 5px !important;
      }
      a {
        text-decoration: none;
      }

      .profil-guru {
        display: flex;
        flex-direction: column;
        height: 917px;
        align-items: flex-start;
        position: relative;
        background-color: #ffffff;
        max-width: 412px;
        margin: 0 auto;
      }

      .profil-guru .depth-frame {
        display: flex;
        flex-direction: column;
        height: 916px;
        align-items: flex-start;
        justify-content: space-between;
        position: relative;
        align-self: stretch;
        width: 100%;
        background-color: #ffffff;
      }

      .profil-guru .div {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        position: relative;
        align-self: stretch;
        width: 100%;
        flex: 0 0 auto;
      }

      .profil-guru .depth-frame-2 {
        display: flex;
        height: 64px;
        align-items: center;
        justify-content: center;
        padding: 16px 16px 8px;
        background-color: #508eeb;
        position: relative;
        align-self: stretch;
        width: 100%;
      }

      .profil-guru .depth-frame-wrapper {
        display: none;
      }

      .profil-guru .vector-wrapper {
        position: relative;
        width: 24px;
        height: 24px;
      }

      .profil-guru .vector {
        position: absolute;
        width: 18px;
        height: 14px;
        top: 5px;
        left: 3px;
      }

      .profil-guru .div-wrapper {
        flex-direction: column;
        height: 23px;
        padding: 0;
        flex: 1;
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
      }

      .profil-guru .text-wrapper {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Manrope-Bold", Helvetica;
        font-weight: 700;
        color: #ffffff;
        font-size: 18px;
        text-align: center;
        letter-spacing: 0;
        line-height: 23px;
      }

      .profil-guru .depth-frame-3 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 4px 16px 12px;
        position: relative;
        align-self: stretch;
        width: 100%;
        flex: 0 0 auto;
      }

      .profil-guru .selamat-datang {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Manrope-Regular", Helvetica;
        font-weight: 400;
        color: #111416;
        font-size: 16px;
        letter-spacing: 0;
        line-height: 24px;
      }

      .profil-guru .depth-frame-4 {
        display: flex;
        align-items: flex-start;
        padding: 12px 16px;
        flex: 0 0 auto;
        position: relative;
        align-self: stretch;
        width: 100%;
      }

      .profil-guru .depth-frame-5 {
        display: inline-flex;
        min-width: 84px;
        max-width: 480px;
        height: 40px;
        align-items: center;
        justify-content: center;
        padding: 0px 16px;
        position: relative;
        flex: 0 0 auto;
        background-color: #f2f2f4;
        border-radius: 12px;
        overflow: hidden;
      }

      .profil-guru .depth-frame-6 {
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        flex: 0 0 auto;
      }

      .profil-guru .text-wrapper-2 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Manrope-Bold", Helvetica;
        font-weight: 700;
        color: #111416;
        font-size: 14px;
        text-align: center;
        letter-spacing: 0;
        line-height: 21px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
      }

      .profil-guru .text-wrapper-3 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Manrope-Regular", Helvetica;
        font-weight: 400;
        color: #6b7582;
        font-size: 14px;
        letter-spacing: 0;
        line-height: 21px;
      }

      .profil-guru .depth-frame-7 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 16px;
        flex: 0 0 auto;
        position: relative;
        align-self: stretch;
        width: 100%;
      }

      .profil-guru .user-profile {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 16px;
      }

      .profil-guru .profile-image {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #508eeb;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        font-weight: bold;
      }

      .profil-guru .profile-info {
        flex: 1;
      }

      .profil-guru .depth-frame-8 {
        display: flex;
        align-items: flex-start;
        justify-content: space-around;
        gap: 16px;
        position: relative;
        align-self: stretch;
        width: 100%;
        flex: 0 0 auto;
        border-radius: 12px;
      }

      .profil-guru .depth-frame-9 {
        display: flex;
        flex-direction: column;
        width: 228px;
        align-items: flex-start;
        gap: 4px;
        position: relative;
      }

      .profil-guru .depth-frame-10 {
        display: flex;
        flex-direction: column;
        height: 20px;
        align-items: flex-start;
        position: relative;
        align-self: stretch;
        width: 100%;
      }

      .profil-guru .text-wrapper-4 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Manrope-Bold", Helvetica;
        font-weight: 700;
        color: #111416;
        font-size: 16px;
        letter-spacing: 0;
        line-height: 20px;
      }

      .profil-guru .text-wrapper-5 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Poppins-ExtraLight", Helvetica;
        font-weight: 200;
        color: #000000;
        font-size: 16px;
        letter-spacing: 0;
        line-height: normal;
      }

      .profil-guru .depth-frame-11 {
        display: flex;
        flex-direction: column;
        height: 60px;
        align-items: flex-start;
        padding: 20px 16px 12px;
        position: relative;
        align-self: stretch;
        width: 100%;
      }

      .profil-guru .text-wrapper-6 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Manrope-Bold", Helvetica;
        font-weight: 700;
        color: #111416;
        font-size: 22px;
        letter-spacing: 0;
        line-height: 28px;
      }

      .profil-guru .depth-frame-12 {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex: 0 0 auto;
        position: relative;
        align-self: stretch;
        width: 100%;
      }

      .profil-guru .depth-frame-13 {
        display: flex;
        flex-direction: column;
        max-width: 480px;
        align-items: flex-start;
        gap: 12px;
        padding: 12px 16px;
        position: relative;
        flex: 1;
        flex-grow: 1;
      }

      .profil-guru .depth-frame-14 {
        display: flex;
        min-width: 84px;
        max-width: 480px;
        height: 48px;
        align-items: center;
        justify-content: center;
        padding: 0px 20px;
        position: relative;
        width: 100%;
        background-color: #3f7fbf;
        border-radius: 12px;
        overflow: hidden;
      }

      .profil-guru .text-wrapper-7 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Manrope-Bold", Helvetica;
        font-weight: 700;
        color: #ffffff;
        font-size: 16px;
        text-align: center;
        letter-spacing: 0;
        line-height: 24px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
      }

      .profil-guru .depth-frame-15 {
        display: flex;
        min-width: 84px;
        max-width: 480px;
        height: 48px;
        align-items: center;
        justify-content: center;
        padding: 0px 20px;
        position: relative;
        width: 100%;
        background-color: #f2f2f4;
        border-radius: 12px;
        overflow: hidden;
      }

      .profil-guru .text-wrapper-8 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Manrope-Bold", Helvetica;
        font-weight: 700;
        color: #111416;
        font-size: 16px;
        text-align: center;
        letter-spacing: 0;
        line-height: 24px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
      }

      .profil-guru .depth-frame-16 {
        height: 20px;
        background-color: #ffffff;
        position: relative;
        align-self: stretch;
        width: 100%;
      }

      .profil-guru .depth-frame-17 {
        display: flex;
        height: 75px;
        align-items: flex-start;
        padding: 8px 16px 12px;
        position: relative;
        align-self: stretch;
        width: 100%;
        background-color: #ffffff;
        border-top-width: 1px;
        border-top-style: solid;
        border-color: #eff2f4;
        justify-content: space-around;
      }

      .profil-guru .depth-frame-18 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 4px;
        position: relative;
        flex: 1;
      }

      .profil-guru .depth-frame-19 {
        display: inline-flex;
        height: 32px;
        align-items: center;
        justify-content: center;
        position: relative;
      }

      .profil-guru .img-wrapper {
        position: relative;
        flex: 1;
        flex-grow: 1;
        height: 24px;
      }

      .profil-guru .img {
        width: 18px;
        left: 3px;
        position: absolute;
        height: 19px;
        top: 2px;
      }

      .profil-guru .depth-frame-20 {
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        flex: 0 0 auto;
      }

      .profil-guru .text-wrapper-9 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Public Sans-Medium", Helvetica;
        font-weight: 500;
        color: #607789;
        font-size: 12px;
        letter-spacing: 0;
        line-height: 18px;
        text-align: center;
      }

      .profil-guru .depth-frame-21 {
        flex-direction: column;
        justify-content: center;
        gap: 4px;
        border-radius: 27px;
        display: flex;
        align-items: center;
        position: relative;
        flex: 1;
      }

      .profil-guru .vector-2 {
        width: 19px;
        left: 2px;
        position: absolute;
        height: 19px;
        top: 2px;
      }

      .profil-guru .text-wrapper-10 {
        position: relative;
        align-self: stretch;
        margin-top: -1.00px;
        font-family: "Public Sans-Medium", Helvetica;
        font-weight: 500;
        color: #111416;
        font-size: 12px;
        letter-spacing: 0;
        line-height: 18px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="profil-guru">
      <div class="depth-frame">
        <div class="div">
          <div class="depth-frame-2">
            <div class="depth-frame-wrapper">
              <div class="vector-wrapper"><img class="vector" src="img/image.svg" /></div>
            </div>
            <div class="div-wrapper"><div class="text-wrapper">e-Absen Sebelas</div></div>
          </div>
          <div class="depth-frame-3"><div class="selamat-datang">Selamat datang, Michael&nbsp;&nbsp;Saputra</div></div>
          <div class="depth-frame-4">
            <div class="depth-frame-5">
              <div class="depth-frame-6"><div class="text-wrapper-2">Akses Data Kehadiran</div></div>
            </div>
          </div>
          <div class="depth-frame-3"><div class="text-wrapper-3">Senin, 15 Juli 2024</div></div>
          <div class="depth-frame-7">
            <div class="user-profile">
              <div class="profile-image">👨‍🏫</div>
              <div class="profile-info">
                <div class="depth-frame-10"><div class="text-wrapper-4">Michael Saputra</div></div>
                <div class="div"><div class="text-wrapper-5">84023456789</div></div>
              </div>
            </div>
          </div>
          <div class="depth-frame-11"><div class="text-wrapper-6">Menu Utama</div></div>
          <div class="depth-frame-12">
            <div class="depth-frame-13">
              <div class="depth-frame-14">
                <div class="depth-frame-6"><div class="text-wrapper-7">Absen Hari ini</div></div>
              </div>
              <div class="depth-frame-15">
                <div class="depth-frame-6"><div class="text-wrapper-8">Riwayat Absensi</div></div>
              </div>
            </div>
          </div>
        </div>
        <div class="div"><div class="depth-frame-16"></div></div>
        <div class="depth-frame-17">
          <div class="depth-frame-18">
            <div class="depth-frame-19">
              <div class="img-wrapper"><img class="img" src="img/vector-0.svg" /></div>
            </div>
            <div class="depth-frame-20"><div class="text-wrapper-9">Beranda</div></div>
          </div>
          <div class="depth-frame-21">
            <div class="depth-frame-19">
              <div class="img-wrapper"><img class="vector-2" src="img/vector-0-2.svg" /></div>
            </div>
            <div class="depth-frame-20"><div class="text-wrapper-10">Profil</div></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>