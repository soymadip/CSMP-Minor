<div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Approve Students</h2>

    @if (session()->has('message'))
        <div class="mb-2 text-green-500">{{ session('message') }}</div>
    @endif

    <table class="w-full border-collapse border border-gray-300 dark:border-gray-600">
        <thead>
            <tr class="bg-gray-200 dark:bg-gray-700">
                <th class="border border-gray-300 dark:border-gray-600 p-2">Reg No</th>
                <th class="border border-gray-300 dark:border-gray-600 p-2">Name</th>
                <th class="border border-gray-300 dark:border-gray-600 p-2">Department</th>
                <th class="border border-gray-300 dark:border-gray-600 p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pendingStudents as $student)
                <tr>
                    <td class="border border-gray-300 dark:border-gray-600 p-2">{{ $student->registration_no }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 p-2">{{ $student->name }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 p-2">{{ $student->department }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 p-2">
                        <button wire:click="approve('{{ $student->registration_no }}')" class="bg-green-500 text-white p-2 rounded">Approve</button>
                        <button wire:click="reject('{{ $student->registration_no }}')" class="bg-red-500 text-white p-2 rounded ml-2">Reject</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center p-4">No pending students.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
