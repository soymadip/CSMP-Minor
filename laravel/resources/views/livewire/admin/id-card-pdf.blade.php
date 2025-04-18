<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Student ID card</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Merriweather:opsz,wght@18..144,900&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }

      body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #565252;
      }

      .student-id-card {
        width: 15cm;
        height: 8.75cm;
        background-color: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
      }

      .card-body {
        padding: 0.4cm;
        padding-top: 0.3cm;
        padding-bottom: 0.3cm;
        height: 100%;
        position: relative;
      }

      .college-title {
        color: #690000;
        font-size: 0.65cm;
        font-family: "Merriweather", serif;
        font-weight: 900;
        text-align: center;
        letter-spacing: 0.02cm;
      }

      .college-subtitle {
        text-align: center;
        margin-bottom: 0.1cm;
        font-size: 0.5cm;
      }

      .college-address {
        text-align: center;
        font-size: 0.35cm;
        font-weight: bold;
        margin-bottom: 0.4cm;
      }

      .id-title {
        background-color: #c02c2c;
        color: white;
        font-size: 0.55cm;
        font-weight: bold;
        text-align: center;
        padding: 0.15cm 0;
        width: 100%;
        margin: 0 0 0.29cm 0;
        border-radius: 0.2cm;
        letter-spacing: 0.03cm;
      }

      .card-content {
        display: flex;
        margin-top: 0.25cm;
        height: auto;
      }

      .photo-container {
        width: 3.2cm;
        height: 4.2cm;
        margin-right: 0.39cm;
        margin-top: 0.3cm;
        background-color: #f9f9f9;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 0.3cm;
        flex-shrink: 0;
        overflow: hidden;
        border-radius: 7px;
      }

      .photo-container img {
        max-width: 99%;
        max-height: 99%;
        object-fit: contain;
        border-radius: 4px;
      }

      .student-details {
        flex: 1;
        display: flex;
        flex-direction: column;
      }

      .detail-row {
        margin-bottom: 0.15cm;
        font-size: 0.35cm;
        display: flex;
        height: 0.42cm;
        margin-left: 0.1cm;
      }

      .student-details .detail-row:first-child {
        margin-top: 0.3cm;
      }

      .detail-label {
        width: 3.8cm;
        font-weight: bold;
      }

      .detail-dash {
        width: 0.5cm;
        text-align: center;
        font-weight: bold;
      }

      .detail-value {
        flex: 1;
        height: 0.6cm;
        margin-left: 0.4cm;
        font-weight: normal;
      }

      .signatures-section {
        position: absolute;
        left: 0;
        right: 0;
        width: 100%;
        padding: 0 0.5cm;
        display: flex;
        justify-content: space-between;
      }

      .student-signature,
      .principal-signature {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
      }

      .signature-line {
        width: 100%;
        border-top: 1px solid black;
        margin-bottom: 0.05cm;
        margin-top: 0.88cm;
      }

      .signature-text {
        font-weight: bold;
        font-size: 0.28cm;
        text-align: center;
        margin-top: 0.015cm;
      }

      .watermark {
        position: absolute;
        top: 53%;
        left: 51%;
        transform: translate(-50%, -50%);
        opacity: 0.07;
        width: 8.4cm;
        height: 8.4cm;
        background-image: url("../icons/cts.png");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        z-index: 0;
      }
    </style>
  </head>
  <body>
    <div class="student-id-card">
      <div class="card-body">
        <div class="watermark"></div>
        <h1 class="college-title">THE CALCUTTA TECHNICAL SCHOOL</h1>
        <h2 class="college-subtitle">Govt. of W.B</h2>
        <h3 class="college-address">
          110, S.N. BANERJEE ROAD, KOLKATA-700 013
        </h3>
        <div class="card-content">
          <div class="photo-container">
            <img src="{{ $student->dp }}" alt="Student Pic" />
          </div>
          <div class="student-details">
            <div class="id-title">STUDENT ID CARD</div>
            <div class="detail-row">
              <div class="detail-label">NAME</div>
              <div class="detail-dash">:</div>
              <div class="detail-value">{{ $student->name }}</div>
            </div>
            <div class="detail-row">
              <div class="detail-label">GUARDIAN'S NAME</div>
              <div class="detail-dash">:</div>
              <div class="detail-value">{{ $student->gurdian_name }}</div>
            </div>
            <div class="detail-row">
              <div class="detail-label">DEPARTMENT</div>
              <div class="detail-dash">:</div>
              <div class="detail-value">{{ $student->department }}</div>
            </div>
            <div class="detail-row">
              <div class="detail-label">REGISTRATION NO.</div>
              <div class="detail-dash">:</div>
              <div class="detail-value">{{ $student->registration_no }}</div>
            </div>
            <div class="detail-row">
              <div class="detail-label">DATE OF ISSUE</div>
              <div class="detail-dash">:</div>
              <div class="detail-value">{{ $student->date_of_issue }}</div>
            </div>
            <div class="detail-row">
              <div class="detail-label">BLOOD GROUP</div>
              <div class="detail-dash">:</div>
              <div class="detail-value">{{ $student->blood_group }}</div>
            </div>
          </div>
        </div>
        <div class="signatures-section">
          <div class="principal-signature">
            <div class="signature-line"></div>
            <div class="signature-text">SIGNATURE OF PRINCIPAL</div>
          </div>
          <div class="student-signature">
            <div class="signature-line"></div>
            <div class="signature-text">SIGNATURE OF STUDENT</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
