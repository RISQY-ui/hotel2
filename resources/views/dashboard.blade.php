<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
<nav
    class="navbar navbar-expand-sm navbar-light bg-light"
>
    <div class="container position-relative">
        <a class="navbar-brand" href="#">UntitledStay</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disbaled" href="#">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Promo</a>
                </li>
                <li>
                    <a class="nav-link disabled" href="#">Lokasi</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            @guest
                <a href="{{ route('auth.login') }}" class="btn btn-primary btn-sm">Login</a>
            @endguest
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
