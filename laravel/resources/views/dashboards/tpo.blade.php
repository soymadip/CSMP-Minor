<x-layouts.app>
	<div>
		<h1>TPO Dashboard</h1>
		{{-- <p>Welcome, Super Admin! You have full access.</p> --}}
		<p>Welcome, {{ auth()->user()->name }}!</p>

	</div>
</x-layouts.app>
