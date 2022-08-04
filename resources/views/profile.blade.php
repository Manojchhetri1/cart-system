@extends('layout2')     

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('My Profile') }}
        </h2>
    </x-slot>


    <div class="p-5">
        <form method="POST" action="{{ route('profile.update') }}" class="max-w-lg p-5 border border-gray-300 rounded-lg">
            @csrf
            <!-- Name -->
            <div class="mb-5">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block w-full form-input" type="text" name="name" :value="auth()->user()->name" readonly autofocus />
            </div>
                <x-input type="hidden" name="id" :value="auth()->user()->id"  />

            <!-- Email Address -->
            <div class="mb-5">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full form-input" type="email" name="email" :value="auth()->user()->email" readonly />
            </div>

            <!-- Password -->
            <div class="mb-5">
                <x-label for="password" :value="__('Old Password')" />

                <x-input id="password" class="block w-full mt-1 form-input"
                                type="password"
                                name="old_password"
                                required/>
            </div>

            <div class="mb-5">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full form-input"
                                type="password"
                                name="password"
                                    autocomplete="new-password" minlength="8" required />
            </div>

            <!-- Confirm Password -->
            <div class="mb-5">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block w-full form-input"
                                type="password"
                                name="password_confirmation" minlength="8" required />
            </div>
            <button type="submit" class="btn btn-warning text-white ">Submit</button>
        </form>
    </div>
</x-app-layout>
