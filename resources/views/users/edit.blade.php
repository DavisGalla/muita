<x-app-layout>

    <h2 class="text-2xl font-bold mb-4 text-white">Edit User</h2>
    <form method="POST" action="{{ route('users.update', $user->id) }}" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-white" for="username">Username</label>
            <input class="w-[300px] p-2 rounded" type="text" name="username" id="username" value="{{ old('username', $user->username) }}" required>
        </div>
        <div>
            <label class="block text-white" for="full_name">Full Name</label>
            <input class="w-[300px] p-2 rounded" type="text" name="full_name" id="full_name" value="{{ old('full_name', $user->full_name) }}" required>
        </div>
        <div>
            <label class="block text-white" for="role">Role</label>
            <select class="w-[300px] p-2 rounded" name="role" id="role" required>
                <option value="inspector" {{ old('role', $user->role) == 'inspector' ? 'selected' : '' }}>Inspector</option>
                <option value="analyst" {{ old('role', $user->role) == 'analyst' ? 'selected' : '' }}>Analyst</option>
                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="broker" {{ old('role', $user->role) == 'broker' ? 'selected' : '' }}>Broker</option>
            </select>
        </div>
        <div>
            <label class="block text-white" for="active">Active</label>
            <select class="w-[300px] p-2 rounded" name="active" id="active" required>
                <option value="1" {{ old('active', $user->active) == 1 ? 'selected' : '' }}>True</option>
                <option value="0" {{ old('active', $user->active) == 0 ? 'selected' : '' }}>False</option>
            </select>
        </div>
        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">Update User</button>
        <a href="{{ route('users.show', $user->id) }}" class="ml-4 text-blue-200 hover:underline">Cancel</a>
    </form>

</x-app-layout>
