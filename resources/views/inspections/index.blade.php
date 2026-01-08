<x-app-layout>


        @foreach ($inspections as $inspection)
        <div style="color: white; ">
            <p>ID: {{ $inspection->id }}</p>
            <p>Keis_id: {{ $inspection->case_id }}</p>
            <p>Type: {{ $inspection->type }}</p>
            <p>Requested_by: {{ $inspection->requested_by }}</p>
            <p>Start_ts: {{ $inspection->start_ts }}</p>
            <p>Location: {{ $inspection->location }}</p>
            <p>Checks: {{ $inspection->checks }}</p>
            <p>Assigned_to: {{ $inspection->assigned_to }}</p>
        </div>
    @endforeach
</x-app-layout>
