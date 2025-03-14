<div>
    <h2>Your Pools</h2>

    @foreach($pools as $pool)
        <div>
            <h3>{{ $pool->name }}</h3>
            <p>Contribution: {{ $pool->contribution_amount }}</p>
            <a href="{{ route('pools.show', $pool->id) }}">View Pool</a>
        </div>
    @endforeach
</div>