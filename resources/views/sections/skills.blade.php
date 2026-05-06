{{-- resources/views/sections/skills.blade.php --}}
@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div class="section-inner">
    <div class="page-header fade-up">
        <div class="page-tag">03 — Skills</div>
        <h1 class="page-title">Technical Arsenal</h1>
        <p class="page-subtitle">From database schemas to mobile UIs — a full-stack perspective on every problem.</p>
    </div>

    @foreach($categories as $category)
        <div class="skill-category fade-up">
            <div class="skill-category-title">{{ $category['title'] }}</div>
            <div class="skills-grid">
                @foreach($category['skills'] as $skill)
                    <div class="skill-card">
                        <div class="skill-icon">{{ $skill['icon'] }}</div>
                        <div class="skill-name">{{ $skill['name'] }}</div>
                        <div class="skill-level">{{ $skill['level'] }}</div>
                        <div class="skill-bar">
                            <div class="skill-bar-fill" style="
                                width: {{ $skill['pct'] }}%;
                                {{ $skill['color'] ? 'background:' . $skill['color'] : '' }}
                            "></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection