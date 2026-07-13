<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CMS - SNAM Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1e293b;
        }

        .navbar-admin {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .navbar-brand img {
            max-height: 35px;
            width: auto;
        }

        .card-custom {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
            background: #ffffff;
            transition: all 0.3s ease;
        }

        .card-custom:hover {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
        }

        .btn-gradient {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: white;
            border: none;
            font-weight: 600;
            border-radius: 10px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #0a58ca 0%, #084298 100%);
            color: white;
            transform: translateY(-2px);
        }

        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
        }

        .table thead {
            background-color: #f1f5f9;
        }

        .table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 1px;
            color: #64748b;
            padding: 16px;
        }

        .table td {
            padding: 16px;
            vertical-align: middle;
        }

        .app-icon-preview {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        /* Specific app colors fallback classes */
        .bg-kaizen {
            background-color: #e3f2fd;
            color: #1976d2;
        }

        .bg-eva {
            background-color: #e8f5e9;
            color: #388e3c;
        }

        .modal-content {
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            background: #f8fafc;
            border-bottom: 1px solid #f1f5f9;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            padding: 20px 24px;
        }

        .modal-body {
            padding: 24px;
        }

        .form-label {
            font-weight: 550;
            font-size: 0.875rem;
            color: #475569;
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #cbd5e1;
            padding: 10px 14px;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }

        .alert-dismissible {
            border-radius: 12px;
            border: none;
        }

        .btn-action {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            transition: all 0.2s ease;
        }

        .btn-action:hover {
            transform: scale(1.08);
        }
    </style>
</head>

<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-admin py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <img src="{{ asset('logo1.png') }}" alt="Logo" class="d-inline-block align-text-top">
                <span class="fw-bold tracking-wider">SNAM PORTAL ADMIN</span>
            </a>
            <div class="ms-auto d-flex align-items-center gap-3">
                <a href="{{ url('/') }}" class="btn btn-outline-light btn-sm rounded-pill px-3">Lihat Portal</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm d-flex align-items-center gap-2" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                <div>{{ session('success') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <h6 class="fw-bold mb-2">Terjadi kesalahan input:</h6>
                <ul class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Card Container -->
        <div class="card card-custom p-4">
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
                <div>
                    <h3 class="fw-bold m-0">Daftar Aplikasi Portal</h3>
                    <p class="text-muted m-0 mt-1" style="font-size: 0.9rem;">Kelola aplikasi yang tampil pada halaman beranda SNAM Portal.</p>
                </div>
                <button class="btn btn-gradient d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalAddApp">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg>
                    Tambah Aplikasi
                </button>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle table-hover m-0">
                    <thead>
                        <tr>
                            <th style="width: 80px;" class="text-center">Urutan</th>
                            <th style="width: 80px;" class="text-center">Ikon</th>
                            <th>Nama Aplikasi</th>
                            <th>Deskripsi / URL</th>
                            <th>Style Kelas</th>
                            <th>Teks Tombol</th>
                            <th style="width: 120px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($apps as $app)
                            <tr>
                                <td class="text-center">
                                    <span class="badge bg-light text-dark border px-3 py-2 fw-bold" style="font-size: 0.85rem;">
                                        {{ $app->sort_order }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="app-icon-preview mx-auto {{ $app->bg_class }}">
                                        {!! $app->icon !!}
                                    </div>
                                </td>
                                <td>
                                    <div class="fw-bold text-dark">{{ $app->name }}</div>
                                </td>
                                <td>
                                    <div class="text-secondary small text-truncate" style="max-width: 250px;">{{ $app->desc }}</div>
                                    <a href="{{ $app->url }}" target="_blank" class="small text-decoration-none text-primary text-truncate d-block" style="max-width: 250px;">
                                        {{ $app->url }}
                                    </a>
                                </td>
                                <td>
                                    <div><span class="badge bg-secondary opacity-75">Bg: {{ $app->bg_class }}</span></div>
                                    <div class="mt-1"><span class="badge bg-dark opacity-75">Btn: {{ $app->btn_class }}</span></div>
                                </td>
                                <td>
                                    <span class="badge {{ $app->btn_class }} px-3 py-2" style="font-size: 0.8rem; color:black">
                                        {{ $app->btn_text }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- Edit Button -->
                                        <button class="btn btn-outline-primary btn-action" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalEditApp"
                                                onclick="editApp({{ json_encode($app) }})"
                                                title="Edit Aplikasi">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.03l-.179.178c-.07.07-.123.163-.153.266l-.6 2.2a.5.5 0 0 0 .577.577l2.2-.6a.5.5 0 0 0 .266-.153l.18-.178z"/>
                                            </svg>
                                        </button>

                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.destroy', $app->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus aplikasi ini?')" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-action" title="Hapus Aplikasi">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5 text-muted">
                                    <div class="fs-4 mb-2">📭</div>
                                    Belum ada aplikasi terdaftar. Silakan tambahkan aplikasi baru.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Add App -->
    <div class="modal fade" id="modalAddApp" tabindex="-1" aria-labelledby="modalAddAppLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="modalAddAppLabel">Tambah Aplikasi Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nama Aplikasi</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Contoh: Aplikasi EVA" required>
                            </div>
                            <div class="col-md-6">
                                <label for="url" class="form-label">URL Aplikasi</label>
                                <input type="url" class="form-control" id="url" name="url" placeholder="Contoh: https://www.snam110.dpdns.org/eva/login" required>
                            </div>
                            <div class="col-12">
                                <label for="icon" class="form-label">Ikon Aplikasi (Emoji atau Kode HTML/SVG)</label>
                                <textarea class="form-control" id="icon" name="icon" rows="2" placeholder="Contoh: 📈 ATAU <svg>...</svg>" required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="desc" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="desc" name="desc" rows="2" placeholder="Tulis deskripsi singkat aplikasi..."></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="btn_text" class="form-label">Teks Tombol</label>
                                <input type="text" class="form-control" id="btn_text" name="btn_text" placeholder="Contoh: MASUK EVA" required>
                            </div>
                            <div class="col-md-6">
                                <label for="btn_class" class="form-label">Kelas CSS Tombol (Bootstrap)</label>
                                <input type="text" class="form-control" id="btn_class" name="btn_class" placeholder="Contoh: btn-success ATAU btn-primary" required>
                            </div>
                            <div class="col-md-6">
                                <label for="bg_class" class="form-label">Kelas CSS Background Ikon</label>
                                <input type="text" class="form-control" id="bg_class" name="bg_class" placeholder="Contoh: bg-kaizen ATAU bg-eva" required>
                            </div>
                            <div class="col-md-6">
                                <label for="sort_order" class="form-label">Urutan Tampil (Sort Order)</label>
                                <input type="number" class="form-control" id="sort_order" name="sort_order" value="1" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 bg-light p-3 rounded-bottom-4">
                        <button type="button" class="btn btn-secondary rounded-3 px-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary rounded-3 px-4 btn-gradient">Simpan Aplikasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit App -->
    <div class="modal fade" id="modalEditApp" tabindex="-1" aria-labelledby="modalEditAppLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="modalEditAppLabel">Edit Aplikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formEditApp" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="edit_name" class="form-label">Nama Aplikasi</label>
                                <input type="text" class="form-control" id="edit_name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_url" class="form-label">URL Aplikasi</label>
                                <input type="url" class="form-control" id="edit_url" name="url" required>
                            </div>
                            <div class="col-12">
                                <label for="edit_icon" class="form-label">Ikon Aplikasi (Emoji atau Kode HTML/SVG)</label>
                                <textarea class="form-control" id="edit_icon" name="icon" rows="2" required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="edit_desc" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="edit_desc" name="desc" rows="2"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_btn_text" class="form-label">Teks Tombol</label>
                                <input type="text" class="form-control" id="edit_btn_text" name="btn_text" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_btn_class" class="form-label">Kelas CSS Tombol (Bootstrap)</label>
                                <input type="text" class="form-control" id="edit_btn_class" name="btn_class" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_bg_class" class="form-label">Kelas CSS Background Ikon</label>
                                <input type="text" class="form-control" id="edit_bg_class" name="bg_class" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_sort_order" class="form-label">Urutan Tampil (Sort Order)</label>
                                <input type="number" class="form-control" id="edit_sort_order" name="sort_order" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 bg-light p-3 rounded-bottom-4">
                        <button type="button" class="btn btn-secondary rounded-3 px-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary rounded-3 px-4 btn-gradient">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function editApp(app) {
            document.getElementById('formEditApp').action = "{{ url('/admin/apps') }}/" + app.id;
            document.getElementById('edit_name').value = app.name;
            document.getElementById('edit_url').value = app.url;
            document.getElementById('edit_icon').value = app.icon;
            document.getElementById('edit_desc').value = app.desc || '';
            document.getElementById('edit_btn_text').value = app.btn_text;
            document.getElementById('edit_btn_class').value = app.btn_class;
            document.getElementById('edit_bg_class').value = app.bg_class;
            document.getElementById('edit_sort_order').value = app.sort_order;
        }
    </script>
</body>

</html>
