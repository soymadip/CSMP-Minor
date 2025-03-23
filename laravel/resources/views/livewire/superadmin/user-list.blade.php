<div class="container mx-auto p-6">
	<h2 class="text-2xl font-bold mb-4">User Management</h2>


	<input type="text" wire:model.debounce.500ms="search" placeholder="Search Users..."
		class="w-full p-2 mb-4 border rounded-lg shadow-sm bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-300">


	<div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg">
		<table class="w-full border-collapse">
			<thead>
				<tr class="bg-gray-200 dark:bg-gray-700">
					<th class="p-3 text-left">Name</th>
					<th class="p-3 text-left">Email</th>
					<th class="p-3 text-left">Role</th>
					<th class="p-3 text-left">Department</th>
					<th class="p-3 text-left">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr class="border-b dark:border-gray-700">
					<td class="p-3">{{ $user->name }}</td>
					<td class="p-3">{{ $user->email }}</td>
					<td class="p-3">
						@foreach($user->roles as $role)
						<span class="px-2 py-1 bg-blue-500 text-white rounded">{{ ucfirst($role->name) }}</span>
						@endforeach
					</td>
					<td class="p-3">{{ $user->profile->department ?? 'Not Assigned' }}</td>
					<td class="p-3">
						<button class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</button>
						<button class="bg-red-500 text-white px-3 py-1 rounded ml-2">Delete</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	
	<div class="mt-4">
		{{ $users->links() }}
	</div>
</div>
