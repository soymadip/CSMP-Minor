<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
	<h2 class="text-2xl font-bold mb-4">Student Login</h2>

	@if (session()->has('error'))
	<div class="text-red-500">{{ session('error') }}</div>
	@endif

	<form wire:submit="login">
		<div class="mb-4">
			<label class="block">Registration No</label>
			<input type="text" wire:model="registration_no" class="w-full border p-2 rounded">
		</div>

		<div class="mb-4">
			<label class="block">Password</label>
			<input type="password" wire:model="password" class="w-full border p-2 rounded">
		</div>

		<button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
	</form>
</div>
