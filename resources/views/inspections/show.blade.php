<x-app-layout>
    <h2 class="text-2xl font-bold mb-4 text-white">{{$inspection->case_id}} Details</h2>
        <p class="text-gray-400"><span class="text-white">ID:</span> {{ $inspection->id }}</p>
        <p class="text-gray-400"><span class="text-white">Case_id:</span> {{ $inspection->case_id }}</p>
        <p class="text-gray-400"><span class="text-white">Type:</span> {{ $inspection->type }}</p>
        <p class="text-gray-400"><span class="text-white">Requested_by:</span> {{ $inspection->requested_by }}</p>
        <p class="text-gray-400"><span class="text-white">Start_ts:</span> {{ $inspection->start_ts }}</p>
        <p class="text-gray-400"><span class="text-white">Location:</span> {{ $inspection->location }}</p>
        <p class="text-gray-400"><span class="text-white">Checks:</span> {{ $inspection->checks }}</p>
        <p class="text-gray-400"><span class="text-white">Assigned_to:</span> {{ $inspection->assigned_to }}</p>
         @if ($inspection->active == 1)
                true
            @else
                false
            @endif
        </p>
        <div class="mt-4 flex space-x-4">
            <a href="{{ route('inspections.index') }}" class="inline-block text-blue-600 hover:underline">Back to inspections</a>
        </div>
                <div class="mt-4 flex space-x-4">
            <a href="{{ route('inspections.edit', $inspection->id) }}" class="inline-block text-yellow-500 hover:underline">Edit</a>
</x-app-layout>