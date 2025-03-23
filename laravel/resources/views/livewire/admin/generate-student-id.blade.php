<div class="p-6 bg-white dark:bg-gray-900 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-gray-100">Generate Student ID Cards</h2>
    
    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300 dark:border-gray-700">
            <thead>
                <tr class="bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-200">
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Name</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Registration No</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Department</th>
		    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Phone No</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr class="odd:bg-gray-50 even:bg-white dark:odd:bg-gray-800 dark:even:bg-gray-900 text-gray-900 dark:text-gray-200">
                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $student->name }}</td>
                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $student->registration_no }}</td>
                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $student->department }}</td>
		    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $student->phone_no }}</td>
                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">
                        <button wire:click="downloadPDF('{{ $student->registration_no }}')" 
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-1 rounded transition dark:bg-blue-600 dark:hover:bg-blue-700">
                            Download ID Card
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
