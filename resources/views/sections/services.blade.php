{{-- resources/views/sections/services.blade.php --}}
@extends('layouts.app')

@section('title', 'Services')

@section('content')
<div class="section-inner">
    <div class="page-header fade-up">
        <div class="page-tag">08 — Services</div>
        <h1 class="page-title">What I Offer</h1>
        <p class="page-subtitle">Professional services built on real project experience and a full-stack perspective.</p>
    </div>

    <div class="card-grid fade-up">
        @foreach($services as $service)
            <div class="service-card">
                <div class="service-icon">{{ $service['icon'] }}</div>
                <div class="service-title">{{ $service['title'] }}</div>
                <div class="service-desc">{{ $service['desc'] }}</div>
                <div class="service-tags">
                    @foreach($service['tags'] as $tag)
                        <span class="service-tag">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <div class="card fade-up" style="margin-top:1.5rem; text-align:center; border-color:rgba(79,142,247,0.25);">
        <h3 style="margin-bottom:0.5rem;">Ready to collaborate?</h3>
        <p style="margin-bottom:1.2rem; max-width:500px; margin-left:auto; margin-right:auto;">
            Whether it's a school project, small startup idea, or freelance work — I'm open to meaningful collaborations.
        </p>
        <a href="{{ route('contact') }}" class="btn-primary">Get in Touch →</a>
    </div>
</div>
@endsection