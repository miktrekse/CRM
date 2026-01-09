<x-app-layout>
    <div class="max-w-sm">
        <h2 class="text-2xl font-bold mb-4 text-white">Edit Inspection</h2>
        <form method="POST" action="{{ route('inspections.update', $inspection->id) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-white" for="id">ID</label>
                <input class="p-2 rounded" type="text" name="id" id="id" value="{{ old('id', $inspection->id) }}" required>
            </div>
            <div>
                <label class="block text-white" for="case_id">Case ID</label>
                <input class="p-2 rounded" type="text" name="case_id" id="case_id" value="{{ old('case_id', $inspection->case_id) }}" required>
            </div>
            <div>
                <label class="block text-white" for="type">Type</label>
                <input class="p-2 rounded" type="text" name="type" id="type" value="{{ old('type', $inspection->type) }}" required>
            </div>
            <div>
                <label class="block text-white" for="requested_by">Requested By</label>
                <input class="p-2 rounded" type="text" name="requested_by" id="requested_by" value="{{ old('requested_by', $inspection->requested_by) }}" required>
            </div>
            <div>
                <label class="block text-white" for="start_ts">Start Timestamp</label>
                <input class="p-2 rounded" type="text" name="start_ts" id="start_ts" value="{{ old('start_ts', $inspection->start_ts) }}" required>
            </div>
            <div>
                <label class="block text-white" for="location">Location</label>
                <input class="p-2 rounded" type="text" name="location" id="location" value="{{ old('location', $inspection->location) }}" required>
            </div>
            <div>
                <label class="block text-white" for="checks">Checks</label>
                <input class="p-2 rounded" type="text" name="checks" id="checks" value="{{ old('checks', $inspection->checks) }}" required>
            </div>
            <div>
                <label class="block text-white" for="assigned_to">Assigned To</label>
                <input class="p-2 rounded" type="text" name="assigned_to" id="assigned_to" value="{{ old('assigned_to', $inspection->assigned_to) }}" required>
            </div>
            <div>
                <label class="block text-white" for="active">Active</label>
                <select class="p-2 rounded" name="active" id="active" required>
                    <option value="1" {{ old('active', $inspection->active) == 1 ? 'selected' : '' }}>True</option>
                    <option value="0" {{ old('active', $inspection->active) == 0 ? 'selected' : '' }}>False</option>
                </select>
            </div>
            <button type="submit" class=" text-white px-4 py-2 rounded">Update Inspection</button>
            <a href="{{ route('inspections.show', $inspection->id) }}" class="ml-4 text-white hover:underline">Cancel</a>
        </form>
    </div>
</x-app-layout>