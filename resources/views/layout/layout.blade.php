<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    {{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
  <div class="container-fluid d-flex justify-content-between align-items-center px-5">

    <!-- Kiri -->
    <ul class="navbar-nav d-flex flex-row mb-0">
      <li class="nav-item me-3">
        <a class="nav-link active text-white fw-semibold nav-hover" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white fw-semibold nav-hover" href="/about">About</a>
      </li>
    </ul>

    <!-- Tengah -->
    <div class="text-center d-none d-md-block">
      <span class="text-white fw-semibold nama-tengah">
        2301040038 - MUHAMMAD ABIN (GENAP)
      </span>
    </div>

    <!-- Kanan -->
    <div class="text-end d-none d-md-block">
      <span class="text-white fw-semibold nama-kanan">
        2301040021 - GANPRA NURHADI LOSA (GANJIL)
      </span>
    </div>

  </div>
</nav>

<style>
  /* === NAVBAR CUSTOM STYLE === */
  .custom-navbar {
    background-color: rgba(0, 0, 0, 0.45);
    backdrop-filter: blur(8px);
    padding-top: 0.1rem;
    padding-bottom: 0.8rem;
  }

  body {
    background: url('{{ asset('image/bckground.webp') }}') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
  }

  /* navbar fixed top butuh background solid */
  .custom-navbar {
    background: rgba(0, 0, 0, 0.55) !important;
    backdrop-filter: blur(10px);
  }

  /* Teks tengah */
  .nama-tengah {
    letter-spacing: 0.5px;
    font-size: 0.9rem;
  }

  /* Teks kanan */
  .nama-kanan {
    letter-spacing: 0.5px;
    font-size: 0.9rem;
  }

  /* Efek hover pada menu kiri */
  .nav-hover:hover {
    color: #00ff99 !important;
    text-shadow: 0 0 8px rgba(0, 255, 153, 0.8);
    transition: 0.3s;
  }

  /* Responsif untuk layar kecil */
  @media (max-width: 991px) {
    .nama-tengah,
    .nama-kanan {
      display: none;
    }
  }
</style>

    {{-- Navbar --}}
    @yield('content')
</body>
</html>