<x-app-layout>

    <h2 class="text-2xl font-bold mb-4 text-white">Edit inspection</h2>
    <form method="POST" action="{{ route('inspections.reviewed', $inspection->id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-white" for="decision">Decision</label>
            <select class="w-[300px] p-2 rounded" name="decision" id="decision" required>
                <option value="release" {{ old('decision', $inspection->decision) == 'release' ? 'selected' : '' }}>Release</option>
                <option value="reject" {{ old('decision', $inspection->decision) == 'reject' ? 'selected' : '' }}>Reject</option>
                <option value="hold" {{ old('decision', $inspection->decision) == 'hold' ? 'selected' : '' }}>Rold</option>
                
            </select>
        </div>

        <div>
            <label class="block text-white" for="statement">Statement</label>
            <input class="w-[300px] p-2 rounded" type="text" name="statement" id="statement" value="{{ old('statement', $inspection->statement) }}" required>
        </div>

        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">Finish review</button>
        <a href="{{ route('inspections.show', $inspection->id) }}" class="ml-4 text-blue-200 hover:underline">Cancel</a>
    </form>

</x-app-layout>