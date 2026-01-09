<x-app-layout>
    <h2 class="text-2xl font-bold mb-4 text-white">INspection Details</h2>
        <p class="text-gray-400"><span class="text-white">ID:</span> {{ $inspection->id }}</p>
        <p class="text-gray-400"><span class="text-white">Case ID:</span> {{ $inspection->keis_id }}</p>
        <p class="text-gray-400"><span class="text-white">Type:</span> {{ $inspection->type }}</p>
        <p class="text-gray-400"><span class="text-white">is reviewed:</span> {{ $inspection->is_reviewed }}</p>
        <p class="text-gray-400"><span class="text-white">Requested By:</span> {{ $inspection->requested_by }}</p>
        <p class="text-gray-400"><span class="text-white">Start Time:</span> {{ $inspection->start_ts }}</p>
        <p class="text-gray-400"><span class="text-white">Location:</span> {{ $inspection->location }}</p>
        <p class="text-gray-400"><span class="text-white">Assigned To:</span> {{ $inspection->assigned_to }}</p>
        <p class="text-gray-400"><span class="text-white">Checks:</span></p>
        <ul class="list-disc ml-6">
            @foreach (json_decode($inspection->check, true) as $check)
                <li class="text-white">
                    {{ $check['name'] }}: <span class="text-gray-400">{{ $check['result'] }}</span>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('inspections.review', $inspection->id) }}" class="inline-block text-blue-600 hover:underline">Review</a>
        <a href="{{ route('inspections.index', Auth::user()->username) }}" class="inline-block mt-4 text-blue-600 hover:underline">Back to Inspections</a>
</x-app-layout>