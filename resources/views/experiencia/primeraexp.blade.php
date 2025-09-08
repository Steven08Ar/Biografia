<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera Experiencia Laboral</title>
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
        <h1>💼 Mi <span class="highlight">Primera Experiencia Laboral</span></h1>
        <p>
            Mi primera experiencia laboral fue la creación de una página web de
            <span class="highlight">e-commerce para una empresa de mascotas</span>.
            Utilicé <strong>WordPress</strong> junto con otras herramientas y complementos,
            logrando un sitio funcional, atractivo y optimizado para que los clientes pudieran
            comprar productos de manera sencilla y segura.
        </p>

        <h2 style="color:#333; margin-bottom:15px;">Herramientas utilizadas:</h2>
        <div class="tools">
            <div class="tool">WordPress</div>
            <div class="tool">WooCommerce</div>
            <div class="tool">Elementor</div>
            <div class="tool">Plugins SEO</div>
            <div class="tool">Google Analytics</div>
        </div>

        <a href="{{ route('menu') }}" class="back-btn">⬅ Volver al menú</a>
    </section>
</body>

</html>
