<x-app-layout>
        <div class="grid grid-cols-1 md:grid-cols-2  gap-6 p-6">
        @foreach ($cases as $case)
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">

                <span class="text-xs text-gray-400">ID:</span>
                <p class="mb-2 text-white">{{ $case->id }}</p>
                <span class="text-xs text-gray-400">External Ref:</span>
                <p class="mb-2 text-white" >{{ $case->external_ref }}</p>
                <span class="text-xs text-gray-400">Priority:</span>
                <p class="mb-2 text-white" >{{ $case->priority }}</p>
                <span class="text-xs text-gray-400">Arrival:</span>
                <p class="mb-2 text-white" >{{ $case->arrival_ts }}</p>
                <span class="text-xs text-gray-400">Checkpoint:</span>
                <p class="mb-2 text-white" >{{ $case->checkpoint_id }}</p>
                <span class="text-xs text-gray-400">Origin:</span>
                <p class="mb-2 text-white" >{{ $case->origin_country }}</p>
                <span class="text-xs text-gray-400">Destination:</span>
                <p class="mb-2 text-white" >{{ $case->destination_country }}</p>
                <span class="text-xs text-gray-400">Risk Flags:</span>
                <p class="mb-2 text-white" >{{ $case->risk_flags }}</p>
                <span class="text-xs text-gray-400">Declarant:</span>
                <p class="mb-2 text-white" >{{ $case->declarant->name }}</p>
                <span class="text-xs text-gray-400">Consignee:</span>
                <p class="mb-2 text-white" >{{ $case->consignee->name}}</p>

                <a href="{{ route('cases.show', $case->id) }}" class="bg-blue-950 hover:bg-blue-900 px-2 py-1 rounded text-white" >View</a>
            </div>
        @endforeach
    </div>
</x-app-layout>
