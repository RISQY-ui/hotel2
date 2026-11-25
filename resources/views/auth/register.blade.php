<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="d-flex justify-content-center align-items-center min-vh-100 px-3">
    <div class="card shadow-sm border-0 w-100" style="max-width: 400px;">
      <div class="card-body p-4">
        <h4 class="card-title text-center mb-4">Daftar</h4>

        @if ($errors->any())
          <div class="alert alert-danger py-2 small">
            <ul class="mb-0 ps-3">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input id="name" name="name" value="{{ old('name') }}" class="form-control" required autofocus>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-primary w-100">Buat akun</button>
        </form>

        <div class="text-center mt-3 small">
          Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>