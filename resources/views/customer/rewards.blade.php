<x-app-layout>
    <div class="container">
        <x-user-sidebar />
        <div class="content">
            <h2>Rewards</h2>

            <div class="points-box">
                <strong>My Points:</strong> {{ auth()->user()->points }}
                <button class="redeem-btn">Use</button>
            </div>

            <h3>Earn Points</h3>

            @foreach ($rewards as $reward)
                <div class="rewards-list">
                    <span>{{ $reward->description }} - {{ $reward->points }} points</span>
                    @if ($reward->is_redeemable)
                        <form action="{{ route('customer.redeem', $reward->id) }}" method="POST">
                            @csrf
                            <button class="redeem-btn" type="submit">Redeem</button>
                        </form>
                    @endif
                </div>
            @endforeach

            <!-- Pagination links -->
            <div class="pagination">
                {{ $rewards->links() }}
            </div>
        </div>
    </div>
</x-app-layout>