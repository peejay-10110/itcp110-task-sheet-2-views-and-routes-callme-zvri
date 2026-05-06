{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $profile['short'] }} — @yield('title', 'Portfolio')</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
@stack('styles')
</head>
<body>

{{-- ─────────────────────────── NAVBAR ─────────────────────────── --}}
<nav id="navbar">
    <a href="{{ route('home') }}" class="nav-logo">{{ $profile['short'] }}<span>.</span></a>

    <div class="nav-links" id="navLinks">
        <a href="{{ route('home') }}"              class="{{ request()->routeIs('home')               ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}"             class="{{ request()->routeIs('about')              ? 'active' : '' }}">About</a>
        <a href="{{ route('education') }}"         class="{{ request()->routeIs('education')          ? 'active' : '' }}">Education</a>
        <a href="{{ route('skills') }}"            class="{{ request()->routeIs('skills')             ? 'active' : '' }}">Skills</a>
        <a href="{{ route('projects.schoolife') }}" class="{{ request()->routeIs('projects.schoolife') ? 'active' : '' }}">SchooLife</a>
        <a href="{{ route('projects.archive') }}"  class="{{ request()->routeIs('projects.archive')   ? 'active' : '' }}">Projects</a>
        <a href="{{ route('experience') }}"        class="{{ request()->routeIs('experience')         ? 'active' : '' }}">Experience</a>
        <a href="{{ route('hobbies') }}"           class="{{ request()->routeIs('hobbies')            ? 'active' : '' }}">Hobbies</a>
        <a href="{{ route('services') }}"          class="{{ request()->routeIs('services')           ? 'active' : '' }}">Services</a>
        <a href="{{ route('contact') }}"           class="{{ request()->routeIs('contact')            ? 'active nav-cta' : 'nav-cta' }}">Contact</a>
    </div>

    <button class="menu-btn" onclick="toggleMenu()" aria-label="Toggle Menu">☰</button>
</nav>

{{-- ─────────────────────────── PAGE CONTENT ─────────────────────── --}}
<main>
    @yield('content')
</main>

{{-- ─────────────────────────── FOOTER ─────────────────────────── --}}
<footer>
    <p>Built by <a href="{{ route('home') }}">{{ $profile['name'] }}</a> — {{ $profile['program'] }} Student at {{ $profile['university'] }}</p>
    <p style="margin-top:0.4rem;">Laravel Portfolio · Database Architect · Full-Stack Developer</p>
</footer>

<script>
function toggleMenu() {
    document.getElementById('navLinks').classList.toggle('open');
}

// Scroll-triggered fade-up animations
document.addEventListener('DOMContentLoaded', () => {
    const obs = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('visible'), i * 80);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));
});
</script>

@stack('scripts')
</body>
</html>
