// ===== Smooth Scroll Navigation =====
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ===== Navbar Scroll Effect =====
let lastScroll = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 100) {
        navbar.style.background = 'rgba(15, 15, 35, 0.95)';
        navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.3)';
    } else {
        navbar.style.background = 'rgba(15, 15, 35, 0.8)';
        navbar.style.boxShadow = 'none';
    }

    lastScroll = currentScroll;
});

// ===== Projects Carousel =====
class ProjectsCarousel {
    constructor() {
        this.track = document.querySelector('.carousel-track');
        this.slides = document.querySelectorAll('.project-card');
        this.prevBtn = document.querySelector('.prev-btn');
        this.nextBtn = document.querySelector('.next-btn');
        this.indicators = document.querySelectorAll('.indicator');

        this.currentIndex = 0;
        this.slideCount = this.slides.length;

        this.init();
    }

    init() {
        // Add event listeners with safety checks
        if (this.prevBtn) this.prevBtn.addEventListener('click', () => this.prevSlide());
        if (this.nextBtn) this.nextBtn.addEventListener('click', () => this.nextSlide());

        if (this.indicators) {
            this.indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => this.goToSlide(index));
            });
        }

        // Touch/Swipe support with safety check
        if (this.track) this.addSwipeSupport();
    }

    updateCarousel() {
        if (!this.track) return;

        this.track.style.transition = 'transform 0.5s ease-in-out';
        const offset = -this.currentIndex * 100;
        this.track.style.transform = `translateX(${offset}%)`;

        // Update indicators
        if (this.indicators) {
            this.indicators.forEach((indicator, index) => {
                if (index === this.currentIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }
    }

    nextSlide() {
        this.currentIndex++;
        this.updateCarousel();

        // Handle infinite loop
        if (this.currentIndex >= this.slideCount) {
            setTimeout(() => {
                this.track.style.transition = 'none';
                this.currentIndex = 0;
                this.track.style.transform = `translateX(0%)`;

                // Update indicators immediately
                this.indicators.forEach((indicator, index) => {
                    indicator.classList.toggle('active', index === 0);
                });
            }, 500);
        }
    }

    prevSlide() {
        this.currentIndex--;

        // Handle infinite loop backwards
        if (this.currentIndex < 0) {
            this.track.style.transition = 'none';
            this.currentIndex = this.slideCount - 1;
            this.track.style.transform = `translateX(-${this.currentIndex * 100}%)`;

            setTimeout(() => {
                this.track.style.transition = 'transform 0.5s ease-in-out';
                this.updateCarousel();
            }, 20);
        } else {
            this.updateCarousel();
        }
    }

    goToSlide(index) {
        this.currentIndex = index;
        this.updateCarousel();
    }

    addSwipeSupport() {
        let startX = 0;
        let endX = 0;

        this.track.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        this.track.addEventListener('touchmove', (e) => {
            endX = e.touches[0].clientX;
        });

        this.track.addEventListener('touchend', () => {
            const diff = startX - endX;

            if (Math.abs(diff) > 50) { // Minimum swipe distance
                if (diff > 0) {
                    this.nextSlide();
                } else {
                    this.prevSlide();
                }
            }
        });
    }
}

// ===== Typewriter Effect =====
class Typewriter {
    constructor(element, words, wait = 3000) {
        this.element = element;
        this.words = words;
        this.txt = '';
        this.wordIndex = 0;
        this.wait = parseInt(wait, 10);
        this.type();
        this.isDeleting = false;
    }

    type() {
        const current = this.wordIndex % this.words.length;
        const fullTxt = this.words[current];

        // Check if deleting
        if (this.isDeleting) {
            // Remove char
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            // Add char
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        // Insert txt into element
        this.element.innerHTML = `<span class="txt">${this.txt}</span>`;

        // Initial Type Speed
        let typeSpeed = 150;

        if (this.isDeleting) {
            typeSpeed /= 2;
        }

        // If word is complete
        if (!this.isDeleting && this.txt === fullTxt) {
            // Make pause at end
            typeSpeed = this.wait;
            // Set delete to true
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            // Move to next word
            this.wordIndex++;
            // Pause before start typing
            typeSpeed = 500;
        }

        setTimeout(() => this.type(), typeSpeed);
    }
}

// Initialize components when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new ProjectsCarousel();

    // Init Typewriter
    const txtElement = document.querySelector('.typing-text');
    if (txtElement) {
        const words = JSON.parse(txtElement.getAttribute('data-words'));
        const wait = txtElement.getAttribute('data-wait');
        new Typewriter(txtElement, words, wait);
    }
});

// ===== Scroll Animations =====
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for scroll animations
document.addEventListener('DOMContentLoaded', () => {
    const animateElements = document.querySelectorAll('.skill-card, .contact-card, .about-description');

    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// ===== Active Navigation Link =====
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', () => {
    let current = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;

        if (window.pageYOffset >= sectionTop - 200) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// ===== Parallax Effect for Hero Section =====
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroContent = document.querySelector('.hero-content');

    if (heroContent && scrolled < window.innerHeight) {
        heroContent.style.transform = `translateY(${scrolled * 0.3}px)`;
        heroContent.style.opacity = 1 - (scrolled / 800);
    }
});

// ===== 3D Tubes Cursor Effect =====
// Initialized via module script in portfolio.blade.php
// Click anywhere to change colors randomly!

// Add CSS for active nav link
const style = document.createElement('style');
style.textContent = `
    .nav-link.active {
        color: var(--primary-light);
    }
`;
document.head.appendChild(style);
