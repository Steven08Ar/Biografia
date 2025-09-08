<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera Habilidad</title>
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
        <h1>💻 <span class="highlight">Desarrollo Full-Stack</span></h1>
        <p>
            Mi primera gran habilidad es el <span class="highlight">desarrollo full-stack</span>,
            que me permite construir proyectos completos desde la interfaz hasta la lógica del servidor.
            Domino tanto el <strong>Frontend</strong> (interfaces dinámicas y modernas) como el
            <strong>Backend</strong> (arquitectura, APIs y bases de datos).
        </p>

        <h2 style="color:#333; margin-bottom:15px;">Tecnologías dominadas:</h2>
        <div class="tools">
            <div class="tool">⚛️ React</div>
            <div class="tool">📱 React Native</div>
            <div class="tool">🐘 Laravel</div>
            <div class="tool">🐍 Python</div>
            <div class="tool">🗄️ MySQL / PostgreSQL</div>
        </div>

        <a href="{{ route('menu') }}" class="back-btn">⬅ Volver al menú</a>
    </section>
</body>

</html>
