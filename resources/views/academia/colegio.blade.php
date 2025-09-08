<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio</title>
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
        <h1>🏫 <span class="highlight">Colegio Santa Isabel de Hungría</span></h1>
        <p>
            Cursé mis estudios de bachillerato en el <span class="highlight">Colegio Santa Isabel de Hungría</span>,
            ubicado en Floridablanca, Santander.
            Allí adquirí los valores y bases fundamentales que me han acompañado en mi vida profesional y personal,
            desarrollando un gran sentido de responsabilidad, disciplina y compañerismo.
        </p>

        <p>
            Este colegio fue el primer paso en mi formación académica,
            donde descubrí mi interés por la tecnología, las matemáticas y la creatividad.
            También forjé amistades y experiencias que siempre recordaré con gratitud.
        </p>

        <a href="{{ route('menu') }}" class="back-btn">⬅ Volver al menú</a>
    </section>
</body>

</html>
