<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Aplikasi SNA Medika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="manifest" href="{{ asset('build/manifest.webmanifest') }}" crossorigin="use-credentials">
    <meta name="theme-color" content="#0d6efd">
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/build/sw.js')
                    .then(reg => console.log('SW OK', reg))
                    .catch(console.error)
            })
        }
    </script>
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        /* Bagian Hero dengan Gradasi Biru */
        .hero {
            background: linear-gradient(135deg, #0d47a1 30%, #80deea 100%);
            color: white;
            padding: 20px 0;
            border-radius: 0 0 30px 30px;
            margin-bottom: 40px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Logo diletakkan di atas tanpa kontainer */
        .logo-wrapper {
            margin-bottom: 15px;
        }

        .logo-img {
            max-height: 90px;
            /* Ukuran logo */
            width: auto;
            display: block;
            margin: 0 auto;
        }

        .card-link {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
            height: 100%;
            display: block;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
        }

        .card-link:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2.5rem;
        }

        .bg-kaizen {
            background-color: #e3f2fd;
            color: #1976d2;
        }

        .bg-eva {
            background-color: #e8f5e9;
            color: #388e3c;
        }

        .btn-go {
            border-radius: 50px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>

    <div class="hero text-center">
        <div class="container">
            <div class="logo-wrapper">
                <img src="{{ asset('logo.png') }}" alt="SNA Medika Logo" class="logo-img">
            </div>

            <h1 class="display-5 fw-bold">SNAM PORTAL SYSTEM</h1>
            <p class="lead mt-2 opacity-75">Pilih aplikasi untuk mulai bekerja</p>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center g-4">

            <div class="col-md-5 col-lg-4">
                <a href="/kaizen" class="card-link p-4 text-center">
                    <div class="icon-circle bg-kaizen">💡</div>
                    <h3 class="fw-bold text-dark">Aplikasi KAIZEN</h3>
                    <p class="text-muted">Input ide perbaikan & efisiensi berkelanjutan.</p>
                    <div class="btn btn-primary btn-go w-100 mt-3">MASUK KAIZEN</div>
                </a>
            </div>

            <div class="col-md-5 col-lg-4">
                <a href="/eva" class="card-link p-4 text-center">
                    <div class="icon-circle bg-eva">📈</div>
                    <h3 class="fw-bold text-dark">Aplikasi EVA</h3>
                    <p class="text-muted">Penilaian Leadership & Culture karyawan.</p>
                    <div class="btn btn-success btn-go w-100 mt-3">MASUK EVA</div>
                </a>
            </div>

            <div class="col-md-5 col-lg-4">
                <a href="http://snam.ddns.net:8080/helpdesk" class="card-link p-4 text-center">
                    <div class="icon-circle bg-eva">🛠️</div>
                    <h3 class="fw-bold text-dark">Aplikasi Ticketing</h3>
                    <p class="text-muted">Layanan IT, GA, dan Mekanik</p>
                    <div class="btn btn-secondary btn-go w-100 mt-3 text-white">MASUK TICKETING</div>
                </a>
            </div>

        </div>

        <div class="text-center mt-5 py-4 border-top">
            <p class="mb-0 text-secondary fw-semibold">PT. SNA Medika - IT Department 2026</p>
        </div>
    </div>

</body>

</html>