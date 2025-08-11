<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Aplikasi Absensi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            overflow: hidden;
            animation: fadeIn 0.8s ease-in-out;
        }

        .login-card .card-header {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            text-align: center;
            padding: 1.5rem;
        }

        .login-card .form-control {
            border-radius: 10px;
            padding: 10px 15px;
        }

        .login-card button {
            border-radius: 10px;
            padding: 10px;
            transition: 0.3s ease;
        }

        .login-card button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card login-card shadow-lg">
                <div class="card-header">
                    <h3 class="mb-0">🔐 Login Super Admin</h3>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="NIP" class="form-label fw-semibold">NIP</label>
                            <input id="NIP" type="text" class="form-control @error('NIP') is-invalid @enderror" name="NIP" value="{{ old('NIP') }}" required autofocus placeholder="Masukkan NIP Anda">
                            @error('NIP')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Password" class="form-label fw-semibold">Password</label>
                            <input id="Password" type="password" class="form-control" name="Password" required placeholder="Masukkan Password">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-semibold">
                                Login
                            </button>
                        </div>

                        <div class="text-center mt-3">
                            <small class="text-muted">© {{ date('Y') }} Sistem Absensi Sekolah</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
