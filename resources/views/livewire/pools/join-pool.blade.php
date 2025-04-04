<div class="max-w-lg p-6 mx-auto bg-white rounded shadow-md">
    <h2 class="text-xl font-semibold">{{ $pool->name }}</h2>
    <p class="text-gray-600">Amount: ${{ $pool->amount }}</p>
    <p class="text-gray-600">Cycle Duration: {{ $pool->cycle_duration }} days</p>
    <p class="text-gray-600">Start Date: {{ $pool->start_date }}</p>

    @if(session('message'))
        <div class="p-2 mt-3 text-green-700 bg-green-200 rounded">
            {{ session('message') }}
        </div>
    @endif

    @if(session('error'))
        <div class="p-2 mt-3 text-red-700 bg-red-200 rounded">
            {{ session('error') }}
        </div>
    @endif

    <button wire:click="joinPool" class="px-4 py-2 mt-4 text-white bg-blue-500 rounded hover:bg-blue-600">
        Join Pool
    </button>
    <p>FBA Finance</p>
</div>