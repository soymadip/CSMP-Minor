<div class="max-w-lg mx-auto bg-gray-800 text-white p-6 rounded-lg shadow-lg">
	<h2 class="text-xl font-bold mb-4">Student Personal Details</h2>

	@if(session()->has('message'))
	<div class="bg-green-500 p-2 rounded-md text-white text-center mb-2">
		{{ session('message') }}
	</div>
	@endif

	<form wire:submit="submit" class="space-y-4">
		<input type="text" wire:model="name" placeholder="Full Name" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white">
		@error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

		<input type="text" wire:model="registration_no" placeholder="Registration No." class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white">
		@error('registration_no') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

		<input type="date" wire:model="dob" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white">
		@error('dob') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

		<input type="text" wire:model="phone_no" placeholder="Phone No." class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white">
		@error('phone_no') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

		<select wire:model="department" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white">
			<option value="">Select Department</option>
			<option value="DCST">DCST</option>
			<option value="DEE">DEE</option>
			<option value="DME">DME</option>
			<option value="DCE">DCE</option>
		</select>
		@error('department') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

		<input type="number" wire:model="semester" placeholder="Semester" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white">
		@error('semester') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

		<button type="submit" class="w-full bg-blue-500 p-2 rounded hover:bg-blue-600">Submit</button>
	</form>
</div>
