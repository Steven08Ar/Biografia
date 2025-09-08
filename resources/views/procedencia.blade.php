<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mí - Origen y Familia</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background: #fff;
            border-radius: 25px;
            padding: 50px;
            width: 85%;
            max-width: 1000px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .card-header {
            text-align: center;
        }

        .card-header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .highlight {
            color: #ff914d;
            font-weight: bold;
        }

        .timeline {
            display: flex;
            flex-direction: column;
            gap: 30px;
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #ff914d;
            border-radius: 2px;
        }

        .timeline-item {
            position: relative;
        }

        .timeline-dot {
            position: absolute;
            left: -2px;
            top: 5px;
            width: 15px;
            height: 15px;
            background: #ff914d;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 145, 77, 0.6);
        }

        .timeline-content {
            background: #f9f9f9;
            padding: 15px 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .timeline-content h3 {
            margin: 0 0 5px 0;
            color: #333;
        }

        .timeline-content p {
            margin: 0;
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .footer-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .btn-primary {
            background: #ff914d;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: bold;
            color: #fff;
            margin-right: 10px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(255, 145, 77, 0.4);
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #ff7a2f;
        }

        .btn-secondary {
            background: #eee;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: bold;
            color: #444;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-secondary:hover {
            background: #ddd;
        }
    </style>
</head>

<body>
    <section class="card">
        <div class="card-header">
            <h1><span class="highlight">Mi Historia</span> 📖</h1>
            <p style="color:#555;">Un vistazo a mis orígenes y familia</p>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>🌍 Lugar de Nacimiento</h3>
                    <p>Nací en <strong>Bucaramanga, Santander</strong>, una ciudad vibrante conocida como la “Ciudad
                        Bonita de Colombia”.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>👨‍👩‍👦‍👦 Padres</h3>
                    <p>Hijo de <strong>Alonso Arias</strong> y <strong>Sandra Estupiñán</strong>, quienes me inculcaron
                        valores
                        de esfuerzo, dedicación y humildad.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>👫 Hermanos</h3>
                    <p>Crecí junto a <strong>Jesús Arias</strong>, quien ha sido mi compañero
                        inseparable de aventuras y aprendizajes.</p>
                </div>
            </div>
        </div>

        <div class="footer-buttons">
            <a href="{{ route('nombre') }}"><button class="btn-primary">⬅ Volver</button></a>
            <a href="{{ route('niñez') }}"><button class="btn-secondary">Mi niñez ➡</button></a>
        </div>
    </section>

    <script>
        // Efecto ripple en botones
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                // Solo bloquear navegación si es un <a>
                if (this.tagName === 'A') {
                    e.preventDefault();

                    const href = this.getAttribute('href');
                    const target = this.getAttribute('target');

                    // ripple effect
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            left: ${x}px;
            top: ${y}px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
        `;

                    this.style.position = 'relative';
                    this.style.overflow = 'hidden';
                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                        if (target === '_blank') {
                            window.open(href, '_blank');
                        } else {
                            window.location.href = href;
                        }
                    }, 300); // espera 300ms para que se vea la animación
                }
            });

        });

        // Animaciones de entrada
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0) scale(1)';
                    }, index * 100);
                }
            });
        }, observerOptions);

        // Aplicar animaciones a los tags
        document.querySelectorAll('.tag').forEach((tag, index) => {
            tag.style.cssText += `
                opacity: 0;
                transform: translateY(20px) scale(0.8);
                transition: all 0.6s ease ${index * 0.1}s;
            `;
            observer.observe(tag);
        });

        // Parallax sutil
        let ticking = false;

        function updateParallax() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.3;

            document.querySelector('.profile-circle').style.transform =
                `translateY(${rate}px)`;

            ticking = false;
        }

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        });

        // Inicializar animaciones
        setTimeout(() => {
            document.querySelectorAll('.tag').forEach(tag => {
                tag.style.opacity = '1';
                tag.style.transform = 'translateY(0) scale(1)';
            });
        }, 300);
    </script>

    <style>
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    </style>

</body>

</html>
