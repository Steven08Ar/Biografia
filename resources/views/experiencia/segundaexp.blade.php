<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segunda Experiencia Laboral</title>
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
            padding: 40px;
            width: 90%;
            max-width: 800px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .highlight {
            color: #ff914d;
            font-weight: bold;
        }

        p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .tools {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }

        .tool {
            background: #ff914d;
            color: #fff;
            padding: 12px 20px;
            border-radius: 20px;
            font-size: 0.95rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(255, 145, 77, 0.3);
            transition: transform 0.2s;
        }

        .tool:hover {
            transform: scale(1.05);
        }

        .back-btn {
            margin-top: 30px;
            background: #eee;
            color: #333;
            padding: 12px 25px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: background 0.3s, transform 0.2s;
        }

        .back-btn:hover {
            background: #ddd;
            transform: translateX(-5px);
        }
    </style>
</head>

<body>
    <section class="card">
        <h1>💻 Mi <span class="highlight">Segunda Experiencia Laboral</span></h1>
        <p>
            En esta experiencia trabajé como <span class="highlight">ingeniero backend y frontend</span>
            en el desarrollo de una <strong>página y aplicación móvil para una Inteligencia Artificial</strong>.
            Realicé el diseño en <strong>Figma</strong>, que luego llevé a la práctica con
            <strong>React Native</strong> para el frontend.
            En el backend, construí una arquitectura sólida con <strong>Laravel</strong>,
            exponiendo <strong>APIs funcionales</strong> que integraban la lógica de la IA,
            logrando una solución moderna, escalable y totalmente operativa.
        </p>

        <h2 style="color:#333; margin-bottom:15px;">Stack de Tecnologías:</h2>
        <div class="tools">
            <div class="tool">🎨 Figma</div>
            <div class="tool">⚛️ React Native</div>
            <div class="tool">🐘 Laravel</div>
            <div class="tool">🔗 APIs REST</div>
            <div class="tool">🤖 APIs de IA</div>
        </div>

        <a href="{{ route('menu') }}" class="back-btn">⬅ Volver al menú</a>
    </section>
</body>

</html>
