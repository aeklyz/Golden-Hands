<x-app-layout>
    <div class="container">
        <x-user-sidebar/>
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