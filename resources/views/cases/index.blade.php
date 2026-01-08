<x-app-layout>
    <div class="p-6">
        <x-case-search />
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($cases as $case)
                <div class="case-item bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700"
                     data-id="{{ $case->id }}"
                     data-status="{{ $case->status }}"
                     vehicle-plate="{{ $case->vehicles->plate_no }}"
                     data-consignee="{{ $case->consignee->name }}"
                     data-declarant="{{$case->declarant->name}}"
                     >
                    
                    <span class="text-xs text-gray-400">ID:</span>
                    <p class="font-bold text-white mb-2">{{ $case->id }}</p>

                    <span class="text-xs text-gray-400">Vehicle Plate NO:</span>
                    <p class="mb-2 text-white">{{ $case->vehicles->plate_no }}</p>

                    <span class="text-xs text-gray-400">Status:</span>
                    <p class="mb-2 text-white">{{ $case->status }}</p>
                    
                    <span class="text-xs text-gray-400">Consignee:</span>
                    <p class="mb-2 text-white">{{ $case->consignee->name }}</p>

                    <span class="text-xs text-gray-400">Declarant:</span>
                    <p class="mb-2 text-white">{{ $case->declarant->name }}</p>

                    <a href="{{ route('cases.show', $case->id) }}" class="bg-blue-950 hover:bg-blue-900 px-2 py-1 rounded text-white">View</a>
                </div>
            @endforeach
        </div>

        <!-- No Results Message -->
        <div class="no-cases-message text-center text-gray-400 py-8" style="display: none;">
            Nav atrasti rezultāti
        </div>
    </div>
</x-app-layout>