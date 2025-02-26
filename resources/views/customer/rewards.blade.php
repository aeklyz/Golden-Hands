<x-app-layout>
    <div class="container">
        <div class="sidebar">
            <img src="samplepicture.jpg" alt="Profile">
            <h3>{{ Auth::user()->name }}</h3>
            <a href="Profile.html">Edit Profile</a>
            <a href="Appointments.html">Appointments</a>
            <a href="#">Rewards</a>
        </div>
        <div class="content">
            <h2>Rewards</h2>

            <div class="points-box">
                <strong>My Points:</strong> 100 Points
                <button class="redeem-btn">Use</button>
            </div>

            <h3>Earn Points</h3>

            @foreach ($rewards as $reward)
                <div class="rewards-list">
                    <span>{{ $reward->description }} - {{ $reward->points }} points</span>
                    <button class="redeem-btn">Redeem</button>
                </div>
            @endforeach

            <!-- Pagination links -->
            <div class="pagination">
                {{ $rewards->links() }}
            </div>
        </div>
    </div>
</x-app-layout>