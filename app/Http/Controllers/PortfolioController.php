<?php

// app/Http/Controllers/PortfolioController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Profile data shared across all views.
     */
    private array $profile = [
        'name'        => 'Xaviery Sidney B. Magadia',
        'initials'    => 'XM',
        'short'       => 'XSM',
        'role'        => 'Full-Stack Developer · Database Architect',
        'program'     => 'BTVTED ICT',
        'university'  => 'TUP Taguig',
        'location'    => 'TUP Taguig, Philippines',
        'phone'       => '09293041153',
        'github'      => 'https://github.com/callme-zvri',
        'github_user' => 'callme-zvri',
        'facebook'    => 'Xaviery Sidney Magadia',
        'available'   => true,
        'tagline'     => 'Building clean, purposeful software from TUP Taguig.',
        'summary'     => 'I specialize in database schema design, backend API development, and mobile UI — turning academic projects into production-ready applications.',
        'stack'       => ['Laravel', 'Spring Boot', 'Flutter', 'MySQL', 'PHP'],
        'stats'       => [
            ['value' => '3+',   'label' => 'Projects'],
            ['value' => 'DBA',  'label' => 'Architect'],
            ['value' => '5+',   'label' => 'Tech Stack'],
        ],
    ];

    /** Share profile with every view */
    private function view(string $view, array $data = [])
    {
        return view($view, array_merge(['profile' => $this->profile], $data));
    }

    public function index()
    {
        return $this->view('sections.home');
    }

    public function about()
    {
        $values = [
            ['icon' => '🎯', 'title' => 'Precision',        'desc' => 'Clean schemas, clean code. No redundancy, no ambiguity — only intentional design.'],
            ['icon' => '🔁', 'title' => 'Systems Thinking', 'desc' => 'I see beyond features and think in data flows, entity relationships, and edge cases.'],
            ['icon' => '🤝', 'title' => 'Team-First',       'desc' => 'Within DSAGROUP6, I collaborate, document, and mentor — not just ship.'],
            ['icon' => '📈', 'title' => 'Growth Mindset',   'desc' => 'From TUP to Full-Stack — I embrace every level-up opportunity.'],
        ];

        return $this->view('sections.about', compact('values'));
    }

    public function education()
    {
        $timeline = [
            [
                'year'   => '2023 — Present',
                'school' => 'Technological University of the Philippines – Taguig',
                'degree' => 'Bachelor of Technical-Vocational Teacher Education (BTVTED), Major in ICT',
                'badges' => [['label' => 'Current', 'type' => 'blue'], ['label' => 'Computer Programming', 'type' => 'purple']],
                'desc'   => 'Active in software development as part of DSAGROUP6. Leading database architecture for the SchooLife community platform serving the TUPT student body.',
            ],
            [
                'year'   => 'Secondary Education',
                'school' => 'Grant Cecilia Integrated School',
                'degree' => 'Junior & Senior High School',
                'badges' => [['label' => '⭐ With Honors', 'type' => 'gold']],
                'desc'   => 'Graduated with academic honors distinction. Built a strong foundation in mathematics, logical reasoning, and analytical thinking.',
            ],
            [
                'year'   => 'Elementary',
                'school' => 'Silangan Elementary School',
                'degree' => 'Primary Education',
                'badges' => [],
                'desc'   => 'Early academic development and the seeds of curiosity that would eventually grow into a passion for technology.',
            ],
            [
                'year'   => 'Early Childhood',
                'school' => 'Funland Learning Center',
                'degree' => 'Kindergarten / Pre-school',
                'badges' => [],
                'desc'   => 'The very first step in a lifelong learning journey.',
            ],
        ];

        return $this->view('sections.education', compact('timeline'));
    }

    public function skills()
    {
        $categories = [
            [
                'title' => 'Backend & Frameworks',
                'skills' => [
                    ['icon' => '🍃', 'name' => 'Laravel',    'level' => 'Advanced',      'pct' => 85, 'color' => null],
                    ['icon' => '☕', 'name' => 'Spring Boot','level' => 'Intermediate',   'pct' => 70, 'color' => 'linear-gradient(to right,#f97316,#f59e0b)'],
                    ['icon' => '🐘', 'name' => 'PHP',        'level' => 'Advanced',      'pct' => 80, 'color' => null],
                    ['icon' => '🔌', 'name' => 'REST APIs',  'level' => 'Advanced',      'pct' => 82, 'color' => null],
                ],
            ],
            [
                'title' => 'Database & Architecture',
                'skills' => [
                    ['icon' => '🗄️', 'name' => 'MySQL',          'level' => 'Advanced',     'pct' => 88, 'color' => 'linear-gradient(to right,#a78bfa,#f472b6)'],
                    ['icon' => '📐', 'name' => 'Schema Design',  'level' => 'Advanced',     'pct' => 90, 'color' => 'linear-gradient(to right,#a78bfa,#f472b6)'],
                    ['icon' => '🔗', 'name' => 'DB Normalization','level' => 'Proficient',  'pct' => 85, 'color' => 'linear-gradient(to right,#a78bfa,#f472b6)'],
                    ['icon' => '⚡', 'name' => 'Query Optimization','level' => 'Intermediate','pct' => 72,'color' => 'linear-gradient(to right,#a78bfa,#f472b6)'],
                ],
            ],
            [
                'title' => 'Mobile & Frontend',
                'skills' => [
                    ['icon' => '📱', 'name' => 'Flutter',         'level' => 'Intermediate','pct' => 68, 'color' => 'linear-gradient(to right,#06b6d4,#3b82f6)'],
                    ['icon' => '🎨', 'name' => 'HTML / CSS',      'level' => 'Advanced',   'pct' => 83, 'color' => 'linear-gradient(to right,#06b6d4,#3b82f6)'],
                    ['icon' => '⚙️', 'name' => 'JavaScript',      'level' => 'Intermediate','pct' => 65, 'color' => 'linear-gradient(to right,#06b6d4,#3b82f6)'],
                    ['icon' => '🖌️', 'name' => 'Blade Templates', 'level' => 'Proficient', 'pct' => 80, 'color' => 'linear-gradient(to right,#06b6d4,#3b82f6)'],
                ],
            ],
            [
                'title' => 'Soft Skills & Leadership',
                'skills' => [
                        ['icon' => '🏆', 'name' => 'Leadership',      'level' => 'DSAGROUP6 Lead','pct' => 90,'color' => 'linear-gradient(to right,#f59e0b,#f97316)'],
                        ['icon' => '🔍', 'name' => 'Debugging',       'level' => 'Proficient',    'pct' => 85,'color' => 'linear-gradient(to right,#f59e0b,#f97316)'],
                    ['icon' => '⏱️', 'name' => 'Time Management', 'level' => 'Strong',        'pct' => 88,'color' => 'linear-gradient(to right,#f59e0b,#f97316)'],
                    ['icon' => '📚', 'name' => 'Fast Learner',    'level' => 'Consistently',  'pct' => 95,'color' => 'linear-gradient(to right,#f59e0b,#f97316)'],
                ],
            ],
        ];

        return $this->view('sections.skills', compact('categories'));
    }

    public function schoolife()
    {
        $features = [
            ['icon' => '🛒', 'title' => 'Student Marketplace', 'desc' => 'Buy/sell platform with product listings, categories, and messaging.'],
            ['icon' => '🔍', 'title' => 'Lost & Found System', 'desc' => 'Item reporting, claim verification, and status tracking with optimized queries.'],
            ['icon' => '📢', 'title' => 'Announcement Board',  'desc' => 'Faculty and admin can publish targeted announcements by department or batch.'],
            ['icon' => '👤', 'title' => 'Auth & Roles',        'desc' => 'Role-based access control with student, admin, and faculty permission layers.'],
            ['icon' => '📱', 'title' => 'Responsive Design',   'desc' => 'Mobile-first UI ensuring access across all student devices.'],
            ['icon' => '🔒', 'title' => 'Data Integrity',      'desc' => 'Cascade constraints and validation at both application and database layer.'],
        ];

        $dbHighlights = [
            'Designed multi-table schema with foreign key constraints ensuring referential integrity across marketplace, lost-and-found, and announcement modules',
            'Optimized table relationships to minimize query complexity — replaced naive JOIN chains with indexed lookup tables',
            'Structured user roles and permissions at the database level using a role-permission pivot table architecture',
            'Ensured cascading deletes and soft-delete patterns for non-destructive data management',
            'Implemented timestamp and audit columns across all major tables for traceability',
        ];

        $techStack = ['Laravel', 'PHP', 'MySQL', 'Blade Templates', 'HTML/CSS/JS', 'Git'];

        return $this->view('sections.schoolife', compact('features', 'dbHighlights', 'techStack'));
    }

    public function projects()
    {
        $projects = [
            [
                'icon'   => '📋',
                'title'  => 'Agoda Announcement Platform',
                'type'   => 'Web App',
                'color'  => 'linear-gradient(135deg,#a78bfa,#818cf8)',
                'badge'  => ['label' => 'Web App', 'type' => 'purple'],
                'desc'   => 'A centralized announcement and notification platform inspired by enterprise internal tools. Designed for organizations to push updates to targeted user groups with role-based visibility controls.',
                'stack'  => [['label' => 'PHP', 'type' => 'blue'], ['label' => 'MySQL', 'type' => 'pink'], ['label' => 'HTML/CSS', 'type' => 'blue']],
                'points' => ['Role-based announcement visibility', 'Admin dashboard for content management', 'User notification system with read receipts'],
            ],
            [
                'icon'   => '🥗',
                'title'  => 'Food Tracker',
                'type'   => 'Health App',
                'color'  => 'linear-gradient(135deg,#34d399,#10b981)',
                'badge'  => ['label' => 'Health App', 'type' => 'green'],
                'desc'   => 'A personal nutrition tracking application that logs daily calorie and protein intake. Allows users to search food items, log meals, and visualize nutritional progress over time.',
                'stack'  => [['label' => 'Flutter', 'type' => 'purple'], ['label' => 'MySQL', 'type' => 'pink'], ['label' => 'Laravel API', 'type' => 'blue']],
                'points' => ['Daily calorie & protein tracking', 'Food database with search functionality', 'Progress visualization with charts'],
            ],
        ];

        return $this->view('sections.projects', compact('projects'));
    }

    public function experience()
    {
        $experiences = [
            [
                'abbr'    => 'DS',
                'gradient'=> 'linear-gradient(135deg,var(--accent),var(--accent2))',
                'title'   => 'Database Administrator & Schema Architect',
                'org'     => 'DSAGROUP6 — SchooLife Project',
                'period'  => '2023 — Present · TUP Taguig',
                'bullets' => [
                    'Designed and maintained the full relational database schema for SchooLife web platform',
                    'Optimized table relationships for marketplace, lost-and-found, and announcement modules',
                    'Wrote and reviewed database migrations, seeders, and Eloquent model relationships in Laravel',
                    'Coordinated with frontend and backend developers to ensure schema aligned with business logic',
                    'Performed query analysis and optimization to improve response times across core endpoints',
                ],
                'stack'   => ['MySQL', 'Laravel', 'Schema Design'],
            ],
            [
                'abbr'    => 'FS',
                'gradient'=> 'linear-gradient(135deg,#f472b6,#a78bfa)',
                'title'   => 'Full-Stack Developer (Academic Projects)',
                'org'     => 'TUP Taguig — BTVTED ICT Program',
                'period'  => '2023 — Present · Taguig, Philippines',
                'bullets' => [
                    'Built and deployed multiple web and mobile applications as part of coursework and group projects',
                    'Implemented backend APIs using Laravel and Spring Boot REST principles',
                    'Developed mobile UI screens and navigation flows using Flutter and Dart',
                    'Collaborated in Agile-style team environments with version control via Git and GitHub',
                ],
                'stack'   => ['Laravel', 'Spring Boot', 'Flutter', 'PHP'],
            ],
        ];

        return $this->view('sections.experience', compact('experiences'));
    }

    public function hobbies()
    {
        $hobbies = [
            ['emoji' => '🏀', 'name' => 'Basketball', 'desc' => 'Court time is creative time. The fast decision-making in basketball parallels debugging under pressure — read the situation, adapt, execute. Love playing pickup games at TUPT courts.', 'badges' => ['Team Sport', 'Court Player']],
            ['emoji' => '🏐', 'name' => 'Volleyball', 'desc' => 'Volleyball is pure coordination — reading teammates, anticipating the play, and executing together. Just like a well-integrated API system.', 'badges' => ['Team Dynamics']],
            ['emoji' => '🎸', 'name' => 'Guitar',     'desc' => 'Currently on a journey learning the guitar — a discipline that demands consistent practice, pattern recognition, and the patience to debug muscle memory. Every chord learned is a new commit.', 'badges' => ['Learning', 'In Progress']],
        ];

        return $this->view('sections.hobbies', compact('hobbies'));
    }

    public function services()
    {
        $services = [
            ['icon' => '🗄️', 'title' => 'Database Design & Architecture',  'desc' => 'From initial ERD to production-ready MySQL schemas. I specialize in relational design, normalization, indexing strategies, and query optimization for scalable applications.',           'tags' => ['MySQL', 'ERD Design', 'Normalization', 'Query Optimization']],
            ['icon' => '⚙️', 'title' => 'Backend API Development',          'desc' => 'RESTful API development with Laravel and Spring Boot. Clean routes, proper authentication, validation layers, and well-documented endpoints following REST principles.',               'tags' => ['Laravel', 'Spring Boot', 'REST API', 'PHP', 'Java']],
            ['icon' => '📱', 'title' => 'Mobile UI Development',             'desc' => 'Flutter-based mobile UI development for Android and iOS. Clean widget trees, responsive layouts, and smooth navigation flows following Material Design principles.',                    'tags' => ['Flutter', 'Dart', 'Material Design', 'Cross-Platform']],
            ['icon' => '🌐', 'title' => 'Web Application Development',       'desc' => 'Full-featured web applications using Laravel with Blade templating. From authentication systems and dashboards to community platforms like SchooLife.',                                 'tags' => ['Laravel', 'Blade', 'HTML/CSS/JS', 'Full-Stack']],
            ['icon' => '🔍', 'title' => 'Code Review & Debugging',           'desc' => 'Systematic debugging and code quality review for PHP and Java applications. Identifying bottlenecks, logic errors, and potential security issues in existing codebases.',               'tags' => ['PHP', 'Java', 'Code Review', 'Debugging']],
            ['icon' => '📊', 'title' => 'System Analysis & Planning',        'desc' => 'Technical consultation on database architecture, API design patterns, and system planning for student and small-scale projects from concept to deployment roadmap.',                      'tags' => ['System Design', 'Architecture', 'Consultation']],
        ];

        return $this->view('sections.services', compact('services'));
    }

    public function contact()
    {
        return $this->view('sections.contact');
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'subject'    => 'required|string',
            'message'    => 'required|string|min:10',
        ]);

        // TODO: Add Mail::to(...)->send(...) or save to DB
        // Example: ContactMessage::create($validated);

        return back()->with('success', "Message sent! I'll get back to you soon.");
    }
}