<div class="p-4 bg-gray-800 text-white">
    <h2 class="text-xl font-bold mb-4">Students in {{ Auth::user()->profile->department }}</h2>

    <table class="w-full border-collapse border border-gray-600">
        <thead>
            <tr class="bg-gray-900 text-white">
                <th class="border border-gray-600 px-4 py-2">Name</th>
                <th class="border border-gray-600 px-4 py-2">Registration No</th>
                <th class="border border-gray-600 px-4 py-2">DOB</th>
                <th class="border border-gray-600 px-4 py-2">Phone</th>
                <th class="border border-gray-600 px-4 py-2">Department</th>
                <th class="border border-gray-600 px-4 py-2">Semester</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr class="bg-gray-700 text-white">
                    <td class="border border-gray-600 px-4 py-2">{{ $student->name }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->registration_no }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->dob }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->phone_no }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->department }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $student->semester }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-gray-400 py-4">No students found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
    <div wire:key="pagination">
        {{ $students->links() }}
    </div>
</div>
