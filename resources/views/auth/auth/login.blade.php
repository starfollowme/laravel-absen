<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Aplikasi Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h3>Login Super Admin</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="NIP" class="form-label">NIP</label>
                            <input id="NIP" type="text" class="form-control @error('NIP') is-invalid @enderror" name="NIP" value="{{ old('NIP') }}" required autofocus>
                            @error('NIP')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input id="Password" type="password" class="form-control" name="Password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
