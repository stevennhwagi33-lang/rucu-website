<x-app-layout>

    <x-slot name="header">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Welcome, {{ auth()->user()->name }}
            </p>
        </div>

        <span class="px-3 py-1 text-sm font-semibold rounded-full
            {{ auth()->user()->role === 'admin'
                ? 'bg-red-100 text-red-700'
                : 'bg-blue-100 text-blue-700' }}">
            {{ ucfirst(auth()->user()->role) }}
        </span>
    </div>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Total Students -->
                <div class="bg-white shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Total Students
                    </h3>

                    <p class="text-4xl font-bold text-blue-600 mt-3">
                        {{ $totalStudents }}
                    </p>

                    <a href="{{ url('/students') }}"
                       class="inline-block mt-5 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        View Students
                    </a>
                </div>

                <!-- Computer Science -->
                <div class="bg-white shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Computer Science
                    </h3>

                    <p class="text-4xl font-bold text-green-600 mt-3">
                        {{ $computerScience }}
                    </p>

                    <a href="{{ url('/students') }}"
                       class="inline-block mt-5 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                        View Students
                    </a>
                </div>

                <!-- Software Engineering -->
                <div class="bg-white shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Software Engineering
                    </h3>

                    <p class="text-4xl font-bold text-purple-600 mt-3">
                        {{ $softwareEngineering }}
                    </p>

                    <a href="{{ url('/students') }}"
                       class="inline-block mt-5 bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">
                        View Students
                    </a>
                </div>
                <!-- Information Technology -->
<div class="bg-white shadow-sm rounded-lg p-6">
    <h3 class="text-lg font-semibold text-gray-800">
        Information Technology
    </h3>

    <p class="text-4xl font-bold text-orange-600 mt-3">
        {{ $informationTechnology }}
    </p>

    <a href="{{ url('/students') }}"
       class="inline-block mt-5 bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700">
        View Students
    </a>
</div>

            </div>

            <!-- Student Management -->
            <div class="mt-8">
                <a href="{{ url('/students') }}"
                   class="inline-block bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                    Student Management
                </a>
            </div>
            <!-- Recent Students -->
<div class="mt-8 bg-white shadow-sm rounded-lg p-6">

    <div class="flex items-center justify-between mb-5">
        <h3 class="text-lg font-semibold text-gray-800">
            Recent Students
        </h3>

        <a href="{{ url('/students') }}"
           class="text-sm text-blue-600 hover:text-blue-800">
            View All
        </a>
    </div>

    <div class="overflow-x-auto">

        <table class="w-full text-left border-collapse">

            <thead>
                <tr class="border-b bg-gray-50">
                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">
                        Name
                    </th>

                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">
                        Registration Number
                    </th>

                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">
                        Course
                    </th>

                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">
                        Email
                    </th>
                </tr>
            </thead>

            <tbody>

                @forelse($recentStudents as $student)

                    <tr class="border-b hover:bg-gray-50">

                        <td class="px-4 py-3 text-sm text-gray-800">
                            {{ $student->full_name }}
                        </td>

                        <td class="px-4 py-3 text-sm text-gray-600">
                            {{ $student->registration_number }}
                        </td>

                        <td class="px-4 py-3 text-sm text-gray-600">
                            {{ $student->course }}
                        </td>

                        <td class="px-4 py-3 text-sm text-gray-600">
                            {{ $student->email }}
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="4"
                            class="px-4 py-6 text-center text-gray-500">
                            No students found.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

        </div>
    </div>

</x-app-layout>