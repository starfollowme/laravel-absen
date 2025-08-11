@extends('layout.admin')
@section('title', 'Dashboard Admin')

@push('styles')
<style>
/* Animasi dan Efek CSS */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
    --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
}

/* Override content background */
.content {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%) !important;
    min-height: 100vh !important;
}

/* Animasi Fade In */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes bounceIn {
    0% {
        opacity: 0;
        transform: scale(0.3);
    }
    50% {
        opacity: 1;
        transform: scale(1.05);
    }
    70% {
        transform: scale(0.9);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(52, 152, 219, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(52, 152, 219, 0);
    }
}

@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0px);
    }
}

@keyframes shimmer {
    0% {
        background-position: -468px 0;
    }
    100% {
        background-position: 468px 0;
    }
}

/* Container dengan animasi */
.container-fluid {
    animation: fadeInUp 0.8s ease-out;
}

/* Alert dengan efek glassmorphism */
.welcome-alert {
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    animation: bounceIn 1s ease-out;
    position: relative;
    overflow: hidden;
}

.welcome-alert::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    animation: shimmer 2s infinite;
}

.welcome-alert .icon-wrapper {
    width: 60px;
    height: 60px;
    background: var(--primary-gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: pulse 2s infinite;
    margin-right: 20px;
}

/* Kartu statistik dengan efek hover 3D */
.stats-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.6s ease-out;
    animation-fill-mode: both;
}

.stats-card:nth-child(1) { animation-delay: 0.1s; }
.stats-card:nth-child(2) { animation-delay: 0.2s; }
.stats-card:nth-child(3) { animation-delay: 0.3s; }

.stats-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s;
}

.stats-card:hover::before {
    transform: translateX(100%);
}

.stats-card:hover {
    transform: translateY(-15px) rotateX(10deg) rotateY(5deg);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
}

.stats-card.primary {
    background: var(--primary-gradient);
}

.stats-card.success {
    background: var(--success-gradient);
}

.stats-card.warning {
    background: var(--warning-gradient);
}

/* Angka dengan efek counter */
.counter-number {
    font-size: 3rem;
    font-weight: 700;
    background: linear-gradient(45deg, #fff, #f8f9fa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-shadow: 0 4px 8px rgba(0,0,0,0.3);
    animation: float 3s ease-in-out infinite;
}

/* Icon dengan animasi rotate */
.stats-icon {
    font-size: 2.5rem;
    animation: float 2s ease-in-out infinite alternate;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
}

/* Chart container dengan efek */
.chart-container {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border-radius: 25px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.8s ease-out 0.4s both;
}

.chart-header {
    background: var(--dark-gradient);
    color: white;
    padding: 20px 30px;
    border-radius: 25px 25px 0 0;
    position: relative;
    overflow: hidden;
}

.chart-header::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='m36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
    opacity: 0.3;
}

/* Progress bar animasi */
.progress-animated {
    height: 8px;
    border-radius: 10px;
    background: rgba(255,255,255,0.2);
    overflow: hidden;
    position: relative;
}

.progress-animated::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: linear-gradient(45deg, #fff, #f8f9fa);
    border-radius: 10px;
    animation: progressLoad 2s ease-out forwards;
}

@keyframes progressLoad {
    from { width: 0; }
    to { width: var(--progress-width, 75%); }
}

/* Floating particles effect */
.particles {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: -1;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: rgba(52, 152, 219, 0.3);
    border-radius: 50%;
    animation: floatParticle 15s infinite linear;
}

@keyframes floatParticle {
    0% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
    }
    10% {
        opacity: 1;
    }
    90% {
        opacity: 1;
    }
    100% {
        transform: translateY(-10vh) rotate(360deg);
        opacity: 0;
    }
}

/* Responsive animations */
@media (max-width: 768px) {
    .stats-card:hover {
        transform: translateY(-5px);
    }

    .counter-number {
        font-size: 2rem;
    }
}

/* Loading skeleton effect */
.skeleton {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
}

@keyframes loading {
    0% {
        background-position: 200% 0;
    }
    100% {
        background-position: -200% 0;
    }
}
</style>
@endpush

