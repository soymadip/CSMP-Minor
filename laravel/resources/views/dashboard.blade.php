<x-app-layout>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
				<h3>Welcome, {{ auth()->user()->name }}!</h3>

				@if(auth()->check() && auth()->user()->hasRole('superadmin'))
				<a href="{{ route('sup_admin.dashboard') }}" class="bg-gray-700 text-white px-4 py-2 rounded">Superadmin Panel</a>
				@elseif((auth()->check() && auth()->user()->hasRole('admin'))
				<a href="{{ route('admin.dashboard') }}" class="bg-gray-700 text-white px-4 py-2 rounded">Admin Panel</a>
				@elseif((auth()->check() && auth()->user()->hasRole('hod'))
				<a href="{{ route('hod.dashboard') }}" class="bg-gray-700 text-white px-4 py-2 rounded">HOD Panel</a>
				@elseif((auth()->check() && auth()->user()->hasRole('user'))
				<a href="{{ route('user.dashboard') }}" class="bg-gray-700 text-white px-4 py-2 rounded">User Panel</a>
				@endif
			</div>
		</div>
	</div>
</x-app-layout>
