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
        background-color: #f5f5f5;
      }
      /* a blue color as a generic focus style */
      button:focus-visible {
        outline: 2px solid #4a90e2 !important;
        outline: -webkit-focus-ring-color auto 5px !important;
      }
      a {
        text-decoration: none;
      }

      .form-absen-hari-ini {
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: start;
        width: 100vw;
        min-height: 100vh;
        padding: 20px 0;
      }

      .form-absen-hari-ini .div {
        background-color: #ffffff;
        width: 412px;
        min-height: 917px;
        position: relative;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        border-radius: 0;
        overflow: hidden;
      }

      /* Header */
      .form-absen-hari-ini .header {
        background-color: #4A90E2;
        height: 60px;
        display: flex;
        align-items: center;
        padding: 0 16px;
        position: relative;
      }

      .form-absen-hari-ini .back-button {
        width: 24px;
        height: 24px;
        cursor: pointer;
      }

      .form-absen-hari-ini .back-arrow {
        width: 100%;
        height: 100%;
        fill: white;
      }

      .form-absen-hari-ini .header-title {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        color: #ffffff;
        font-size: 18px;
      }

      /* Class selector */
      .form-absen-hari-ini .class-selector {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(255,255,255,0.2);
        border-radius: 15px;
        padding: 6px 12px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
      }

      .form-absen-hari-ini .class-text {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        color: #ffffff;
        font-size: 14px;
      }

      .form-absen-hari-ini .dropdown-arrow {
        width: 12px;
        height: 12px;
        fill: white;
      }

      /* Table */
      .form-absen-hari-ini .table-container {
        padding: 20px;
      }

      .form-absen-hari-ini .attendance-table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        border: 1px solid #e0e0e0;
      }

      .form-absen-hari-ini .table-header {
        background-color: #f8f9fa;
        border-bottom: 2px solid #e0e0e0;
      }

      .form-absen-hari-ini .table-header th {
        padding: 12px 8px;
        text-align: center;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-size: 14px;
        color: #333;
        border-right: 1px solid #e0e0e0;
      }

      .form-absen-hari-ini .table-header th:last-child {
        border-right: none;
      }

      .form-absen-hari-ini .table-row {
        border-bottom: 1px solid #e0e0e0;
      }

      .form-absen-hari-ini .table-row:hover {
        background-color: #f8f9fa;
      }

      .form-absen-hari-ini .table-cell {
        padding: 12px 8px;
        text-align: center;
        border-right: 1px solid #e0e0e0;
        vertical-align: middle;
      }

      .form-absen-hari-ini .table-cell:last-child {
        border-right: none;
      }

      .form-absen-hari-ini .student-number {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 14px;
        color: #333;
      }

      .form-absen-hari-ini .student-name {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 14px;
        color: #333;
        text-align: left;
      }

      .form-absen-hari-ini .student-id {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-size: 12px;
        color: #666;
        text-align: left;
        margin-top: 2px;
      }

      .form-absen-hari-ini .status-badge {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 12px;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 12px;
        text-align: center;
        min-width: 50px;
      }

      .form-absen-hari-ini .status-hadir {
        background-color: #d4edda;
        color: #155724;
      }

      .form-absen-hari-ini .status-sakit {
        background-color: #fff3cd;
        color: #856404;
      }

      .form-absen-hari-ini .status-izin {
        background-color: #cce7ff;
        color: #004085;
      }

      .form-absen-hari-ini .status-alpa {
        background-color: #f8d7da;
        color: #721c24;
      }

      /* Bottom Navigation */
      .form-absen-hari-ini .bottom-nav {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 70px;
        background-color: white;
        border-top: 1px solid #e0e0e0;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 0 20px;
      }

      .form-absen-hari-ini .nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
        cursor: pointer;
        flex: 1;
      }

      .form-absen-hari-ini .nav-icon {
        width: 24px;
        height: 24px;
      }

      .form-absen-hari-ini .nav-text {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 12px;
        color: #666;
      }

      .form-absen-hari-ini .nav-item.active .nav-text {
        color: #333;
      }

      /* Name column width adjustment */
      .form-absen-hari-ini .col-no {
        width: 15%;
      }

      .form-absen-hari-ini .col-nama {
        width: 55%;
      }

      .form-absen-hari-ini .col-status {
        width: 30%;
      }
    </style>
  </head>
  <body>
    <div class="form-absen-hari-ini">
      <div class="div">
        <!-- Header -->
        <div class="header">
          <div class="back-button">
            <svg class="back-arrow" viewBox="0 0 24 24">
              <path d="M19 12H5M12 19L5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="header-title">Absen Hari Ini</div>
          <div class="class-selector">
            <span class="class-text">Kelas</span>
            <svg class="dropdown-arrow" viewBox="0 0 24 24">
              <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>

        <!-- Table -->
        <div class="table-container">
          <table class="attendance-table">
            <thead class="table-header">
              <tr>
                <th class="col-no">No.</th>
                <th class="col-nama">Nama</th>
                <th class="col-status">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-row">
                <td class="table-cell">
                  <div class="student-number">01.</div>
                </td>
                <td class="table-cell">
                  <div class="student-name">Siti Ropeah</div>
                  <div class="student-id">000000000</div>
                </td>
                <td class="table-cell">
                  <span class="status-badge status-hadir">Hadir</span>
                </td>
              </tr>
              <tr class="table-row">
                <td class="table-cell">
                  <div class="student-number">02.</div>
                </td>
                <td class="table-cell">
                  <div class="student-name">Suhendi</div>
                  <div class="student-id">000000000</div>
                </td>
                <td class="table-cell">
                  <span class="status-badge status-hadir">Hadir</span>
                </td>
              </tr>
              <tr class="table-row">
                <td class="table-cell">
                  <div class="student-number">03.</div>
                </td>
                <td class="table-cell">
                  <div class="student-name">Sirandim</div>
                  <div class="student-id">000000000</div>
                </td>
                <td class="table-cell">
                  <span class="status-badge status-sakit">Sakit</span>
                </td>
              </tr>
              <tr class="table-row">
                <td class="table-cell">
                  <div class="student-number">04.</div>
                </td>
                <td class="table-cell">
                  <div class="student-name">Masri</div>
                  <div class="student-id">000000000</div>
                </td>
                <td class="table-cell">
                  <span class="status-badge status-izin">Izin</span>
                </td>
              </tr>
              <tr class="table-row">
                <td class="table-cell">
                  <div class="student-number">05.</div>
                </td>
                <td class="table-cell">
                  <div class="student-name">Dadang Pedut</div>
                  <div class="student-id">000000000</div>
                </td>
                <td class="table-cell">
                  <span class="status-badge status-alpa">Alpa</span>
                </td>
              </tr>
              <tr class="table-row">
                <td class="table-cell">
                  <div class="student-number">06.</div>
                </td>
                <td class="table-cell">
                  <div class="student-name">Anggita Saras</div>
                  <div class="student-id">000000000</div>
                </td>
                <td class="table-cell">
                  <span class="status-badge status-hadir">Hadir</span>
                </td>
              </tr>
              <tr class="table-row">
                <td class="table-cell">
                  <div class="student-number">07.</div>
                </td>
                <td class="table-cell">
                  <div class="student-name">Santi Susanti</div>
                  <div class="student-id">000000000</div>
                </td>
                <td class="table-cell">
                  <span class="status-badge status-hadir">Hadir</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Bottom Navigation -->
        <div class="bottom-nav">
          <div class="nav-item">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke-width="2"/>
              <polyline points="9,22 9,12 15,12 15,22" stroke-width="2"/>
            </svg>
            <span class="nav-text">Beranda</span>
          </div>
          <div class="nav-item active">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke-width="2"/>
              <circle cx="12" cy="7" r="4" stroke-width="2"/>
            </svg>
            <span class="nav-text">Profil</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>