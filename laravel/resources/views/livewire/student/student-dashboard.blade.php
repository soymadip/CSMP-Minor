<div class="p-6">
    <h2 class="text-2xl font-bold">Welcome, {{ Auth::guard('student')->user()->registration_no }}</h2>
    <button wire:click="logout" class="bg-red-500 text-white p-2 rounded">Logout</button>
</div>
