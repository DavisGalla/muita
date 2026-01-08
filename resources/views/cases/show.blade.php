<x-app-layout>
    <h2 class="text-2xl font-bold mb-4 text-white">Case Details</h2>
    
        <p class="text-gray-400"><span class="text-white">ID:</span> {{ $case->id }}</p>
        <p class="text-gray-400"><span class="text-white">External Ref:</span> {{ $case->external_ref }}</p>
        <p class="text-gray-400"><span class="text-white">Status:</span> {{ $case->status }}</p>
        <p class="text-gray-400"><span class="text-white">Priority:</span> {{ $case->priority }}</p>
        <p class="text-gray-400"><span class="text-white">Arrival:</span> {{ $case->arrival_ts }}</p>
        <p class="text-gray-400"><span class="text-white">Checkpoint:</span> {{ $case->checkpoint_id }}</p>
        <p class="text-gray-400"><span class="text-white">Origin:</span> {{ $case->origin_country }}</p>
        <p class="text-gray-400"><span class="text-white">Destination:</span> {{ $case->destination_country }}</p> 
        <p class="text-gray-400"><span class="text-white">Risk Flags:</span> {{ $case->risk_flags }}</p>
        
    
    
        <p class="text-gray-400"><span class="text-white">Declarant:</span> {{ $case->declarant->name }}</p>
        <p class="text-gray-400"><span class="text-white">Consignee:</span> {{ $case->consignee->name }}</p>
    

    
        <p class="text-gray-400"><span class="text-white">Vehicle:</span> {{ $case->vehicles->make }}</p>
        <p class="text-gray-400"><span class="text-white">Plate Number:</span> {{ $case->vehicles->plate_no }}</p>
    
    

    <a href="{{ route('cases.index') }}" class="inline-block mt-4 text-blue-600 hover:underline">Back to Cases</a>
</x-app-layout>