<!-- resources/views/contact.blade.php -->

@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg p-8 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-4 text-center">Contact Us</h1>
        <p class="mb-8 text-center text-gray-600">If you have any questions, please contact us using the form below.</p>
        
        <!-- Contact Form -->
        <form action="#" method="post" class="space-y-4">
            @csrf <!-- CSRF token for security -->
            
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="mt-1 block w-full rounded-md  shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Your Name"
                    required
                />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="mt-1 block w-full rounded-md  shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Your Email"
                    required
                />
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea
                    id="message"
                    name="message"
                    rows="4"
                    class="mt-1 block w-full rounded-md  shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Your Message"
                    required
                ></textarea>
            </div>

            <button
                type="submit"
                class="inline-block w-full rounded bg-blue-500 px-6 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
                Send Message
            </button>
        </form>
    </div>
</div>
@endsection
