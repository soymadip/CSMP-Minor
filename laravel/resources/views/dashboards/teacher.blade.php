<x-layouts.app>
	<div>
		<h1>Teacher Dashboard</h1>
		{{-- <p>Welcome, Super Admin! You have full access.</p> --}}
		<p>Welcome, {{ auth()->user()->name }}!</p>

	</div>
</x-layouts.app>
