{{-- resources/views/sections/experience.blade.php --}}
@extends('layouts.app')

@section('title', 'Experience')

@section('content')
<div class="section-inner">
    <div class="page-header fade-up">
        <div class="page-tag">06 — Experience</div>
        <h1 class="page-title">Work & Roles</h1>
        <p class="page-subtitle">Developer roles and academic contributions that shaped my engineering mindset.</p>
    </div>

    <div class="fade-up">
        @foreach($experiences as $exp)
            <div class="exp-item">
                <div class="exp-logo" style="background:{{ $exp['gradient'] }};">
                    {{ $exp['abbr'] }}
                </div>
                <div>
                    <div class="exp-title">{{ $exp['title'] }}</div>
                    <div class="exp-org">{{ $exp['org'] }}</div>
                    <div class="exp-period">{{ $exp['period'] }}</div>
                    <ul class="exp-bullets">
                        @foreach($exp['bullets'] as $bullet)
                            <li>{{ $bullet }}</li>
                        @endforeach
                    </ul>
                    <div class="tech-pill-row" style="margin-top:0.8rem;">
                        @foreach($exp['stack'] as $tech)
                            <span class="tech-pill">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection