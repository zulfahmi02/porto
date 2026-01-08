<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Web Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>
    <!-- Custom Cursor Canvas -->
    <canvas id="canvas"></canvas>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <ul class="nav-menu">
                <li>
                    <a href="#home" class="nav-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="#about" class="nav-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span>Tentang Saya</span>
                    </a>
                </li>
                <li>
                    <a href="#projects" class="nav-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                        <span>Proyek</span>
                    </a>
                </li>
                <li>
                    <a href="#contact" class="nav-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>Kontak</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="hero-section">
        <div class="hero-content">
            <p class="hero-subtitle">WELCOME TO MY PORTFOLIO</p>
            <h1 class="hero-title">Hai, Saya <span class="typing-container"><span class="typing-text gradient-text"
                        data-wait="3000" data-words='["Fahmi", "Zulfahmi Hidayatulloh"]'></span></span></h1>
            <p class="hero-role">Web Developer</p>
            <p class="hero-description">Selamat datang di dashboard portfolio saya. Halaman ini menyajikan ringkasan
                proyek, keterampilan, dan pengalaman yang telah saya kerjakan.</p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">Project Saya</a>
                <a href="#contact" class="btn btn-secondary">Hubungi Saya</a>
            </div>
            <div class="social-links">
                <a href="https://github.com/zulfahmi02" class="social-icon" aria-label="GitHub">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                </a>
                <a href="https://linkedin.com/in/zulfahmi-hidayatulloh-220975392" class="social-icon"
                    aria-label="LinkedIn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                </a>
                <a href="zulfahmihidayatulloh@gmail.com" class="social-icon" aria-label="Email">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <h2 class="section-title">Tentang <span class="gradient-text">Saya</span></h2>
            <div class="about-content">
                <p class="about-description">
                    Saya adalah seorang web developer yang berkomitmen untuk membangun pengalaman digital yang luar
                    biasa. Dengan pengetahuan yang solid tentang React, Node.js, dan teknologi web modern, saya mengubah
                    ide-ide menjadi aplikasi yang fungsional dan cantik.
                </p>
            </div>

            <div class="skills-section">
                <h3 class="skills-title">Skills & Technologies</h3>

                @if($skills->isEmpty())
                <div class="coming-soon-placeholder">
                    <p>Coming Soon...</p>
                </div>
                @else
                @foreach($skills as $category => $categorySkills)
                <div class="skills-category">
                    <h4 class="category-title">{{ $category }}</h4>
                    <div class="skills-grid">
                        @foreach($categorySkills as $skill)
                        <div class="skill-card">
                            @if(str_starts_with($skill->icon_url, 'http'))
                                <img src="{{ $skill->icon_url }}" alt="{{ $skill->name }}" class="skill-icon" width="40" height="40">
                            @else
                                <img src="{{ asset('storage/' . $skill->icon_url) }}" alt="{{ $skill->name }}" class="skill-icon" width="40" height="40">
                            @endif
                            <span class="skill-name">{{ $skill->name }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="section-title">Featured <span class="gradient-text">Projects</span></h2>
            <p class="section-description">
                Berikut adalah proyek-proyek yang saya kerjakan. Setiap proyek dirancang untuk memberikan gambaran jelas
                mengenai pendekatan kerja, kemampuan teknis, dan nilai yang dapat saya berikan dalam setiap kolaborasi.
            </p>

            <div class="projects-carousel">
                @if($projects->isEmpty())
                    <div class="coming-soon-placeholder"
                        style="text-align: center; padding: 3rem; background: rgba(255, 255, 255, 0.05); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.1);">
                        <p>My awesome projects are coming soon!</p>
                    </div>
                @else
                    <button class="carousel-btn prev-btn" aria-label="Previous project">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>

                    <div class="carousel-container">
                        <div class="carousel-track">
                            @foreach($projects as $project)
                                <div class="project-card">
                                    <div class="project-image">
                                        @if($project->image)
                                    @if(str_starts_with($project->image, 'http'))
                                        <img src="{{ $project->image }}" alt="{{ $project->title }}">
                                    @elseif(file_exists(public_path('storage/' . $project->image)))
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                                    @else
                                        <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}">
                                    @endif
                                @endif
                                        <div class="project-overlay">
                                            <span class="project-tag">{{ $project->type }}</span>
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <h3 class="project-title">{{ $project->title }}</h3>
                                        <p class="project-description">
                                            {{ $project->description }}
                                        </p>
                                        <div class="project-tech">
                                            @foreach($project->technologies as $tech)
                                                <span class="tech-tag">{{ $tech }}</span>
                                            @endforeach
                                        </div>
                                        <div class="project-actions">
                                            @if($project->demo_url)
                                                <a href="{{ $project->demo_url }}" class="project-btn btn-demo">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2">
                                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                    Live Demo
                                                </a>
                                            @endif
                                            @if($project->code_url)
                                                <a href="{{ $project->code_url }}" class="project-btn btn-code">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                    Code
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <button class="carousel-btn next-btn" aria-label="Next project">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                @endif
            </div>

            <div class="carousel-indicators">
                @foreach($projects as $index => $project)
                <span class="indicator {{ $index === 0 ? 'active' : '' }}"></span>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Let's Work <span class="gradient-text">Together</span></h2>
            <p class="section-description">
                Saya terbuka untuk diskusi proyek baru, ide kreatif, atau kesempatan untuk menjadi bagian dari visi
                Anda. Jangan ragu untuk menghubungi saya!
            </p>

            <div class="contact-cards">
                <a href="https://github.com/zulfahmi02" class="contact-card">
                    <svg class="contact-icon" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                    <h3 class="contact-title">GitHub</h3>
                    <p class="contact-text">Check out my code</p>
                </a>

                <a href="https://www.linkedin.com/in/zulfahmi-hidayatulloh-220975392?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                    class="contact-card">
                    <svg class="contact-icon" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                    <h3 class="contact-title">LinkedIn</h3>
                    <p class="contact-text">Let's connect</p>
                </a>

                <a href="zulfahmihidayatulloh@gmail.com" class="contact-card">
                    <svg class="contact-icon" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
                    </svg>
                    <h3 class="contact-title">Email</h3>
                    <p class="contact-text">Send me a message</p>
                </a>
            </div>

            <a href="#contact" class="cta-button">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path
                        d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
                </svg>
                Get In Touch
            </a>
        </div>

        <footer class="footer">
            <p>&copy; 2026 Zulfahmi Hidayatulloh. All rights reserved.</p>
            <p class="footer-credit">Built with <span class="heart">❤</span> using Laravel & Deepmind</p>
        </footer>
    </section>

    <script src="{{ asset('js/portfolio.js') }}"></script>
    <script src="{{ asset('js/cursor-effect.js') }}"></script>
</body>

</html>