@section('content')
<div class="container-fluid py-4">
    <!-- Floating Particles Background -->
    <div class="particles" id="particles"></div>

    {{-- Notifikasi sambutan dengan efek glassmorphism --}}
    <div class="alert welcome-alert shadow-lg border-0 rounded-4 d-flex align-items-center mb-4">
        <div class="icon-wrapper">
            <i class="fas fa-crown text-white" style="font-size: 1.5rem;"></i>
        </div>
        <div class="flex-grow-1">
            <h4 class="mb-1 fw-bold text-dark">
                <span class="typing-effect">Selamat Datang, {{ $user->name ?? 'User' }}!</span>
                <span class="wave">👋</span>
            </h4>
            <p class="mb-0 text-muted">Dashboard administrasi sekolah Anda dengan teknologi terdepan</p>
            <div class="progress-animated mt-2" style="--progress-width: 85%;"></div>
        </div>
    </div>

    {{-- Statistik dalam Kartu dengan efek 3D --}}
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card stats-card primary text-white shadow h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-uppercase fw-bold opacity-75 mb-2">Total Guru & Staf</h6>
                            <div class="counter-number" data-target="{{ $totalGuru ?? 0 }}">0</div>
                            <p class="mb-0 opacity-75 small">
                                <i class="fas fa-trending-up me-1"></i>
                                Jumlah pendidik terdaftar
                            </p>
                        </div>
                        <div class="stats-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                    <div class="progress-animated mt-3" style="--progress-width: 78%;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stats-card success text-white shadow h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-uppercase fw-bold opacity-75 mb-2">Total Murid</h6>
                            <div class="counter-number" data-target="{{ $totalMurid ?? 0 }}">0</div>
                            <p class="mb-0 opacity-75 small">
                                <i class="fas fa-users me-1"></i>
                                Siswa aktif terdaftar
                            </p>
                        </div>
                        <div class="stats-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                    <div class="progress-animated mt-3" style="--progress-width: 92%;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stats-card warning text-white shadow h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-uppercase fw-bold opacity-75 mb-2">Kehadiran Hari Ini</h6>
                            <div class="counter-number" data-target="{{ $persentaseAbsensi ?? 0 }}">0</div>
                            <p class="mb-0 opacity-75 small">
                                <i class="fas fa-clock me-1"></i>
                                Tingkat kehadiran real-time
                            </p>
                        </div>
                        <div class="stats-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                    </div>
                    <div class="progress-animated mt-3" style="--progress-width: {{ $persentaseAbsensi ?? 75 }}%;"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Diagram Interaktif dengan Efek 3D --}}
    <div class="chart-container shadow-lg">
        <div class="chart-header">
            <div class="d-flex align-items-center">
                <i class="fas fa-chart-bar me-3"></i>
                <div>
                    <h5 class="mb-0 fw-bold">Statistik Sekolah Interaktif</h5>
                    <small class="opacity-75">Dashboard analitik dengan visualisasi 3D</small>
                </div>
            </div>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-8">
                    <canvas id="stats3DChart" style="max-height: 400px;"></canvas>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-center p-3 bg-light rounded-3">
                            <div class="bg-primary rounded-circle p-2 me-3">
                                <i class="fas fa-chalkboard-teacher text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Guru & Staf</h6>
                                <small class="text-muted">{{ $totalGuru ?? 0 }} Orang</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3 bg-light rounded-3">
                            <div class="bg-success rounded-circle p-2 me-3">
                                <i class="fas fa-graduation-cap text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Murid</h6>
                                <small class="text-muted">{{ $totalMurid ?? 0 }} Orang</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3 bg-light rounded-3">
                            <div class="bg-warning rounded-circle p-2 me-3">
                                <i class="fas fa-user-check text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Kehadiran</h6>
                                <small class="text-muted">{{ $persentaseAbsensi ?? 0 }}%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Typing effect untuk welcome message
    function typeWriter(element, text, speed = 100) {
        let i = 0;
        element.innerHTML = '';
        function typing() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(typing, speed);
            }
        }
        typing();
    }

    const typingElement = document.querySelector('.typing-effect');
    if (typingElement) {
        const originalText = typingElement.textContent;
        typeWriter(typingElement, originalText, 80);
    }

    // Counter animation
    function animateCounter(element, target, duration = 2000) {
        let startTime = null;
        const start = 0;

        function animate(currentTime) {
            if (!startTime) startTime = currentTime;
            const progress = Math.min((currentTime - startTime) / duration, 1);
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const current = Math.floor(easeOutQuart * target);
            element.textContent = current.toLocaleString();

            if (progress < 1) {
                requestAnimationFrame(animate);
            }
        }
        requestAnimationFrame(animate);
    }

    // Animate all counters
    document.querySelectorAll('.counter-number').forEach(counter => {
        const target = parseInt(counter.dataset.target);
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(counter, target);
                    observer.unobserve(entry.target);
                }
            });
        });
        observer.observe(counter);
    });

    // Floating particles
    function createParticles() {
        const particlesContainer = document.getElementById('particles');
        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particlesContainer.appendChild(particle);
        }
    }
    createParticles();

    // Wave animation
    const wave = document.querySelector('.wave');
    if (wave) {
        setInterval(() => {
            wave.style.transform = 'rotate(20deg)';
            setTimeout(() => {
                wave.style.transform = 'rotate(-20deg)';
                setTimeout(() => {
                    wave.style.transform = 'rotate(0deg)';
                }, 150);
            }, 150);
        }, 3000);
    }

    // Enhanced 3D Chart
    const ctx = document.getElementById('stats3DChart').getContext('2d');

    const chartData = {
        labels: ['Guru & Staf', 'Murid', 'Kehadiran (%)'],
        datasets: [{
            label: 'Statistik',
            data: [
                {{ $totalGuru ?? 0 }},
                {{ $totalMurid ?? 0 }},
                {{ $persentaseAbsensi ?? 0 }}
            ],
            backgroundColor: [
                'rgba(102, 126, 234, 0.8)',
                'rgba(79, 172, 254, 0.8)',
                'rgba(250, 112, 154, 0.8)'
            ],
            borderColor: [
                'rgba(102, 126, 234, 1)',
                'rgba(79, 172, 254, 1)',
                'rgba(250, 112, 154, 1)'
            ],
            borderWidth: 3,
            borderRadius: 15,
            borderSkipped: false,
        }]
    };

    const chart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
                intersect: false,
                mode: 'index',
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.9)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    cornerRadius: 10,
                    displayColors: true,
                    callbacks: {
                        label: function(context) {
                            const label = context.dataset.label || '';
                            const value = context.parsed.y;
                            const suffix = context.dataIndex === 2 ? '%' : ' Orang';
                            return `${label}: ${value.toLocaleString()}${suffix}`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 12,
                            weight: 'bold'
                        }
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)',
                        drawBorder: false
                    },
                    ticks: {
                        font: {
                            size: 11
                        }
                    }
                }
            },
            animation: {
                duration: 2000,
                easing: 'easeOutBounce',
                delay: (context) => context.dataIndex * 300
            },
            onHover: (event, activeElements) => {
                event.native.target.style.cursor = activeElements.length > 0 ? 'pointer' : 'default';
            }
        }
    });

    // Chart hover effects
    ctx.canvas.addEventListener('mousemove', (e) => {
        const points = chart.getElementsAtEventForMode(e, 'nearest', { intersect: true }, true);
        if (points.length) {
            ctx.canvas.style.cursor = 'pointer';
        } else {
            ctx.canvas.style.cursor = 'default';
        }
    });

    // Add smooth scrolling
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

    // Add intersection observer for fade-in effects
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.stats-card, .chart-container').forEach(el => {
        observer.observe(el);
    });
});

// Performance optimization
window.addEventListener('load', () => {
    // Remove loading states
    document.querySelectorAll('.skeleton').forEach(el => {
        el.classList.remove('skeleton');
    });
});
</script>
@endpush