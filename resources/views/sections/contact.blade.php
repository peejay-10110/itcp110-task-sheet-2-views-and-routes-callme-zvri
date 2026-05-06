{{-- resources/views/sections/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="section-inner">
    <div class="page-header fade-up">
        <div class="page-tag">09 — Contact</div>
        <h1 class="page-title">Let's Connect</h1>
        <p class="page-subtitle">Whether it's a project collaboration, freelance work, or just saying hi — reach out anytime.</p>
    </div>

    <div class="contact-layout fade-up">

        {{-- ── LEFT: CONTACT INFO ── --}}
        <div>
            <div class="contact-info" style="margin-bottom:1.2rem;">
                <h3>Get in Touch</h3>
                <p>Open to collaboration, freelance opportunities, and interesting problems.</p>

                <a href="{{ $profile['github'] }}" target="_blank" class="contact-link">
                    <div class="contact-link-icon gh">💻</div>
                    <div>
                        <div class="contact-link-label">GitHub</div>
                        <div class="contact-link-value">{{ $profile['github_user'] }}</div>
                    </div>
                </a>

                <a href="tel:{{ $profile['phone'] }}" class="contact-link">
                    <div class="contact-link-icon ph">📞</div>
                    <div>
                        <div class="contact-link-label">Phone</div>
                        <div class="contact-link-value">{{ $profile['phone'] }}</div>
                    </div>
                </a>

                <a href="https://facebook.com" target="_blank" class="contact-link">
                    <div class="contact-link-icon fb">👥</div>
                    <div>
                        <div class="contact-link-label">Facebook</div>
                        <div class="contact-link-value">{{ $profile['facebook'] }}</div>
                    </div>
                </a>
            </div>

            <div class="card" style="border-color:rgba(79,142,247,0.2);">
                <h3 style="margin-bottom:0.5rem;">📍 Location</h3>
                <p>{{ $profile['location'] }}<br>Available for remote collaboration globally.</p>
            </div>
        </div>

        {{-- ── RIGHT: CONTACT FORM ── --}}
        <div class="contact-form">
            <h3>Send a Message</h3>
            <p>I typically respond within 24 hours.</p>

            @if(session('success'))
                <div class="alert-success">
                    ✅ {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert-success" style="background:rgba(244,114,182,0.1); border-color:rgba(244,114,182,0.3); color:var(--accent3);">
                    @foreach($errors->all() as $error)
                        <div>• {{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="e.g. Maria" value="{{ old('first_name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="e.g. Santos" value="{{ old('last_name') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="maria@example.com" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" required>
                        <option value="">Select a topic...</option>
                        <option value="Project Collaboration"  {{ old('subject') === 'Project Collaboration'  ? 'selected' : '' }}>Project Collaboration</option>
                        <option value="Freelance Inquiry"      {{ old('subject') === 'Freelance Inquiry'      ? 'selected' : '' }}>Freelance Inquiry</option>
                        <option value="Database Consultation"  {{ old('subject') === 'Database Consultation'  ? 'selected' : '' }}>Database Consultation</option>
                        <option value="General Inquiry"        {{ old('subject') === 'General Inquiry'        ? 'selected' : '' }}>General Inquiry</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Tell me about your project or idea..." required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn-primary" style="width:100%; justify-content:center;">
                    Send Message →
                </button>
            </form>
        </div>

    </div>
</div>
@endsection