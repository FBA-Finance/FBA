<div class="max-w-4xl px-6 py-10 mx-auto bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-gray-800">{{ $pool->name }}</h2>
    <p class="text-gray-600">{{ $pool->description }}</p>

    <div class="mt-6 space-y-4">
        <p><strong>Start Date:</strong> {{ $pool->start_date }}</p>
        <p><strong>End Date:</strong> {{ $pool->end_date }}</p>
        <p><strong>Next Cycle:</strong> {{ $pool->next_cycle_date }}</p>
        <p><strong>Members:</strong> {{ $pool->members->count() }}</p>
    </div>

    <a href="{{ route('pools.index') }}" class="inline-block mt-6 text-blue-600 hover:underline">
        ← Back to Pools
    </a>
</div>