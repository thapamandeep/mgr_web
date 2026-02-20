@extends('layout.app')

@section('content')


<section class="contact-section">
    <div class="contact-container">
        <h2>Contact Us</h2>

        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your full name">
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Write your message here"></textarea>
                @error('message')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Send Message</button>
        </form>
    </div>
</section>
@endsection