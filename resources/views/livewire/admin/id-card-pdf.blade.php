<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student ID card</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:opsz,wght@18..144,900&display=swap"
		rel="stylesheet">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Arial, sans-serif;
		}

		body {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background-color: #f1f5f9;
			padding: 20px;
		}

		.student-id-card,
		.student-id-card-back {
			width: 15cm;
			height: 8.75cm;
			background-color: white;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			position: relative;
			overflow: hidden;
			margin-bottom: 1cm;
		}

		.card-body {
			padding: 0.4cm;
			padding-top: 0.3cm;
			padding-bottom: 0.3cm;
			height: 100%;
			position: relative;
			z-index: 1;
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
			background-color: white;
			/* Changed from light gray */
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 0.3cm;
			flex-shrink: 0;
			overflow: hidden;
			border-radius: 7px;
			border: 1px solid #ddd;
		}

		figure.photo-container img {
			width: 100%;
			height: 100%;
			object-fit: cover;
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
			background-image: url('../i../img/cts/bg.png');
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center;
			z-index: 0;
		}

		/* Back Side Styles - Updated to match Front colors */
		.student-id-card-back {
			padding: 0.6cm;
		}

		.address-section {
			margin-bottom: 0.85cm;
		}

		.address-row {
			display: flex;
			margin-bottom: 0.3cm;
			align-items: center;
		}

		h3.address-label {
			font-weight: bold;
			font-size: 0.4cm;
			color: #333;
			width: auto;
			margin-right: 0.2cm;
		}

		p.address-value {
			flex: 1;
			border-bottom: 1px solid #999;
			min-height: 0.5cm;
		}

		.verification-section {
			margin-bottom: 0.6cm;
		}

		.info-table {
			width: 100%;
			border-collapse: collapse;
			table-layout: fixed;
		}

		.info-table th,
		.info-table td {
			border: 1px solid #999;
			padding: 0.1cm 0.2cm;
			height: 0.9cm;
			font-size: 0.35cm;
		}

		th.table-label {
			font-weight: bold;
			color: #333;
			width: 30%;
			text-align: center;
		}

		td.table-value {
			width: 17.5%;
		}

		footer.footer-note {
			text-align: center;
			font-weight: bold;
			font-size: 0.31cm;
			color: #c02c2c;
			margin-top: 0.4cm;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.red-dot {
			display: inline-block;
			width: 0.3cm;
			height: 0.3cm;
			background-color: #c02c2c;
			border-radius: 50%;
			margin: 0 0.5cm;
		}
	</style>
</head>

<body>
	<!-- FRONT SIDE -->
	<section class="student-id-card">
		<div class="watermark" aria-hidden="true"></div>
		<div class="card-body">
			<header>
				<h1 class="college-title">{{ strtoupper(config('app.institute.name')) }}</h1>
				<h2 class="college-subtitle">{{ config('app.institute.subtitle') }}</h2>
				<address class="college-address">{{ config('app.institute.address') }}</address>
			</header>
			<main class="card-content">
				<figure class="photo-container">
					@if($student->dp)
						<img src="{{ public_path('storage/' . $student->dp) }}" alt="Student Photo">
					@endif
				</figure>
				<article class="student-details">
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
							<dd class="detail-value">{{ $student->gurdian_name ?? '' }}</dd>
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
							<dd class="detail-value">{{ $student->blood_group ?? '' }}</dd>
						</div>
					</dl>
				</article>
			</main>
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
		</div>
	</section>

	<!-- BACK SIDE -->
	<section class="student-id-card-back">
		<div class="card-body">
			<header class="address-section">
				<div class="address-row">
					<h3 class="address-label">ADDRESS :</h3>
					<p class="address-value">{{ $student->address ?? '' }}</p>
				</div>
				<div class="address-row">
					<p class="address-value"
						style="width: 100%; border-bottom: 1px solid #999; min-height: 0.5cm; margin-left: 0; margin-top: 0.2cm;">
					</p>
				</div>
			</header>

			<section class="verification-section">
				<table class="info-table">
					<tbody>
						<tr>
							<th scope="row" class="table-label">SESSION</th>
							<td class="table-value"></td>
							<td class="table-value"></td>
							<td class="table-value"></td>
							<td class="table-value"></td>
						</tr>
						<tr>
							<th scope="row" class="table-label">YEAR</th>
							<td class="table-value"></td>
							<td class="table-value"></td>
							<td class="table-value"></td>
							<td class="table-value"></td>
						</tr>
						<tr>
							<th scope="row" class="table-label">SIG. OF ISSUING STAFF</th>
							<td class="table-value"></td>
							<td class="table-value"></td>
							<td class="table-value"></td>
							<td class="table-value"></td>
						</tr>
						<tr>
							<th scope="row" class="table-label">SIG. OF PRINCIPAL</th>
							<td class="table-value"></td>
							<td class="table-value"></td>
							<td class="table-value"></td>
							<td class="table-value"></td>
						</tr>
					</tbody>
				</table>
			</section>

			<footer class="footer-note">
				<span class="red-dot" aria-hidden="true"></span>
				THIS CARD IS NOT TRANSFERABLE
				<span class="red-dot" aria-hidden="true"></span>
			</footer>
		</div>
	</section>
</body>

</html>