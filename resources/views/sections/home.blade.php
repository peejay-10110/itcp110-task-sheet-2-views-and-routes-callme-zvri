{{-- resources/views/sections/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero-section">
    <div class="bg-dots"></div>
    <div class="hero-grid">

        {{-- ── LEFT: TEXT ── --}}
        <div>
            @if($profile['available'])
                <div class="hero-badge">Available for collaboration</div>
            @endif

            <h1 class="hero-name">
                <div class="first">Xaviery Sidney</div>
                <div class="last">B. Magadia</div>
            </h1>

            <p class="hero-tagline">
                <strong>{{ $profile['program'] }} Student</strong>
                &nbsp;·&nbsp; Full-Stack Developer &nbsp;·&nbsp; Database Architect
            </p>

            <p class="hero-summary">
                {{ $profile['tagline'] }} {{ $profile['summary'] }}
            </p>

            <div class="hero-actions">
                <a href="{{ route('projects.schoolife') }}" class="btn-primary">View Projects →</a>
                <a href="{{ $profile['github'] }}" target="_blank" class="btn-ghost">GitHub ↗</a>
                <a href="{{ route('contact') }}" class="btn-ghost">Contact Me</a>
            </div>
        </div>

        {{-- ── RIGHT: PROFILE CARD ── --}}
        <div class="hero-visual">
            <div class="avatar-card">
                {{--
                    Profile photo:
                    Place your photo in public/images/profile.jpg
                    and uncomment the <img> tag below, then remove the initials div.
                --}}
                {{-- <img src="{{ asset('images/profile.jpg') }}" alt="{{ $profile['name'] }}" class="avatar-photo"> --}}
                <div class="avatar-initials">{{ $profile['initials'] }}</div>

                <div class="avatar-name">{{ $profile['name'] }}</div>
                <div class="avatar-role">{{ $profile['program'] }} · {{ $profile['university'] }}</div>

                <div class="stat-row">
                    @foreach($profile['stats'] as $stat)
                        <div class="stat">
                            <div class="stat-num">{{ $stat['value'] }}</div>
                            <div class="stat-label">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>

                <div class="tech-pill-row">
                    <span class="tech-pill">Laravel</span>
                    <span class="tech-pill">Spring Boot</span>
                    <span class="tech-pill purple">Flutter</span>
                    <span class="tech-pill pink">MySQL</span>
                    <span class="tech-pill">PHP</span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection