<div class="max-w-lg mx-auto bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-4">Student Registration</h2>

    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="register">
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Registration Number</label>
            <input type="text" wire:model="registration_no" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
            @error('registration_no') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Email</label>
            <input type="email" wire:model="email" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Password</label>
            <input type="password" wire:model="password" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Confirm Password</label>
            <input type="password" wire:model="password_confirmation" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Full Name</label>
            <input type="text" wire:model="name" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Date of Birth</label>
            <input type="date" wire:model="dob" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
            @error('dob') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Phone Number</label>
            <input type="text" wire:model="phone_no" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
            @error('phone_no') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Department</label>
            <input type="text" wire:model="department" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
            @error('department') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Semester</label>
            <input type="number" wire:model="semester" class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
            @error('semester') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Register</button>
    </form>
</div>
