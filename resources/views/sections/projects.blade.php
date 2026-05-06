{{-- resources/views/sections/projects.blade.php --}}
@extends('layouts.app')

@section('title', 'Projects Archive')

@section('content')
<div class="section-inner">
    <div class="page-header fade-up">
        <div class="page-tag">05 — Projects Archive</div>
        <h1 class="page-title">Other Works</h1>
        <p class="page-subtitle">A growing portfolio of completed projects across different domains.</p>
    </div>

    <div class="archive-grid fade-up">
        @foreach($projects as $project)
            <div class="card" style="border-color:rgba(167,139,250,0.25);">
                <div style="display:flex; align-items:center; gap:0.8rem; margin-bottom:1rem;">
                    <div style="width:48px; height:48px; border-radius:10px; background:{{ $project['color'] }}; display:flex; align-items:center; justify-content:center; font-size:1.4rem;">
                        {{ $project['icon'] }}
                    </div>
                    <div>
                        <h3 style="margin:0;">{{ $project['title'] }}</h3>
                        <span class="badge badge-{{ $project['badge']['type'] }}" style="margin-top:0.2rem;">
                            {{ $project['badge']['label'] }}
                        </span>
                    </div>
                </div>

                <p>{{ $project['desc'] }}</p>
                <div class="divider"></div>

                <div class="tech-pill-row">
                    @foreach($project['stack'] as $tech)
                        <span class="tech-pill {{ $tech['type'] === 'purple' ? 'purple' : ($tech['type'] === 'pink' ? 'pink' : '') }}">
                            {{ $tech['label'] }}
                        </span>
                    @endforeach
                </div>

                <div style="margin-top:1.2rem;">
                    @foreach($project['points'] as $point)
                        <div class="feature-item" style="margin-bottom:0.5rem;">
                            <div>✓</div>
                            <div class="feature-text"><p>{{ $point }}</p></div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    {{-- Coming Soon Card --}}
    <div class="card fade-up" style="margin-top:1.2rem; border-style:dashed; display:flex; align-items:center; justify-content:center; flex-direction:column; padding:3rem; text-align:center; gap:0.5rem;">
        <div style="font-size:2rem;">🚀</div>
        <h3>More Coming Soon</h3>
        <p style="max-width:400px;">Currently building new projects in Laravel and Spring Boot. Follow my GitHub for the latest updates.</p>
        <a href="{{ $profile['github'] }}" target="_blank" class="btn-primary" style="margin-top:0.8rem;">View GitHub ↗</a>
    </div>
</div>
@endsection