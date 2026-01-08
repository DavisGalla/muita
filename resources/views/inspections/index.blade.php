<x-app-layout>
     <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
        @foreach ($inspections as $inspection)
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">
                <span class="text-xs text-gray-400">ID:</span>
                <p class="font-bold text-white mb-2">{{ $inspection->id }}</p>

                <span class="text-xs text-gray-400">Case ID</span>
                <p class="mb-2 text-white">{{ $inspection->keis_id }}</p>

                <span class="text-xs text-gray-400">Is reviewed:</span>
                <p class="mb-2 text-white" >@if ($inspection->is_reviewed == 0)
                    
                    No

                @else
                
                    yes

                @endif
                    
                </p>


                <a href="{{ route('inspections.show', $inspection->id) }}" class="bg-blue-950 hover:bg-blue-900 px-2 py-1 rounded text-white" >View</a>
            </div>
        @endforeach
    </div>
</x-app-layout>