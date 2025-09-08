<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Adolescencia</title>
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

        .section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
        }

        .section:nth-child(even) {
            direction: rtl;
            /* invierte orden de los bloques en secciones pares */
        }

        .section:nth-child(even) .text {
            direction: ltr;
            /* evita que el texto se invierta */
        }

        .text h2 {
            margin-bottom: 15px;
            color: #333;
        }

        .text p {
            font-size: 1rem;
            color: #555;
            line-height: 1.7;
        }

        .image img {
            max-width: 100%;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
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

        @media (max-width: 768px) {
            .section {
                grid-template-columns: 1fr;
                direction: ltr !important;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <section class="card">
        <div class="card-header">
            <h1>Mi <span class="highlight">Adolescencia</span> 🎒</h1>
            <p style="color:#555;">Un tiempo de aprendizajes, retos y grandes cambios</p>
        </div>

        <div class="section">
            <div class="text">
                <h2>🎓 Estudios y aprendizajes</h2>
                <p>
                    Durante mi adolescencia descubrí nuevas pasiones y retos académicos.
                    Fueron años donde la disciplina y la curiosidad me llevaron a aprender más sobre el mundo que me
                    rodea.
                </p>
            </div>
            <div class="image">
                <img src="https://i.postimg.cc/Y21GmJsD/09d4cde5-f73b-4e9e-983a-8bc4c8acf17f.jpg"
                    alt="Imagen estudios adolescencia">
            </div>
        </div>

        <div class="section">
            <div class="text">
                <h2>⚽ Amistades y pasatiempos</h2>
                <p>
                    Compartí experiencias inolvidables con amigos: juegos, deportes y tardes de risas que dejaron
                    recuerdos imborrables.
                    La amistad fue un pilar clave en esta etapa de mi vida.
                </p>
            </div>
            <div class="image">
                <img src="https://i.postimg.cc/RhQW5Htx/787503d9-c68b-4be0-a167-75eec38b69ad.jpg"
                    alt="Imagen amistades adolescencia">
            </div>
        </div>

        <div class="section">
            <div class="text">
                <h2>🌟 Crecimiento personal</h2>
                <p>
                    Esta etapa me permitió conocerme mejor, superar desafíos y fortalecer mi carácter.
                    Fueron años que sembraron las bases de mis sueños y metas futuras.
                </p>
            </div>
            <div class="image">
                <img src="https://i.postimg.cc/52t6TjND/IMG-6209.jpg" alt="Imagen crecimiento adolescencia">
            </div>
        </div>

        <div class="footer-buttons">
            <a href="{{ route('niñez') }}"><button class="btn-primary">⬅ Volver</button></a>
            <a href="{{ route('actualidad') }}"><button class="btn-secondary">Actualmente ➡</button></a>
        </div>
    </section>
</body>

</html>
