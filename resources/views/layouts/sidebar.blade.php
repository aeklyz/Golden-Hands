<div class="sidebar">
    <img src="../Images/samplepicture.jpg" alt="Profile">
    <h3>{{ Auth::user()->name }}</h3>
    <a href="{{ route('staff.history') }}" class="active">Transaction History</a>
    <a href="{{ route('staff.schedule') }}">Schedule</a>
    <a href="{{ route('staff.report') }}">Monthly Report</a>
</div>