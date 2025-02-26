<x-app-layout>
    <div class="container">
        <div class="sidebar">
            <img src="user-profile.jpg" alt="Profile">
            <h3>{{ Auth::user()->name }}</h3>
            <a href="{{ route('profile.edit') }}">Edit Profile</a>
            <a href="{{ route('customer.appointments') }}">Appointments</a>
            <a href="{{ route('customer.rewards') }}">Rewards</a>
        </div>
        <!-- Content Area -->
        <div class="content">
            <!-- Display Mode -->
            <div id="display-info">
                <h2>Profile Information</h2>
                <p><strong>Email:</strong> <span id="display-email">{{ Auth::user()->email }}</span></p>
                <button onclick="toggleEditMode()">Edit Profile</button>
                <button onclick="alert('Update password feature coming soon!')">Update Password</button>
                @include('profile.partials.delete-user-form')
            </div>

            <!-- Edit Mode (hidden by default) -->
            @include('profile.partials.update-profile-information-form')
        </div>
    </div> 
</x-app-layout>