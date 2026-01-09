<x-app-layout>
    <x-app-layout>
    <h2 class="text-2xl font-bold mb-4 text-white">Document Details</h2>
        <p class="text-gray-400"><span class="text-white">ID:</span> {{ $document->id }}</p>
        <p class="text-gray-400"><span class="text-white">Case ID:</span> {{ $document->keis_id }}</p>
        <p class="text-gray-400"><span class="text-white">File name:</span> {{ $document->filename }}</p>
        <p class="text-gray-400"><span class="text-white">Mime_type:</span> {{ $document->mime_type }}</p>
        <p class="text-gray-400"><span class="text-white">Category:</span> {{ $document->category }}</p>
        <p class="text-gray-400"><span class="text-white">pages:</span> {{ $document->pages }}</p>
        <p class="text-gray-400"><span class="text-white">Uploaded by:</span> {{ $document->uploaded_by}}</p>
        <a href="{{ route('docs.index') }}" class="inline-block mt-4 text-blue-600 hover:underline">Back to Documents</a>
</x-app-layout>
</x-app-layout>