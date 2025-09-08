<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segunda Habilidad</title>
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
        <h1>🤖 <span class="highlight">Inteligencia Artificial y Ciencia de Datos</span></h1>
        <p>
            Tengo un gran interés y habilidad en el área de la <span class="highlight">IA</span>
            y la <span class="highlight">ciencia de datos</span>, aplicando modelos de Machine Learning,
            procesamiento de datos y análisis estadístico.
            Esto me permite desarrollar soluciones basadas en datos y aprovechar el potencial de la automatización.
        </p>

        <h2 style="color:#333; margin-bottom:15px;">Competencias principales:</h2>
        <div class="tools">
            <div class="tool">📊 Data Science</div>
            <div class="tool">🧠 Machine Learning</div>
            <div class="tool">🤖 IA aplicada</div>
            <div class="tool">📈 Estadística</div>
            <div class="tool">🐍 Python (NumPy, Pandas, TensorFlow)</div>
        </div>

        <a href="{{ route('menu') }}" class="back-btn">⬅ Volver al menú</a>
    </section>
</body>

</html>
