<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ __('Student Details') }}</title>

	<script src="https://cdn.tailwindcss.com"></script>

	@livewireStyles


</head>

<body class="bg-gray-900 text-white min-h-screen flex flex-col">

	<main>

		{{ $slot }}

	</main>

	<footer class="text-center py-4 bg-gray-800 mt-6">
        <p>&copy; {{ date('Y') }} Student Management System. All rights reserved.</p>
	</footer>
	
	 @livewireScripts
</body>

</html>
