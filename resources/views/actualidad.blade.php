<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Presente</title>
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
            width: 90%;
            max-width: 1000px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 40px;
            text-align: center;
        }

        .card-header h1 {
            font-size: 2.5rem;
            margin: 0;
            color: #333;
        }

        .highlight {
            color: #ff914d;
            font-weight: bold;
        }

        .card-header p {
            font-size: 1.1rem;
            color: #555;
            margin-top: 10px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .block {
            background: #fafafa;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .block:hover {
            transform: translateY(-5px);
        }

        .block h2 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: #ff914d;
        }

        .block p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        .icon {
            font-size: 3rem;
            margin-bottom: 15px;
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
            <h1>Mi <span class="highlight">Presente</span> 🚀</h1>
            <p>Lo que hago y me apasiona actualmente</p>
        </div>

        <div class="grid">
            <div class="block">
                <div class="icon">🎓</div>
                <h2>Estudiante</h2>
                <p>
                    Actualmente curso <strong>Ingeniería de Sistemas</strong> en la <strong>UNAB</strong>,
                    donde aprendo sobre desarrollo, innovación y tecnología.
                </p>
            </div>

            <div class="block">
                <div class="icon">🎬</div>
                <h2>Pasatiempos</h2>
                <p>
                    Una de mis actividades favoritas es <strong>ver películas</strong>,
                    disfrutando de historias, géneros y estilos cinematográficos diferentes.
                </p>
            </div>

            <div class="block">
                <div class="icon">💼</div>
                <h2>Trabajo</h2>
                <p>
                    Actualmente trabajo en una institución como <strong>especialista en marketing digital</strong>
                    y <strong>diseñador UI/UX</strong>, aportando soluciones creativas y efectivas.
                </p>
            </div>
        </div>

        <div class="footer-buttons">
            <a href="{{ route('adolescencia') }}"><button class="btn-primary">⬅ Volver</button></a>
            <button class="btn-secondary">Futuro ➡</button>
        </div>
    </section>
</body>

</html>
