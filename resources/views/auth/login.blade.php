<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="d-flex justify-content-center align-items-center min-vh-100 px-3">
    <div class="card shadow-sm border-0 w-100" style="max-width: 400px;">
      <div class="card-body p-4">
        <h4 class="card-title text-center mb-4">Login</h4>

        {{-- Pesan error validasi / gagal login --}}
        @if ($errors->any())
          <div class="alert alert-danger py-2 small">
            <ul class="mb-0 ps-3">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              value="{{ old('email') }}"
              class="form-control @error('email') is-invalid @enderror"
              placeholder="nama@email.com"
              required
              autofocus
            >
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              class="form-control @error('password') is-invalid @enderror"
              placeholder="Masukkan password"
              required
            >
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label small" for="remember">Ingat saya</label>
          </div>

          <button type="submit" class="btn btn-primary w-100">Masuk</button>
        </form>

        @if (Route::has('register'))
          <div class="text-center mt-3 small">
            Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
          </div>
        @endif
      </div>
    </div>
  </div>
</body>
</html>
