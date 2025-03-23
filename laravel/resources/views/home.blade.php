<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Calcutta Technical School</title>
	<link href={{ asset('css/home.css') }} rel="stylesheet">
</head>

<body>
	<header>
		<h1>The Calcutta Technical School</h1>
		<p>110, S.N Banerjee Road, Kolkata-700 013</p>
		<div class="auth-links">
			@auth
			<a href="{{ route('dashboard') }}">Dashboard</a>
			@else
			<div class="dropdown">
				<button class="dropbtn">Portal</button>
				<div class="dropdown-content" style="right: 0;">
					<a href="{{ route('login') }}">Login</a>
					<a href="{{ route('student.registration') }}">Student Register</a>
				</div>
			</div>
			@endauth

		</div>
	</header>

	<nav>
		<ul>
			<li><a href="#"><img src="{{ asset('icons/home.png') }}" alt="Home Icon"> Home</a></li>
			<li><a href="#"><img src="{{  asset('icons/about.png') }}" alt="About Icon"> About</a></li>
			<li><a href="#"><img src="{{ asset('icons/courses.png') }}" alt="Courses Icon"> Courses</a></li>
			<li><a href="#"><img src="{{ asset('icons/contact.png') }}" alt="Contact Icon"> Contact</a></li>
		</ul>
	</nav>

	<section>
		<h2>Contact Details</h2>
		<p>110, S.N Banerjee Road</p>
		<p>New Market</p>
		<p>Kolkata, 700 013</p>
		<p>0123456789</p>
		<p>abc123@gmail.com</p>
	</section>

	<footer>
		<p>&copy; {{ date('Y') }} The Calcutta Technical School</p>
	</footer>
</body>

</html>
