<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Opciones</title>
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
            max-width: 700px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
        }

        .accordion {
            margin-bottom: 20px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
        }

        .accordion-header {
            background: #ff914d;
            color: #fff;
            padding: 15px 20px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .accordion-header:hover {
            background: #ff7a2f;
        }

        .accordion-content {
            background: #fafafa;
            display: none;
            flex-direction: column;
            padding: 20px;
        }

        .accordion-content button {
            background: #eee;
            border: none;
            padding: 12px;
            border-radius: 10px;
            margin: 8px 0;
            text-align: left;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .accordion-content button:hover {
            background: #ddd;
            transform: translateX(5px);
        }
    </style>
</head>

<body>
    <section class="card">
        <h1>📌 Menú de Opciones</h1>

        <!-- Experiencia Laboral -->
        <div class="accordion">
            <div class="accordion-header">💼 Experiencia Laboral</div>
            <div class="accordion-content">
                <a href="{{ route('primeraexp') }}"><button>Primera experiencia</button></a>
                <a href="{{ route('segundaexp') }}"><button>Segunda experiencia</button></a>
                <a href="{{ route('terceraexp') }}"><button>Tercera experiencia</button></a>
            </div>
        </div>

        <!-- Habilidades -->
        <div class="accordion">
            <div class="accordion-header">🛠️ Habilidades</div>
            <div class="accordion-content">
                <button onclick="location.href='habilidad1.html'">Primera habilidad</button>
                <button onclick="location.href='habilidad2.html'">Segunda habilidad</button>
                <button onclick="location.href='habilidad3.html'">Tercera habilidad</button>
            </div>
        </div>

        <!-- Academia -->
        <div class="accordion">
            <div class="accordion-header">🎓 Academia</div>
            <div class="accordion-content">
                <button onclick="location.href='colegio.html'">Colegio</button>
                <button onclick="location.href='universidad.html'">Universidad</button>
            </div>
        </div>
    </section>

    <script>
        // Lógica del acordeón
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                content.style.display = (content.style.display === "flex") ? "none" : "flex";
            });
        });
    </script>
</body>

</html>
