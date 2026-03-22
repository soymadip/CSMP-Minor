<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head', ['title' => $title ?? 'Student Registration'])
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
