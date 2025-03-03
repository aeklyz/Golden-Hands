<div class="sidebar">
    <img src="{{ Auth::user()->profile }}" alt="Profile">
    <h3>{{ Auth::user()->name }}</h3>
    <a href="{{ route('profile.edit') }}">Edit Profile</a>
    <a href="{{ route('customer.upcomingappointments') }}">Upcoming Appointments</a>
    <a href="{{ route('customer.previousappointments') }}">Previous Appointments</a>
    <a href="{{ route('customer.rewards') }}">Rewards</a>
</div>