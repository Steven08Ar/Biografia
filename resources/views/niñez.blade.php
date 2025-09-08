<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Niñez</title>
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
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .card-text h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .highlight {
            color: #ff914d;
            font-weight: bold;
        }

        .card-text p {
            font-size: 1rem;
            color: #555;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .card-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-image img {
            max-width: 100%;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .footer-buttons {
            grid-column: span 2;
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
            .card {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-buttons {
                grid-column: span 1;
            }
        }
    </style>
</head>

<body>
    <section class="card">
        <div class="card-text">
            <h1>Mi <span class="highlight">Niñez</span> 🌟</h1>
            <p>
                Desde pequeño, crecí rodeado de amor y alegría. Mi infancia estuvo llena de momentos simples pero
                inolvidables, donde descubrí la importancia de la amistad, la familia y los juegos al aire libre.
            </p>
            <p>
                Pasaba las tardes jugando con mi hermano, inventando historias y jugando al halo en el xbox. También
                recuerdo con cariño los consejos de mis padres, que me enseñaban con paciencia y
                dedicación.
            </p>
            <p>
                Estos años marcaron las bases de lo que soy hoy: alguien curioso, soñador y con ganas de aprender cada
                día más.
            </p>
        </div>

        <div class="card-image">
            <img src="https://i.postimg.cc/1XzQsJpR/image.png" alt="Foto de mi niñez">
        </div>

        <div class="footer-buttons">
            <a href="{{ route('procedencia') }}"><button class="btn-primary">⬅ Volver</button></a>
            <a href="{{ route('adolescencia') }}"><button class="btn-secondary">Adolescencia ➡</button></a>
        </div>
    </section>
</body>

</html>
