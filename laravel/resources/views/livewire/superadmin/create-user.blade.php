<div class="p-6 bg-white dark:bg-gray-900 shadow rounded-2xl-lg">
	@if (session()->has('message'))
	<div class="bg-green-500 text-white p-2 mb-4 rounded-2xl">
		{{ session('message') }}
	</div>
	@endif

	<form wire:submit.prevent="createUser" class="space-y-4">
		<div>
			<label class="block text-gray-700 dark:text-gray-300">Full Name</label>
			<input type="text" wire:model="name"
				class="w-full border dark:border-gray-600 p-2 rounded-2xl bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-200">
			@error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
		</div>

		<div>
			<label class="block text-gray-700 dark:text-gray-300">Email</label>
			<input type="email" wire:model="email"
				class="w-full border dark:border-gray-600 p-2 rounded-2xl bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-200">
			@error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
		</div>

		<div>
			<label class="block text-gray-700 dark:text-gray-300">Password</label>
			<input type="password" wire:model="password"
				class="w-full border dark:border-gray-600 p-2 rounded-2xl bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-200">
			@error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
		</div>

		<div>
			<label class="block text-gray-700 dark:text-gray-300">Role</label>
			<select wire:model="role"
				class="w-full border dark:border-gray-600 p-2 rounded-2xl bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-200">
				<option value="">Select Role</option>
				@foreach($roles as $role)
				<option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
				@endforeach
			</select>
			@error('role') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
		</div>

		<div>
			<label class="block text-gray-700 dark:text-gray-300">Date of Birth</label>
			<input type="date" wire:model="dob"
				class="w-full border dark:border-gray-600 p-2 rounded-2xl bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-200">
		</div>

		<div>
			<label class="block text-gray-700 dark:text-gray-300">Department</label>
			<select wire:model="department"
				class="w-full border dark:border-gray-600 p-2 rounded-2xl bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-200">
				<option value="">Select Department</option>
				@foreach($departments as $department)
				<option value="{{ $department }}">{{ $department }}</option>
				@endforeach
			</select>
			@error('department') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
		</div>

		<button type="submit"
			class="w-full bg-rose-500 hover:opacity-80 text-white p-2 rounded-2xl transition in-[.dark]:bg-rose-600 in-[.dark]:hover:opacity-80">
			Create User
		</button>
	</form>
</div>
