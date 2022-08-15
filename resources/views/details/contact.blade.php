<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('contact.store') }}" class="max-w-lg p-5 border border-gray-300 rounded-lg">
                @csrf 
                @method('GET')
                <div>  
                    <h5>Send us feedback<h5>
                    <label for="fname">Name</label><br>
                     <input type="text" name="name" placeholder="Your name...">
                     <br>
                     <label for="feedback">Feedback</label><br>
                     <textarea name="description" placeholder="what's on your mind" style="height:100px"></textarea>
                     <br>
                     <button type="submit" class="btn btn-warning text-white ">Submit</button>   
                </div>
                </form>
            <div class="max-w-lg p-5 border border-gray-300 rounded-lg">
                     <br>                
                     Call Us
                     <br>
                     <h3>+987654321</h3><br>

                     <div>

                    Connect with Us:
                    @extends('layout2')     

                    <div class="col">
                    <a href="https://www.facebook.com/" class="fb btn">
                    <i class="fa fa-facebook fa-fw"></i> Via with Facebook
                    </a>
                    <br>
                    <a href="https://twitter.com/i/flow/login" class="twitter btn">
                    <i class="fa fa-twitter fa-fw"></i> Via with Twitter
                    </a>
                    <br>                    
                    <a href="https://www.instagram.com/?hl=en" class="google btn">
                    <i class="fa fa-instagram fa-fw"></i> Via with Instagram
                    </a>
                </div> 

                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>


