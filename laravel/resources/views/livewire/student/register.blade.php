<div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
	<h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Student Registration</h2>

	@if (session()->has('error'))
	<div class="mb-2 text-red-500">{{ session('error') }}</div>
	@endif


	@if(session()->has('message'))
	<div class="bg-green-500 p-2 rounded-md text-white text-center mb-2">
		{{ session('message') }}
	</div>
	@endif


	<form wire:submit.prevent="register">
		<input type="text" wire:model="registration_no" class="border p-2 w-full dark:bg-gray-700 dark:text-white" placeholder="Registration No" required>
		<input type="email" wire:model="email" class="border p-2 w-full dark:bg-gray-700 dark:text-white" placeholder="Email" required>
		<input type="password" wire:model="password" class="border p-2 w-full dark:bg-gray-700 dark:text-white" placeholder="Password" required>
		<input type="password" wire:model="password_confirmation" class="border p-2 w-full dark:bg-gray-700 dark:text-white" placeholder="Confirm Password" required>

		<h3 class="text-lg font-semibold mt-4 text-gray-900 dark:text-white">Personal Details</h3>
		<input type="text" wire:model="name" class="border p-2 w-full dark:bg-gray-700 dark:text-white" placeholder="Full Name" required>
		<input type="date" wire:model="dob" class="border p-2 w-full dark:bg-gray-700 dark:text-white" required>
		<input type="text" wire:model="phone_no" class="border p-2 w-full dark:bg-gray-700 dark:text-white" placeholder="Phone No" required>
		{{--
		<input type="text" wire:model="department" class="border p-2 w-full dark:bg-gray-700 dark:text-white" placeholder="Department" required>
		--}}
		<select wire:model="department" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white" required>
			<option value="">Select Department</option>
			<option value="DCST">DCST</option>
			<option value="DEE">DEE</option>
			<option value="DME">DME</option>
			<option value="DCE">DCE</option>
		</select>

		<input type="number" wire:model="semester" class="border p-2 w-full dark:bg-gray-700 dark:text-white" placeholder="Semester" required>

		<button type="submit" class="mt-4 bg-blue-500 text-white p-2 rounded">Submit</button>
	</form>
</div>
