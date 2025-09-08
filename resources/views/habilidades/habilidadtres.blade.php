<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tercera Habilidad</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
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
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(255, 145, 77, 0.3);
        }

        .back-btn {
            margin-top: 30px;
            background: #eee;
            padding: 12px 25px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>
    <section class="card">
        <h1>🎨 <span class="highlight">Diseño UI/UX y Creatividad Digital</span></h1>
        <p>
            Además de mis habilidades técnicas, destaco en el <span class="highlight">diseño UI/UX</span>,
            creando interfaces modernas, intuitivas y centradas en el usuario.
            Mi experiencia en <strong>marketing digital</strong> refuerza mi capacidad de combinar
            creatividad con funcionalidad, logrando productos que no solo funcionan bien, sino que también conectan con
            las personas.
        </p>

        <h2 style="color:#333; margin-bottom:15px;">Fortalezas creativas:</h2>
        <div class="tools">
            <div class="tool">🎨 Figma</div>
            <div class="tool">📱 Diseño Responsivo</div>
            <div class="tool">💡 Experiencia de Usuario</div>
            <div class="tool">📢 Marketing Digital</div>
            <div class="tool">✨ Creatividad & Branding</div>
        </div>

        <a href="{{ route('menu') }}" class="back-btn">⬅ Volver al menú</a>
    </section>
</body>

</html>
