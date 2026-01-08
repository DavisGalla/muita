<x-app-layout>
    <h2 class="text-2xl font-bold mb-4 text-white">{{$user->username}} Details</h2>
        <p class="text-gray-400"><span class="text-white">ID:</span> {{ $user->id }}</p>
        <p class="text-gray-400"><span class="text-white">Username:</span> {{ $user->username }}</p>
        <p class="text-gray-400"><span class="text-white">Full name:</span> {{ $user->full_name }}</p>
        <p class="text-gray-400"><span class="text-white">Role:</span> {{ $user->role }}</p>
        <p class="text-gray-400"><span class="text-white">Active:</span> 
            @if ($user->active == 1)
                true
            @else
                false
            @endif
        </p>
        <div class="mt-4 flex space-x-4">
            <a href="{{ route('users.edit', $user->id) }}" class="inline-block text-blue-600 hover:underline">Edit</a>
            <a href="{{ route('users.index') }}" class="inline-block text-blue-600 hover:underline">Back to users</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="inline-block text-blue-600 hover:underline" type="submit" onclick="return confirm('Are you sure you want to delete this user?')">
                    Delete
                </button>
            </form>
        </div>
</x-app-layout>