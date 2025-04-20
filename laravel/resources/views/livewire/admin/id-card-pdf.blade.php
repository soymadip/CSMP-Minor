<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student ID card</title>
	<style>
	 
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

	 header .college-title {
	     color: #690000;
	     font-size: 0.65cm;
	     font-family: 'Merriweather', serif;
	     font-weight: 900;
	     text-align: center;
	     letter-spacing: 0.02cm;
	 }

	 header .college-subtitle {
	     text-align: center;
	     margin-bottom: 0.1cm;
	     font-size: 0.5cm;
	 }

	 header address.college-address {
	     text-align: center;
	     font-size: 0.35cm;
	     font-weight: bold;
	     margin-bottom: 0.4cm;
	     font-style: normal;
	 }

	 .student-details header.id-title {
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
	     margin-top: 0.21cm;
	     height: auto;
	 }

	 figure.photo-container {
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

	 figure.photo-container img {
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

	 dl.details-list {
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
	     margin-top: 0.05cm;
	 }

	 dt.detail-label {
	     width: 3.8cm;
	     font-weight: bold;
	     margin: 0;
	 }

	 .detail-dash {
	     width: 0.5cm;
	     text-align: center;
	     font-weight: bold;
	 }

	 dd.detail-value {
	     flex: 1;
	     height: 0.6cm;
	     margin-left: 0.4cm;
	     font-weight: normal;
	 }

	 footer.signatures-section {
	     position: absolute;
	     left: 0;
	     right: 0;
	     bottom: 0.16cm;
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
	     width: 4.5cm;
	 }

	 .signature-line {
	     width: 100%;
	     border-top: 1px solid black;
	     margin-bottom: 0.05cm;
	     margin-top: 0.88cm;
	 }

	 p.signature-text {
	     font-weight: bold;
	     font-size: 0.28cm;
	     text-align: center;
	     white-space: nowrap;
	 }

	 .watermark {
	     position: absolute;
	     top: 53%;
	     left: 51%;
	     transform: translate(-50%, -50%);
	     opacity: 0.07;
	     width: 8.4cm;
	     height: 8.4cm;
	     background-size: contain;
	     background-repeat: no-repeat;
	     background-position: center;
	     z-index: 0;
	 }

	</style>
    </head>
    <body>
	<main class="student-id-card">
	    <img class="watermark" src="{{ public_path('icons/cts.png') }}" alt="watermark">
            <article class="card-body">
		<header>
                    <h1 class="college-title">THE CALCUTTA TECHNICAL SCHOOL</h1>
                    <h2 class="college-subtitle">Govt. of W.B</h2>
                    <address class="college-address">110, S.N. BANERJEE ROAD, KOLKATA-700 013</address>
		</header>
		<section class="card-content">
                    <figure class="photo-container">
			Photo
                    </figure>
                    <section class="student-details">
			<header class="id-title">STUDENT ID CARD</header>
			<dl class="details-list">
                            <div class="detail-row">
				<dt class="detail-label">NAME</dt>
				<span class="detail-dash">:</span>
				<dd class="detail-value">{{ $student->name }}</dd>
                            </div>
                            <div class="detail-row">
				<dt class="detail-label">GUARDIAN'S NAME</dt>
				<span class="detail-dash">:</span>
				<dd class="detail-value">{{ $student->gurdian_name }}</dd>
                            </div>
                            <div class="detail-row">
				<dt class="detail-label">DEPARTMENT</dt>
				<span class="detail-dash">:</span>
				<dd class="detail-value">{{ $student->department }}</dd>
                            </div>
                            <div class="detail-row">
				<dt class="detail-label">REGISTRATION NO.</dt>
				<span class="detail-dash">:</span>
				<dd class="detail-value">{{ $student->registration_no }}</dd>
                            </div>
                            <div class="detail-row">
				<dt class="detail-label">DATE OF ISSUE</dt>
				<span class="detail-dash">:</span>
				<dd class="detail-value">{{ now()->format('d-m-Y') }}</dd>
                            </div>
                            <div class="detail-row">
				<dt class="detail-label">BLOOD GROUP</dt>
				<span class="detail-dash">:</span>
				<dd class="detail-value">{{ $student->blood_group }}</dd>
                            </div>
			</dl>
                    </section>
		</section>
		<footer class="signatures-section">
                    <div class="principal-signature">
			<div class="signature-line"></div>
			<p class="signature-text">SIGNATURE OF PRINCIPAL</p>
                    </div>
                    <div class="student-signature">
			<div class="signature-line"></div>
			<p class="signature-text">SIGNATURE OF STUDENT</p>
                    </div>
		</footer>
            </article>
	</main>
    </body>
</html>
