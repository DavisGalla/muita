<x-app-layout>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
        @foreach ($documents as $document)
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">
                <span class="text-xs text-gray-400">ID:</span>
                <p class="font-bold text-white mb-2">{{ $document->id }}</p>

                <span class="text-xs text-gray-400">Case ID</span>
                <p class="mb-2 text-white">{{ $document->keis_id }}</p>

                <span class="text-xs text-gray-400">File Name</span>
                <p class="mb-2 text-white">{{ $document->filename}}</p>

                <span class="text-xs text-gray-400">Category</span>
                <p class="mb-2 text-white">{{ $document->category }}</p>


                <a href="{{ route('docs.show', $document->id) }}" class="bg-blue-950 hover:bg-blue-900 px-2 py-1 rounded text-white" >View</a>
            </div>
        @endforeach
    </div>
</x-app-layout>