{{-- resources/views/sections/education.blade.php --}}
@extends('layouts.app')

@section('title', 'Education')

@section('content')
<div class="section-inner">
    <div class="page-header fade-up">
        <div class="page-tag">02 — Education</div>
        <h1 class="page-title">Academic Timeline</h1>
        <p class="page-subtitle">A path built on curiosity, honors, and the constant pursuit of mastery.</p>
    </div>

    <div class="timeline fade-up">
        @foreach($timeline as $item)
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">{{ $item['year'] }}</div>
                <div class="timeline-school">{{ $item['school'] }}</div>
                <div class="timeline-degree">{{ $item['degree'] }}</div>

                @if(!empty($item['badges']))
                    <div style="display:flex; gap:0.5rem; flex-wrap:wrap; margin-top:0.6rem;">
                        @foreach($item['badges'] as $badge)
                            <span class="badge badge-{{ $badge['type'] }}">{{ $badge['label'] }}</span>
                        @endforeach
                    </div>
                @endif

                <div class="card" style="margin-top:1rem;">
                    <p>{{ $item['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection