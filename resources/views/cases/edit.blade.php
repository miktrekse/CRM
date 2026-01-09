<x-app-layout>
    <div class="max-w-sm">
        <h2 class="text-2xl font-bold mb-4 text-white">Edit Case</h2>
        <form method="POST" action="{{ route('cases.update', $case->id) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-white" for="id">ID</label>
                <input class="p-2 rounded" type="text" name="id" id="id" value="{{ old('id', $case->id) }}" required>
            </div>
            <div>
                <label class="block text-white" for="external_ref">External Ref</label>
                <input class="p-2 rounded" type="text" name="external_ref" id="external_ref" value="{{ old('external_ref', $case->external_ref) }}" required>
            </div>
            <div>
                <label class="block text-white" for="priority">Priority</label>
                <input class="p-2 rounded" type="text" name="priority" id="priority" value="{{ old('priority', $case->priority) }}" required>
            </div>
            <div>
                <label class="block text-white" for="arrival_ts">Arrival Timestamp</label>
                <input class="p-2 rounded" type="text" name="arrival_ts" id="arrival_ts" value="{{ old('arrival_ts', $case->arrival_ts) }}" required>
            </div>
            <div>
                <label class="block text-white" for="origin_country">Origin Country</label>
                <input class="p-2 rounded" type="text" name="origin_country" id="origin_country" value="{{ old('origin_country', $case->origin_country) }}" required>
            </div>
            <div>
                <label class="block text-white" for="destination_country">Destination Country</label>
                <input class="p-2 rounded" type="text" name="destination_country" id="destination_country" value="{{ old('destination_country', $case->destination_country) }}" required>
            </div>
            <div>
                <label class="block text-white" for="risk_flags">Risk Flags</label>
                <input class="p-2 rounded" type="text" name="risk_flags" id="risk_flags" value="{{ old('risk_flags', $case->risk_flags) }}" required>
            </div>
            <div>
                <label class="block text-white" for="declarant">Declarant</label>
                <input class="p-2 rounded" type="text" name="declarant" id="declarant" value="{{ old('declarant', $case->declarant) }}" required>
            </div>
            <div>
                <label class="block text-white" for="consignee">Consignee</label>
                <input class="p-2 rounded" type="text" name="consignee" id="consignee" value="{{ old('consignee', $case->consignee) }}" required>
            </div>
            <div>
                <label class="block text-white" for="active">Active</label>
                <select class="p-2 rounded" name="active" id="active" required>
                    <option value="1" {{ old('active', $case->active) == 1 ? 'selected' : '' }}>True</option>
                    <option value="0" {{ old('active', $case->active) == 0 ? 'selected' : '' }}>False</option>
                </select>
            </div>
            <button type="submit" class=" text-white px-4 py-2 rounded">Update Inspection</button>
            <a href="{{ route('inspections.show', $inspection->id) }}" class="ml-4 text-white hover:underline">Cancel</a>
        </form>
    </div>
</x-app-layout>