{{-- resources/views/sections/schoolife.blade.php --}}
@extends('layouts.app')

@section('title', 'SchooLife — Featured Project')

@section('content')
<div class="section-inner">
    <div class="page-header fade-up">
        <div class="page-tag">04 — Featured Project</div>
        <h1 class="page-title">SchooLife</h1>
        <p class="page-subtitle">The TUPT Community Web Application — a platform I helped architect from the ground up.</p>
    </div>

    {{-- Project Hero Card --}}
    <div class="project-hero fade-up">
        <div class="project-meta">
            <span class="badge badge-blue">Web Application</span>
            <span class="badge badge-purple">Database Architecture</span>
            <span class="badge badge-gold">⭐ Lead DBA</span>
        </div>
        <div class="project-title">SchooLife TUPT Community Platform</div>
        <p class="project-desc">
            A full-featured community platform designed for students of Technological University of the Philippines – Taguig.
            SchooLife integrates a student marketplace, a lost-and-found system, and an announcement board into one unified
            web application — with a backend architecture I personally designed and optimized.
        </p>
    </div>

    {{-- Role & DB Highlights --}}
    <div class="fade-up" style="margin-bottom:2rem;">
        <div class="section-block">
            <h3>My Role: Database Administrator & Schema Architect</h3>
            <p>I served as the primary Database Architect for SchooLife, responsible for designing the entire relational schema
            from the ground up. This involved entity relationship modeling, normalization up to 3NF, and optimizing join
            structures across the platform's three core modules.</p>
        </div>

        <div class="card" style="border-color:rgba(79,142,247,0.3); margin-bottom:1.5rem;">
            <h3 style="color:var(--accent);">🗄️ Database Design Highlights</h3>
            <ul style="padding-left:1.2rem; color:var(--text-muted); font-size:0.9rem; line-height:2;">
                @foreach($dbHighlights as $point)
                    <li>{{ $point }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- Feature Grid --}}
    <div class="feature-grid fade-up">
        @foreach($features as $feature)
            <div class="feature-item">
                <div class="feature-icon">{{ $feature['icon'] }}</div>
                <div class="feature-text">
                    <h4>{{ $feature['title'] }}</h4>
                    <p>{{ $feature['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="divider fade-up"></div>

    {{-- Tech Stack --}}
    <div class="fade-up">
        <div class="section-block">
            <h3>Tech Stack</h3>
            <div class="tech-pill-row">
                @foreach($techStack as $tech)
                    <span class="tech-pill">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection