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

    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Persistent Header */
        .portal-header {
            background: linear-gradient(135deg, #0d47a1 30%, #0d6efd 100%);
            color: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            height: 60px;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-logo {
            max-height: 40px;
            width: auto;
        }

        .header-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: 0.5px;
        }

        .header-actions {
            display: flex;
            gap: 8px;
        }

        .btn-header {
            font-size: 0.85rem;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.2s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-header:hover {
            background: rgba(255, 255, 255, 0.25);
            color: white;
        }

        .btn-exit {
            background: #dc3545;
            border-color: #dc3545;
        }

        .btn-exit:hover {
            background: #bb2d3b;
            border-color: #b02a37;
        }

        /* Main Content wrapper */
        .content-area {
            flex: 1;
            position: relative;
            overflow-y: auto;
        }

        /* Bagian Hero dengan Gradasi Biru */
        .hero {
            background: linear-gradient(135deg, #0d47a1 30%, #80deea 100%);
            color: white;
            padding: 30px 0;
            border-radius: 0 0 30px 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Logo diletakkan di atas tanpa kontainer */
        .logo-wrapper {
            margin-bottom: 15px;
        }

        .logo-img {
            max-height: 80px;
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
            cursor: pointer;
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

    @php
    $apps = [
        [
            'name' => 'Aplikasi KAIZEN',
            'url' => 'https://www.snam110.dpdns.org/kaizen/',
            'icon' => '💡',
            'desc' => 'Input ide perbaikan & efisiensi berkelanjutan.',
            'btn_text' => 'MASUK KAIZEN',
            'btn_class' => 'btn-primary',
            'bg_class' => 'bg-kaizen'
        ],
        [
            'name' => 'Aplikasi EVA',
            'url' => 'https://www.snam110.dpdns.org/eva/login',
            'icon' => '📈',
            'desc' => 'Penilaian Leadership & Culture karyawan.',
            'btn_text' => 'MASUK EVA',
            'btn_class' => 'btn-success',
            'bg_class' => 'bg-eva'
        ],
        [
            'name' => 'Aplikasi Ticketing',
            'url' => 'https://www.snam110.dpdns.org/helpdesk/',
            'icon' => '🛠️',
            'desc' => 'Layanan IT, GA, dan Mekanik',
            'btn_text' => 'MASUK TICKETING',
            'btn_class' => 'btn-secondary text-white',
            'bg_class' => 'bg-eva'
        ]
    ];
    @endphp

    <!-- Persistent Header -->
    <header class="portal-header">
        <div class="header-left">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="header-logo">
            <h1 class="header-title">SNAM PORTAL</h1>
        </div>
        <div class="header-actions">
            <button class="btn-header btn-exit" onclick="exitApplication()">Exit</button>
        </div>
    </header>

    <!-- Overlay Offline -->
    <div id="offline-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #ffffff; z-index: 9999; justify-content: center; align-items: center; flex-direction: column; text-align: center; padding: 20px;">
        <div class="icon-circle bg-kaizen" style="font-size: 4rem; width: 120px; height: 120px; margin-bottom: 25px;">📶</div>
        <h2 class="fw-bold text-dark">Koneksi Internet Terputus</h2>
        <p class="text-muted px-3" style="max-width: 400px;">Aplikasi memerlukan koneksi internet aktif. Hubungkan perangkat ke Wi-Fi atau data seluler lalu coba lagi.</p>
        <button onclick="checkConnection()" class="btn btn-primary btn-go px-5 py-2 mt-3">PERIKSA KONEKSI</button>
    </div>

    <!-- Main Content Area -->
    <main class="content-area">
        <!-- Portal Menu Grid -->
        <div id="portal-menu-grid">
            <div class="hero text-center">
                <div class="container">
                    <div class="logo-wrapper">
                        <img src="{{ asset('logo.png') }}" alt="SNA Medika Logo" class="logo-img">
                    </div>
                    <h1 class="display-6 fw-bold">SNAM PORTAL SYSTEM</h1>
                    <p class="lead mt-2 opacity-75">Pilih aplikasi untuk mulai bekerja</p>
                </div>
            </div>

            <div class="container pb-5">
                <div class="row justify-content-center g-4">
                    @foreach($apps as $app)
                    <div class="col-md-5 col-lg-4">
                        <div onclick="openApp('{{ $app['url'] }}')" class="card-link p-4 text-center">
                            <div class="icon-circle {{ $app['bg_class'] }}">{{ $app['icon'] }}</div>
                            <h3 class="fw-bold text-dark">{{ $app['name'] }}</h3>
                            <p class="text-muted">{{ $app['desc'] }}</p>
                            <div class="btn {{ $app['btn_class'] }} btn-go w-100 mt-3">{{ $app['btn_text'] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="text-center mt-5 py-4 border-top">
                    <p class="mb-0 text-secondary fw-semibold">PT. SNA Medika - IT Department 2026</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        const menuGrid = document.getElementById('portal-menu-grid');

        function setOfflineUI(isOffline) {
            const overlay = document.getElementById('offline-overlay');
            if (overlay) {
                overlay.style.display = isOffline ? 'flex' : 'none';
            }
        }

        async function checkConnection() {
            if (window.Capacitor && window.Capacitor.Plugins && window.Capacitor.Plugins.Network) {
                try {
                    const status = await window.Capacitor.Plugins.Network.getStatus();
                    setOfflineUI(!status.connected);
                } catch (e) {
                    setOfflineUI(!navigator.onLine);
                }
            } else {
                setOfflineUI(!navigator.onLine);
            }
        }

        // Fungsi membuka aplikasi eksternal menggunakan InAppBrowser
        function openApp(url) {
            if (window.cordova && window.cordova.InAppBrowser) {
                // Buka InAppBrowser dengan menyembunyikan address bar default (location=no)
                const ref = window.cordova.InAppBrowser.open(url, '_blank', 'location=no,zoom=no,hardwareback=yes,clearcache=yes,clearsessioncache=yes');

                // Deteksi ketika user me-redirect balik ke portal, meminta exit, atau mendownload PDF
                ref.addEventListener('loadstart', function(event) {
                    const urlLower = event.url.toLowerCase();
                    
                    if (event.url.includes('portal.eclairs.my.id/exit-app')) {
                        ref.close();
                        exitApplication();
                    } else if (event.url.includes('portal.eclairs.my.id')) {
                        ref.close();
                    } else if (
                        urlLower.endsWith('.pdf') || 
                        urlLower.includes('.pdf?') || 
                        urlLower.includes('download') || 
                        urlLower.includes('export') ||
                        urlLower.includes('print')
                    ) {
                        // Jika mendeteksi link PDF / download, buka di browser sistem HP agar proses download/view berjalan
                        window.cordova.InAppBrowser.open(event.url, '_system');
                    }
                });

                // Ketika halaman sukses dimuat, suntikkan header SNAM PORTAL kustom ke halaman sub-aplikasi
                ref.addEventListener('loadstop', function() {
                    // Suntikkan CSS Header (tanpa mentransformasi body agar modal tidak rusak)
                    ref.insertCSS({
                        code: `
                            body {
                                padding-top: 60px !important;
                            }
                            #snam-inapp-header {
                                position: fixed !important;
                                top: 0 !important;
                                left: 0 !important;
                                width: 100% !important;
                                height: 60px !important;
                                background: linear-gradient(135deg, #0d47a1 30%, #0d6efd 100%) !important;
                                color: white !important;
                                display: flex !important;
                                align-items: center !important;
                                justify-content: space-between !important;
                                padding: 0 15px !important;
                                z-index: 2147483647 !important;
                                box-shadow: 0 2px 10px rgba(0,0,0,0.3) !important;
                                box-sizing: border-box !important;
                                font-family: 'Segoe UI', Tahoma, sans-serif !important;
                            }
                            .snam-logo-container {
                                display: flex !important;
                                align-items: center !important;
                                gap: 10px !important;
                            }
                            .snam-logo {
                                max-height: 35px !important;
                                width: auto !important;
                            }
                            .snam-title {
                                font-size: 1.1rem !important;
                                font-weight: bold !important;
                                letter-spacing: 0.5px !important;
                            }
                            .snam-actions {
                                display: flex !important;
                                gap: 8px !important;
                            }
                            .btn-snam-action {
                                font-size: 0.8rem !important;
                                font-weight: 600 !important;
                                padding: 6px 12px !important;
                                border-radius: 20px !important;
                                border: 1px solid rgba(255,255,255,0.4) !important;
                                background: rgba(255,255,255,0.15) !important;
                                color: white !important;
                                text-transform: uppercase !important;
                                cursor: pointer !important;
                            }
                            .btn-snam-exit {
                                background: #dc3545 !important;
                                border-color: #dc3545 !important;
                            }
                        `
                    });

                    // Suntikkan Element HTML Header ke document.documentElement (html)
                    ref.executeScript({
                        code: `
                            // 1. Pasang header portal jika belum ada
                            if (!document.getElementById('snam-inapp-header')) {
                                var header = document.createElement('div');
                                header.id = 'snam-inapp-header';
                                header.innerHTML = \`
                                    <div class="snam-logo-container">
                                        <img src="https://portal.eclairs.my.id/logo.png" class="snam-logo" />
                                        <span class="snam-title">SNAM PORTAL</span>
                                    </div>
                                    <div class="snam-actions">
                                        <button class="btn-snam-action" onclick="window.location.href='https://portal.eclairs.my.id'">Menu Portal</button>
                                        <button class="btn-snam-action btn-snam-exit" onclick="window.location.href='https://portal.eclairs.my.id/exit-app'">Exit</button>
                                    </div>
                                \`;
                                document.documentElement.appendChild(header);
                            }

                            // 2. Geser elemen navigasi/header dan sidebar bawaan web tujuan agar tidak tertutup header portal
                            var headers = document.querySelectorAll('nav, header, .navbar, .main-header, aside, .main-sidebar, .sidebar, .app-sidebar, .aside');
                            headers.forEach(function(el) {
                                var style = window.getComputedStyle(el);
                                if ((style.position === 'fixed' || style.position === 'absolute') && style.top === '0px') {
                                    el.style.setProperty('top', '60px', 'important');
                                }
                            });
                        `
                    });
                });
            } else {
                // Fallback jika dibuka di browser komputer biasa
                window.open(url, '_blank');
            }
        }

        // Fungsi keluar aplikasi
        function exitApplication() {
            if (window.Capacitor && window.Capacitor.Plugins && window.Capacitor.Plugins.App) {
                window.Capacitor.Plugins.App.exitApp();
            } else {
                alert('Fungsi exit hanya bekerja di dalam aplikasi mobile.');
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            checkConnection();

            if (window.Capacitor && window.Capacitor.Plugins && window.Capacitor.Plugins.Network) {
                window.Capacitor.Plugins.Network.addListener('networkStatusChange', (status) => {
                    setOfflineUI(!status.connected);
                });
            } else {
                window.addEventListener('online', () => setOfflineUI(false));
                window.addEventListener('offline', () => setOfflineUI(true));
            }

            // Tangani back button fisik di menu utama portal (keluar apk)
            if (window.Capacitor && window.Capacitor.Plugins && window.Capacitor.Plugins.App) {
                window.Capacitor.Plugins.App.addListener('backButton', () => {
                    window.Capacitor.Plugins.App.exitApp();
                });
            }
        });
    </script>
    </script>

</body>

</html>