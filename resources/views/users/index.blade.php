<x-app-layout>
    <div class="flex justify-end p-6">
        <a href="{{ route('users.create') }}" class="bg-gray-700 hover:bg-gray-8 00 text-white px-4 py-2 rounded">Create User</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2  gap-6 p-6">
        @foreach ($users as $user)
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">
                <span class="text-xs text-gray-400">ID:</span>
                <p class="font-bold text-white mb-2">{{ $user->id }}</p>

                <span class="text-xs text-gray-400">Username:</span>
                <p class="mb-2 text-white">{{ $user->username}}</p>

                <span class="text-xs text-gray-400">Role:</span>
                <p class="mb-2 text-white" >{{ $user->role }}</p>

                <a href="{{ route('users.show', $user->id) }}" class="bg-blue-950 hover:bg-blue-900 px-2 py-1 rounded text-white" >View</a>
            </div>
        @endforeach
    </div>
</x-app-layout>