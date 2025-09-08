<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f5f5f7;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 1200px;
            /* 🔥 más ancho */
            padding: 60px;
            /* 🔥 más espacio interno */
            margin: 60px auto;
            background: #fff;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .hello-bubble {
            position: absolute;
            top: 250px;
            right: 1300px;
            background: white;
            padding: 10px 20px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            font-size: 14px;
            color: #666;
            z-index: 10;
        }

        .hello-bubble::after {
            content: '';
            position: absolute;
            bottom: -6px;
            right: 25px;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid white;
        }

        .decorative-line {
            position: absolute;
            top: 90px;
            right: 110px;
            width: 30px;
            height: 2px;
            background: #ff8c42;
            border-radius: 1px;
            transform: rotate(-20deg);
            z-index: 5;
        }

        .decorative-line2 {
            position: absolute;
            bottom: 200px;
            left: 200px;
            width: 40px;
            height: 2px;
            background: #ff8c42;
            border-radius: 1px;
            transform: rotate(30deg);
            z-index: 5;
        }

        .main-content {
            display: flex;
            height: 100%;
            position: relative;
        }

        .left-section {
            flex: 1;
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .title {
            font-size: 355%;
            font-weight: 800;
            color: #2c2c2c;
            line-height: 1;
            margin-bottom: 20px;
        }

        .title .highlight {
            color: #ff8c42;
        }

        .wave-emoji {
            display: inline-block;
            animation: wave 1.5s ease-in-out infinite;
        }

        @keyframes wave {

            0%,
            100% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(20deg);
            }

            75% {
                transform: rotate(-10deg);
            }
        }

        .subtitle {
            font-size: 2rem;
            color: #2c2c2c;
            font-weight: 600;
            margin-bottom: 40px;
            line-height: 1.2;
        }

        .quote-section {
            margin-bottom: 50px;
        }

        .quote-mark {
            font-size: 3rem;
            color: #ddd;
            font-family: Georgia, serif;
            line-height: 1;
            margin-bottom: 10px;
        }

        .quote-text {
            font-size: 1rem;
            color: #666;
            line-height: 1.5;
            margin-left: 1px;
        }

        .buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 16px 32px;
            border: none;
            border-radius: 30px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff8c42 0%, #ffb366 100%);
            color: white;
            box-shadow: 0 8px 25px rgba(255, 140, 66, 0.25);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(255, 140, 66, 0.35);
        }

        .btn-secondary {
            background: #f0f0f0;
            color: #666;
        }

        .btn-secondary:hover {
            background: #e8e8e8;
            transform: translateY(-1px);
        }

        .right-section {
            width: 500px;
            height: 500px;
            position: relative;
            display: flex;
            align-items: center;
            /* 🔥 centrado vertical */
            justify-content: center;
            /* 🔥 centrado horizontal */
        }

        /* Círculo */
        .profile-circle {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #ff8c42 0%, #ffb366 100%);
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(255, 140, 66, 0.25);
            z-index: 5;
        }

        /* Imagen */
        .profile-image {
            position: absolute;
            bottom: 80;
            left: 50%;
            transform: translateX(-50%);
            width: 420px;
            /* ajusta el tamaño a tu foto */
            height: auto;
            border-radius: 120px 120px 0 0;
            /* 🔥 borde redondeado arriba */
            object-fit: cover;
        }


        .experience-card {
            position: absolute;
            top: 70px;
            right: -25px;
            background: white;
            padding: 20px 25px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            z-index: 10;
        }

        .experience-card span {
            display: block;
            font-size: 14px;
            font-weight: 400;
            color: #555;
            margin-top: 4px;
        }

        .experience-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #2c2c2c;
            line-height: 1;
            margin-bottom: 5px;
        }

        .experience-text {
            font-size: 0.85rem;
            color: #666;
            line-height: 1.3;
        }

        /* Tags flotantes */
        .tag {
            position: absolute;
            background: rgba(0, 0, 0, 0.85);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
            backdrop-filter: blur(10px);
            z-index: 15;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
            animation: float 4s ease-in-out infinite;
        }

        /* Mejor distribución circular */
        .tag-marketing {
            top: 13%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .tag-ads {
            top: 50%;
            right: 2%;
            /* 🔥 más pegado */
            transform: translate(50%, -50%);
        }

        .tag-brand {
            bottom: 35%;
            left: 10%;
            /* 🔥 más pegado */
            transform: translate(-50%, 50%);
        }

        .tag-social {
            bottom: 5%;
            /* justo debajo */
            left: 50%;
            transform: translate(-50%, 50%);
        }


        /* Animación flotante */
        @keyframes float {

            0%,
            100% {
                transform: translate(-50%, -50%) translateY(0);
            }

            50% {
                transform: translate(-50%, -50%) translateY(-6px);
            }
        }

        .hello-bubble {
            animation: float 3s ease-in-out infinite;
        }

        .tag:hover {
            transform: scale(1.05);
            transition: all 0.3s ease;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                height: auto;
                min-height: 600px;
            }

            .main-content {
                flex-direction: column;
            }

            .left-section {
                padding: 40px 30px;
                text-align: center;
            }

            .right-section {
                width: 100%;
                padding: 40px 30px;
                height: 400px;
            }

            .title {
                font-size: 3rem;
            }

            .subtitle {
                font-size: 1.5rem;
            }

            .profile-circle {
                width: 280px;
                height: 280px;
            }

            .experience-card {
                top: 20px;
                right: 20px;
            }

            .tag-marketing {
                top: 100px;
                left: 20px;
            }

            .tag-ads {
                top: 60px;
                right: 20px;
            }

            .tag-brand {
                bottom: 100px;
                left: 10px;
            }

            .tag-social {
                bottom: 60px;
                right: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="hello-bubble">Hola!</div>
        <div class="decorative-line"></div>
        <div class="decorative-line2"></div>

        <div class="main-content">
            <div class="left-section">
                <h1 class="title">Soy <span class="highlight">Santiago</span> <span class="wave-emoji">👋</span></h1>
                <h2 class="subtitle">Ingeniero de sistemas</h2>

                <div class="quote-section">
                    <div class="quote-mark"></div>
                    <p class="quote-text">Me llamo Santiago Steven Arias Estupiñán y soy estudiante de la Universidad
                        Autónoma de Bucaramanga.</p>
                </div>

                <div class="buttons">
                    <!-- Enlace interno a la ruta 'procedencia' -->
                    <a href="{{ route('procedencia') }}" class="btn btn-primary">Conóceme ↗</a>

                    <!-- Enlace externo a LinkedIn -->
                    <a href="https://www.linkedin.com/in/santiago-steven-arias-estupinan/" target="_blank"
                        rel="noopener noreferrer" class="btn btn-secondary">
                        LinkedIn
                    </a>
                </div>


            </div>

            <div class="right-section">
                <div class="experience-card">
                    <div class="experience-number">19 años</div>
                    <div class="experience-text">de Edad</div>
                </div>

                <div class="profile-circle">
                    <img src="https://i.postimg.cc/yNZzsm6m/YOOOOOOOOOO.png" alt="Profile Picture"
                        class="profile-image">
                </div>

                <!-- Tags fuera del círculo -->
                <div class="tag tag-marketing">📢 Marketing</div>
                <div class="tag tag-ads">🚀 IA</div>
                <div class="tag tag-brand">⭐ Full-Stack</div>
                <div class="tag tag-social">📱 Frontend</div>
            </div>

        </div>
    </div>

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
