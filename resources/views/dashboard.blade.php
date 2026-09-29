<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('RUCU Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- Welcome -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">

            <div class="p-6">

                <h1 class="text-2xl font-bold text-gray-800">
                    Welcome, {{ Auth::user()->name }} 👋
                </h1>

                <p class="mt-2 text-gray-600">
                    Welcome to the RUCU Student Management Dashboard.
                </p>

            </div>

        </div>


        <!-- Main Statistics -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

            <!-- Total Students -->
            <div class="bg-white p-6 rounded-lg shadow-sm">

                <h3 class="text-gray-500 text-sm font-medium">
                    Total Students
                </h3>

                <p class="mt-2 text-3xl font-bold text-gray-800">
                    {{ $totalStudents }}
                </p>

            </div>


            <!-- System Status -->
            <div class="bg-white p-6 rounded-lg shadow-sm">

                <h3 class="text-gray-500 text-sm font-medium">
                    System Status
                </h3>

                <p class="mt-2 text-3xl font-bold text-green-600">
                    Active
                </p>

            </div>


            <!-- Account -->
            <div class="bg-white p-6 rounded-lg shadow-sm">

                <h3 class="text-gray-500 text-sm font-medium">
                    Account
                </h3>

                <p class="mt-2 text-lg font-semibold text-gray-800">
                    {{ Auth::user()->email }}
                </p>

            </div>

        </div>


        <!-- Course Statistics -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">

            <div class="p-6">

                <h2 class="text-xl font-bold text-gray-800 mb-6">
                    Students by Course
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <!-- Computer Science -->
                    <div class="border rounded-lg p-5">

                        <h3 class="text-gray-600 font-medium">
                            Computer Science
                        </h3>

                        <p class="mt-2 text-3xl font-bold text-blue-600">
                            {{ $computerScience }}
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            Students
                        </p>

                    </div>


                    <!-- Software Engineering -->
                    <div class="border rounded-lg p-5">

                        <h3 class="text-gray-600 font-medium">
                            Software Engineering
                        </h3>

                        <p class="mt-2 text-3xl font-bold text-purple-600">
                            {{ $softwareEngineering }}
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            Students
                        </p>

                    </div>


                    <!-- Information Technology -->
                    <div class="border rounded-lg p-5">

                        <h3 class="text-gray-600 font-medium">
                            Information Technology
                        </h3>

                        <p class="mt-2 text-3xl font-bold text-green-600">
                            {{ $informationTechnology }}
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            Students
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- Recent Students -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">

            <div class="p-6">

                <div class="flex items-center justify-between mb-6">

                    <div>

                        <h2 class="text-xl font-bold text-gray-800">
                            Recent Students
                        </h2>

                        <p class="text-gray-600 mt-1">
                            Recently registered students.
                        </p>

                    </div>


                    <a href="{{ route('students.index') }}"
                       class="text-sm text-blue-600 hover:text-blue-800 font-medium">

                        View All

                    </a>

                </div>


                <div class="overflow-x-auto">

                    <table class="min-w-full divide-y divide-gray-200">

                        <thead class="bg-gray-50">

                            <tr>

                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Name
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Registration Number
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Course
                                </th>

                            </tr>

                        </thead>


                        <tbody class="bg-white divide-y divide-gray-200">

                            @forelse($recentStudents as $student)

                                <tr class="hover:bg-gray-50">

                                    <td class="px-6 py-4 whitespace-nowrap">

                                        <div class="font-medium text-gray-900">
                                            {{ $student->full_name }}
                                        </div>

                                    </td>


                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">

                                        {{ $student->registration_number }}

                                    </td>


                                    <td class="px-6 py-4 whitespace-nowrap">

                                        <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700">

                                            {{ $student->course }}

                                        </span>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="3"
                                        class="px-6 py-6 text-center text-gray-500">

                                        No students registered yet.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <!-- Student Management -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6">

                <div class="flex items-center justify-between mb-4">

                    <div>

                        <h2 class="text-xl font-bold text-gray-800">
                            Student Management
                        </h2>

                        <p class="text-gray-600 mt-1">
                            Manage registered RUCU students.
                        </p>

                    </div>


                    <a href="{{ route('students.index') }}"
                       class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">

                        View Students

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</x-app-layout>