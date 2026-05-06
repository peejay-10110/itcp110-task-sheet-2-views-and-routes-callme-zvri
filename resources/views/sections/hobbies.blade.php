{{-- resources/views/sections/hobbies.blade.php --}}
@extends('layouts.app')

@section('title', 'Hobbies')

@section('content')
<div class="section-inner">
    <div class="page-header fade-up">
        <div class="page-tag">07 — Hobbies</div>
        <h1 class="page-title">Beyond the Keyboard</h1>
        <p class="page-subtitle">A developer who plays hard stays sharp. These are the things that recharge me.</p>
    </div>

    <div class="hobby-grid fade-up">
        @foreach($hobbies as $hobby)
            <div class="hobby-card">
                <span class="hobby-emoji">{{ $hobby['emoji'] }}</span>
                <div class="hobby-name">{{ $hobby['name'] }}</div>
                <div class="hobby-desc">{{ $hobby['desc'] }}</div>
                <div style="margin-top:1rem;" class="tech-pill-row" style="justify-content:center;">
                    @foreach($hobby['badges'] as $badge)
                        <span class="badge badge-blue">{{ $badge }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <div class="card fade-up" style="margin-top:1.5rem; border-color:rgba(79,142,247,0.2);">
        <div style="display:flex; gap:1rem; align-items:flex-start;">
            <div style="font-size:1.5rem;">💡</div>
            <div>
                <h3>Why Hobbies Matter in Tech</h3>
                <p>Sports teach team dynamics, pattern recognition, and performance under pressure — all of which transfer directly to software development. Playing guitar sharpens patience and systematic practice. These aren't just pastimes; they are training grounds for a better developer mindset.</p>
            </div>
        </div>
    </div>
</div>
@endsection