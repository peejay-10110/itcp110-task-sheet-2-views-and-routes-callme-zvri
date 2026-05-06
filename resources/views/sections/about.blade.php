{{-- resources/views/sections/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="section-inner">
    <div class="about-layout">

        {{-- ── SIDEBAR: PROFILE ── --}}
        <div class="about-sidebar fade-up">

            {{-- Profile Section --}}
            <div class="profile-section">
                {{--
                    Profile photo:
                    Place your photo at public/images/profile.jpg
                    and swap the initials div for the <img> tag below.
                --}}
                {{-- <img src="{{ asset('images/profile.jpg') }}" alt="{{ $profile['name'] }}" class="profile-photo"> --}}
                <div class="profile-initials">{{ $profile['initials'] }}</div>

                <div class="profile-name">{{ $profile['name'] }}</div>
                <div class="profile-role">{{ $profile['role'] }}</div>

                <div class="profile-divider"></div>

                {{-- Quick Stats --}}
                <div class="profile-stat-grid">
                    @foreach($profile['stats'] as $stat)
                        <div class="profile-stat">
                            <div class="num">{{ $stat['value'] }}</div>
                            <div class="lbl">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>

                <div class="profile-divider"></div>

                {{-- Contact Info --}}
                <div class="profile-contact">
                    <div class="profile-contact-item">📍 <span>{{ $profile['location'] }}</span></div>
                    <div class="profile-contact-item">📞 <a href="tel:{{ $profile['phone'] }}">{{ $profile['phone'] }}</a></div>
                    <div class="profile-contact-item">💻 <a href="{{ $profile['github'] }}" target="_blank">{{ $profile['github_user'] }}</a></div>
                </div>

                <div class="profile-divider"></div>

                {{-- Badges --}}
                <div style="display:flex; gap:0.5rem; flex-wrap:wrap; justify-content:center;">
                    <span class="badge badge-blue">{{ $profile['program'] }}</span>
                    <span class="badge badge-gold">With Honors</span>
                    <span class="badge badge-purple">DSAGROUP6</span>
                </div>
            </div>

        </div>

        {{-- ── MAIN CONTENT ── --}}
        <div>
            <div class="page-header fade-up">
                <div class="page-tag">01 — About</div>
                <h1 class="page-title">Full-Stack Developer &<br>Database Architect</h1>
            </div>

            <div class="section-block fade-up">
                <h3>Who I Am</h3>
                <p>I am a Computer Programming major under the BTVTED ICT program at Technological University of the Philippines – Taguig (TUPT), where I have grown from a curious student into a developer who takes ownership of real system architecture.</p>
                <p>I believe in understanding the full stack so I can design better at each layer — from database schemas to mobile UIs.</p>
            </div>

            <div class="highlight-box fade-up">
                "Clean schemas, purposeful APIs, maintainable code — engineering is about making systems that last."
            </div>

            <div class="section-block fade-up">
                <h3>Developer Identity</h3>
                <p>I currently serve as the <strong>Database Administrator and Schema Architect</strong> for SchooLife — a community web application for the TUPT student body featuring a marketplace, lost-and-found system, and announcement platform. I optimized relational structures to ensure data integrity and scalability across multiple modules.</p>
                <p>Beyond databases, I write backend APIs with Laravel and Spring Boot, build mobile UIs with Flutter, and handle frontend needs with modern CSS and PHP templating.</p>
            </div>

            <div class="section-block fade-up">
                <h3>Values & Style</h3>
                <div class="card-grid-2">
                    @foreach($values as $value)
                        <div class="card">
                            <h3>{{ $value['icon'] }} {{ $value['title'] }}</h3>
                            <p>{{ $value['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection