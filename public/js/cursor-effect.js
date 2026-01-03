// ===== Custom 3D Cursor Trail Effect =====
class CursorEffect {
    constructor() {
        this.canvas = document.getElementById('canvas');
        if (!this.canvas) return;

        this.ctx = this.canvas.getContext('2d');
        this.particles = [];
        this.mouse = { x: 0, y: 0 };
        this.colors = ['#f967fb', '#53bc28', '#6958d5', '#83f36e', '#fe8a2e', '#ff008a', '#60aed5'];

        this.init();
    }

    init() {
        this.resize();
        window.addEventListener('resize', () => this.resize());
        window.addEventListener('mousemove', (e) => this.onMouseMove(e));
        window.addEventListener('click', () => this.randomizeColors());

        this.animate();
    }

    resize() {
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
    }

    onMouseMove(e) {
        this.mouse.x = e.clientX;
        this.mouse.y = e.clientY;

        // Throttle particle creation - only create particles occasionally
        if (Math.random() > 0.7) { // Only 30% of the time
            // Create fewer particles for better performance
            for (let i = 0; i < 2; i++) {
                this.particles.push(new Particle(
                    this.mouse.x,
                    this.mouse.y,
                    this.colors[Math.floor(Math.random() * this.colors.length)]
                ));
            }
        }

        // Limit total particles to prevent memory issues
        if (this.particles.length > 100) {
            this.particles = this.particles.slice(-100);
        }
    }

    randomizeColors() {
        this.colors = [];
        for (let i = 0; i < 7; i++) {
            this.colors.push('#' + Math.floor(Math.random() * 16777215).toString(16).padStart(6, '0'));
        }
        console.log('New colors:', this.colors);
    }

    animate() {
        // Clear canvas with transparency (no dark overlay)
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);

        // Update and draw particles
        for (let i = this.particles.length - 1; i >= 0; i--) {
            const particle = this.particles[i];
            particle.update();
            particle.draw(this.ctx);

            if (particle.life <= 0) {
                this.particles.splice(i, 1);
            }
        }

        requestAnimationFrame(() => this.animate());
    }
}

class Particle {
    constructor(x, y, color) {
        this.x = x;
        this.y = y;
        this.color = color;
        this.size = Math.random() * 12 + 8; // Larger particles
        this.speedX = (Math.random() - 0.5) * 3;
        this.speedY = (Math.random() - 0.5) * 3;
        this.life = 1;
        this.decay = Math.random() * 0.015 + 0.005; // Slower decay = longer trails
        this.angle = Math.random() * Math.PI * 2;
        this.angleSpeed = (Math.random() - 0.5) * 0.1;
    }

    update() {
        this.x += this.speedX;
        this.y += this.speedY;
        this.life -= this.decay;
        this.angle += this.angleSpeed;
        this.size *= 0.98;
    }

    draw(ctx) {
        ctx.save();
        ctx.globalAlpha = this.life * 0.7; // Reduced opacity

        // Draw softer glow
        const gradient = ctx.createRadialGradient(this.x, this.y, 0, this.x, this.y, this.size * 3);
        gradient.addColorStop(0, this.color);
        gradient.addColorStop(0.3, this.color + '60'); // More transparent
        gradient.addColorStop(1, this.color + '00');

        ctx.fillStyle = gradient;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size * 3, 0, Math.PI * 2);
        ctx.fill();

        // Draw softer core
        ctx.fillStyle = this.color + '80'; // Semi-transparent core
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();

        ctx.restore();
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new CursorEffect();
});
