<x-app-layout>
<div class="navbar">
        <div>
            <img src="GoldenHandsImage.jpg" alt="Golden Hands">
           
        </div>
        <div>
            <a href="#">Services</a>
            <a href="#">Branches</a>
            <a href="#">Contact Us</a>
            <a href="#">My Account</a>
            <a href="#" class="logout">Log Out</a>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <img src="user-profile.jpg" alt="Profile">
            <h3>{{ Auth::user()->name }}</h3>
            <a href="{{ route('profile.edit') }}">Edit Profile</a>
            <a href="{{ route('customer.appointments') }}">Appointments</a>
            <a href="{{ route('customer.rewards') }}">Rewards</a>
        </div>
        <div class="content">
            <h2>Edit Profile</h2>
            <div class="form-group">
                <label>Username</label>
                <input type="text" placeholder="{{ Auth::user()->name }}">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" placeholder="{{ Auth::user()->email }}">
            </div>
            <button class="update-btn">Update</button>
        </div>
    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
