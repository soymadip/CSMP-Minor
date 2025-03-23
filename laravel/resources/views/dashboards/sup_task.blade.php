<x-layouts.app>
	<div>
		<h4 class="text-md font-bold mt-4">Manage Users</h4>
		@if(session()->has('message'))
		<div class="bg-green-500 text-white p-2 mb-4">
			{{ session('message') }}
		</div>
		@endif

		<form class="bg-white shadow-md rounded-lg p-6">
			@csrf

			<div class="mb-4">
				<label class="block text-gray-700 font-semibold">Full Name</label>
				<input type="text" name="name" placeholder="Full Name" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400" required>
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 font-semibold">Email</label>
				<input type="email" name="email" placeholder="Email" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400" required>
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 font-semibold">Password</label>
				<input type="password" placeholder="Password" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400">
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 font-semibold">Role</label>
				<select name="role" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400" required>
					<option value="">Select Role</option>
					@foreach($roles as $role)
					<option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
					@endforeach
				</select>
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 font-semibold">Date of Birth</label>
				<input type="date" name="dob" placeholder="Date of Birth" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400">
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 font-semibold">Department</label>
				<select name="department" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400" required>
					<option value="">Select Department</option>
					@foreach($departments as $department)
					<option value="{{ $department }}">{{ $department }}</option>
					@endforeach
				</select>
			</div>

			<button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200">Create User</button>

		</form>
	</div>
</x-layouts.app>
