<x-app-layout>
    <h2 class="text-2xl font-bold mb-4 text-white">{{$cases->case_id}} Details</h2>
        <p class="text-gray-400"><span class="text-white">ID:</span> {{ $cases->id }}</p>
        <p class="text-gray-400"><span class="text-white">External_ref:</span> {{ $cases->external_ref }}</p>
        <p class="text-gray-400"><span class="text-white">Priority:</span> {{ $cases->priority }}</p>
        <p class="text-gray-400"><span class="text-white">Arrival_ts:</span> {{ $cases->arrival_ts }}</p>
        <p class="text-gray-400"><span class="text-white">Checkpoint_id:</span> {{ $cases->checkpoint_id }}</p>
        <p class="text-gray-400"><span class="text-white">Origin_country:</span> {{ $cases->origin_country }}</p>
        <p class="text-gray-400"><span class="text-white">Destination_country:</span> {{ $cases->destination_country }}</p>
        <p class="text-gray-400"><span class="text-white">Risk_flags:</span> {{ $cases->risk_flags }}</p>
        <p class="text-gray-400"><span class="text-white">Declarant:</span> {{ $cases->declarant }}</p>
        <p class="text-gray-400"><span class="text-white">Consignee:</span> {{ $cases->consignee }}</p>
         @if ($cases->active == 1)
                true
            @else
                false
            @endif
        </p>
        <div class="mt-4 flex space-x-4">
            <a href="{{ route('cases.index') }}" class="inline-block text-blue-600 hover:underline">Back to inspections</a>
        </div>
                <div class="mt-4 flex space-x-4">
            <a href="{{ route('cases.edit', $cases->id) }}" class="inline-block text-yellow-500 hover:underline">Edit</a>
</x-app-layout>