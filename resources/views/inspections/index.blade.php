<x-app-layout>
        <div class="grid grid-cols-1 md:grid-cols-2  gap-6 p-6">
        @foreach ($inspections as $inspection)
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">

                <span class="text-xs text-gray-400">ID:</span>
                <p class="mb-2 text-white">{{ $inspection->id }}</p>
                <span class="text-xs text-gray-400">Keis_id:</span>
                <p class="mb-2 text-white" >{{ $inspection->case_id }}</p>
                <span class="text-xs text-gray-400">Type:</span>
                <p class="mb-2 text-white" >{{ $inspection->type }}</p>
                <span class="text-xs text-gray-400">Requested_by:</span>
                <p class="mb-2 text-white" >{{ $inspection->requested_by }}</p>
                <span class="text-xs text-gray-400">Start_ts:</span>
                <p class="mb-2 text-white" >{{ $inspection->start_ts }}</p>
                <span class="text-xs text-gray-400">Location:</span>
                <p class="mb-2 text-white" >{{ $inspection->location }}</p>
                <span class="text-xs text-gray-400">Checks:</span>
                <p class="mb-2 text-white" >{{ $inspection->checks }}</p>
                <span class="text-xs text-gray-400">Assigned_to:</span>
                <p class="mb-2 text-white" >{{ $inspection->assigned_to }}</p>

                <a href="{{ route('inspections.show', $inspection->id) }}" class="bg-blue-950 hover:bg-blue-900 px-2 py-1 rounded text-white" >View</a>
            </div>
        @endforeach
    </div>
</x-app-layout>