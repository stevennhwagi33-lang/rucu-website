<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User Management
        </h2>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-lg overflow-hidden">

                <div class="p-6 border-b">
                    <h3 class="text-lg font-semibold text-gray-800">
                        System Users
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Manage users and their roles
                    </p>
                </div>

                <div class="overflow-x-auto">

                    <table class="w-full text-left">

                        <thead class="bg-gray-50 border-b">
                            <tr>

                                <th class="px-6 py-3 text-sm font-semibold text-gray-600">
                                    ID
                                </th>

                                <th class="px-6 py-3 text-sm font-semibold text-gray-600">
                                    Name
                                </th>

                                <th class="px-6 py-3 text-sm font-semibold text-gray-600">
                                    Email
                                </th>

                                <th class="px-6 py-3 text-sm font-semibold text-gray-600">
                                    Role
                                </th>

                                <th class="px-6 py-3 text-sm font-semibold text-gray-600">
                                    Created
                                </th>

                                <th class="px-6 py-3 text-sm font-semibold text-gray-600">
                                    Action
                                </th>

                            </tr>
                        </thead>

                        <tbody>

                            @forelse($users as $user)

                                <tr class="border-b hover:bg-gray-50">

                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        {{ $user->id }}
                                    </td>

                                    <td class="px-6 py-4 text-sm font-medium text-gray-800">
                                        {{ $user->name }}
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $user->email }}
                                    </td>

                                    <td class="px-6 py-4">

                                        <form
                                            action="{{ route('users.updateRole', $user->id) }}"
                                            method="POST"
                                        >
                                            @csrf
                                            @method('PATCH')

                                            <select
                                                name="role"
                                                onchange="this.form.submit()"
                                                class="text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                            >

                                                <option
                                                    value="admin"
                                                    {{ $user->role === 'admin' ? 'selected' : '' }}
                                                >
                                                    Admin
                                                </option>

                                                <option
                                                    value="user"
                                                    {{ $user->role === 'user' ? 'selected' : '' }}
                                                >
                                                    User
                                                </option>

                                            </select>

                                        </form>

                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $user->created_at->format('d M Y') }}
                                    </td>

                                    <td class="px-6 py-4">

                                        @if($user->id !== auth()->id())

                                            <form
                                                action="{{ route('users.destroy', $user->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this user?');"
                                            >

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="bg-red-600 text-white px-3 py-2 rounded-lg hover:bg-red-700"
                                                >
                                                    Delete
                                                </button>

                                            </form>

                                        @else

                                            <span class="text-sm text-gray-400">
                                                Current User
                                            </span>

                                        @endif

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="6"
                                        class="px-6 py-6 text-center text-gray-500"
                                    >
                                        No users found.
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