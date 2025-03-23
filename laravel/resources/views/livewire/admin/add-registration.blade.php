<div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
	<h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Add Student Registration Number</h2>

	<form wire:submit.prevent="addRegistration">
		<input type="text" wire:model="registration_no" class="border p-2 w-full dark:bg-gray-700 dark:text-white" placeholder="Enter Registration No">
		<button type="submit" class="mt-2 bg-blue-500 text-white p-2 rounded">Add</button>
	</form>

	@if (session()->has('message'))
	<div class="mt-2 text-green-500">{{ session('message') }}</div>
	@endif

	<h3 class="text-lg font-semibold text-gray-900 dark:text-white mt-6">Pending Registrations</h3>
	<ul class="mt-2 space-y-2">
		@foreach($pendingRegistrations as $student)
		<li class="p-2 bg-gray-100 dark:bg-gray-700 rounded">{{ $student->registration_no }}</li>
		@endforeach
	</ul>
</div>
