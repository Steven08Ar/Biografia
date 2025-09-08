<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Aspiraciones y Metas</title>
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

        .section {
            text-align: left;
        }

        .section h2 {
            font-size: 1.6rem;
            color: #ff914d;
            margin-bottom: 15px;
        }

        .section p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .goals-list {
            list-style: none;
            padding: 0;
        }

        .goals-list li {
            background: #fafafa;
            border-radius: 15px;
            padding: 15px 20px;
            margin-bottom: 15px;
            font-size: 1rem;
            color: #444;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .goals-list li:hover {
            transform: translateX(5px);
        }

        .icon {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #ff914d;
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
            <h1>Mis <span class="highlight">Aspiraciones</span> y <span class="highlight">Metas</span> 🌟</h1>
        </div>

        <div class="section">
            <h2>Aspiraciones</h2>
            <p>
                Aspiro a dominar el <strong>inglés de manera fluida</strong>, lo que me permitirá acceder a
                <strong>puestos importantes</strong> en el ámbito de <strong>sistemas, ciencia de datos</strong>
                o áreas relacionadas con la tecnología.
            </p>
        </div>

        <div class="section">
            <h2>Metas</h2>
            <ul class="goals-list">
                <li><span class="icon">🗣️</span> Alcanzar un - <strong>nivel avanzado de inglés</strong> </li>
                <li><span class="icon">💻</span> Conseguir un - <strong> cargo importante en el área de
                        sistemas</strong>
                </li>
                <li><span class="icon">👨‍👩‍👧‍👦</span> Sacar adelante a mi - <strong> familia</strong>- y darles lo
                    que
                    se merecen</li>
                <li><span class="icon">🚗</span> Tener mi - <strong> propio carro</strong></li>
                <li><span class="icon">💰</span> Realizar - <strong> inversiones inteligentes</strong></li>
                <li><span class="icon">🙏</span> Lograr todo esto con el - <strong> favor de Dios</strong></li>
            </ul>
        </div>

        <div class="footer-buttons">
            <a href="{{ route('actualidad') }}"><button class="btn-primary">⬅ Volver</button></a>
            <button class="btn-secondary">Siguiente ➡</button>
        </div>
    </section>
</body>

</html>
