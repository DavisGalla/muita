<x-app-layout>
    <h2 class="text-2xl font-bold mb-4 text-white">Create User</h2>
    <form method="POST" action="{{ route('users.store') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-white" for="username">Username</label>
            <input class="w-[300px] p-2 rounded" type="text" name="username" id="username" required>
        </div>
        <div>
            <label class="block text-white" for="full_name">Full Name</label>
            <input class="w-[300px] p-2 rounded" type="text" name="full_name" id="full_name" required>
        </div>
        <div>
            <label class="block text-white" for="role">Role</label>
            <select class="w-[300px] p-2 rounded" name="role" id="role" required>
                <option value="inspector">Inspector</option>
                <option value="analyst">Analyst</option>
                <option value="admin" >Admin</option>
                <option value="broker">Broker</option>
            </select>
        </div>
        <div>
            <label class="block text-white" for="active">Active</label>
            <select class="w-[300px] p-2 rounded" name="active" id="active" required>
                <option value="1" >True</option>
                <option value="0" >False</option>
            </select>
        </div>
        <div>
            <label class="block text-white" for="password">Password</label>
            <input class="w-[300px] p-2 rounded" type="password" name="password" id="password" required>
        </div>
        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">Create User</button>
        <a href="{{ route('users.index') }}" class="ml-4 text-blue-200 hover:underline">Cancel</a>
    </form>
</x-app-layout>
