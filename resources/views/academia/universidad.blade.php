<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad</title>
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
        <h1>🎓 <span class="highlight">Universidad Autónoma de Bucaramanga (UNAB)</span></h1>
        <p>
            Actualmente estudio <span class="highlight">Ingeniería de Sistemas</span> en la
            <span class="highlight">Universidad Autónoma de Bucaramanga (UNAB)</span>, una institución
            reconocida en Colombia por su excelencia académica y su enfoque en la innovación tecnológica.
        </p>

        <p>
            La UNAB me ha permitido fortalecer mis habilidades como desarrollador, ingeniero de software y profesional
            del área digital.
            Aquí he tenido la oportunidad de profundizar en áreas como <strong>desarrollo full-stack</strong>,
            <strong>inteligencia artificial</strong>, <strong>ciencia de datos</strong> y
            <strong>diseño UI/UX</strong>, consolidando mi perfil como un ingeniero integral.
        </p>

        <p>
            Gracias a la UNAB, he podido crecer no solo en lo académico, sino también en lo personal,
            aprendiendo a enfrentar retos con creatividad, innovación y disciplina.
        </p>

        <a href="{{ route('menu') }}" class="back-btn">⬅ Volver al menú</a>
    </section>
</body>

</html>
