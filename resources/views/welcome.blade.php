<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS System - Welcome</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-white min-vh-100 d-flex flex-column justify-content-between">

  <!-- TOP NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom border-light-subtle py-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2 fw-black text-dark text-uppercase lh-sm" href="#">
        <i class="bi bi-display text-primary fs-3"></i>
        <span>POS System</span>
      </a>
      
      <div class="d-flex align-items-center gap-2">
        @if (Route::has('auth.login'))
          @auth
            <a href="{{ route('dashboard') }}" class="btn btn-primary rounded-3 px-4 fw-bold btn-sm">
              Dashboard
            </a>
          @else
            <a href="{{ route('auth.login') }}" class="btn btn-outline-secondary rounded-3 px-3 fw-bold btn-sm">
              Login
            </a>
            @if (Route::has('auth.register'))
              <a href="{{ route('auth.register') }}" class="btn btn-primary rounded-3 px-3 fw-bold btn-sm">
                Register
              </a>
            @endif
          @endauth
        @endif
      </div>
    </div>
  </nav>

  <!-- MAIN HERO SECTION -->
  <main class="container my-auto py-5">
    <div class="row align-items-center g-5">
      
      <!-- Left Hero Text -->
      <div class="col-lg-6">
        <span class="badge bg-primary-subtle text-primary fw-bold text-uppercase px-3 py-2 rounded-pill mb-3">
          POS Terminal &bull; v1.0
        </span>
        <h1 class="display-4 fw-bold text-dark lh-sm mb-3">
          Streamline Your Store Operations Effortlessly
        </h1>
        <p class="lead text-secondary mb-4">
          Manage product categories, track real-time terminal inventory, and empower your staff with streamlined system role permissions.
        </p>

        <div class="d-flex flex-sm-row flex-column gap-3">
          <a href="{{ route('auth.login') }}" class="btn btn-primary rounded-3 px-4 py-2 fs-6 fw-bold">
            Get Started
          </a>
          <a href="{{ route('auth.register') }}" class="btn btn-light border border-light-subtle rounded-3 px-4 py-2 fs-6 fw-bold text-dark">
            Create Staff Account
          </a>
        </div>
      </div>

      <!-- Right Card Preview (Matching Brand Sidebar Design) -->
      <div class="col-lg-6">
        <div class="border border-light-subtle rounded-4 p-4 p-lg-5 shadow-sm bg-light">
          <div class="d-flex align-items-center gap-3 mb-4">
            <i class="bi bi-speedometer2 text-primary display-6"></i>
            <div>
              <h5 class="fw-bold text-dark mb-0">System Features</h5>
              <small class="text-secondary">All-in-one POS Management Solution</small>
            </div>
          </div>

          <hr class="text-secondary opacity-25 my-4">

          <div class="d-flex flex-column gap-3 text-secondary">
            <div class="d-flex align-items-start gap-3">
              <div class="bg-white p-2 rounded-3 border border-light-subtle shadow-sm">
                <i class="bi bi-grid-3x3-gap text-primary fs-5"></i>
              </div>
              <div>
                <strong class="text-dark d-block">Inventory & Products</strong>
                <span class="small">Organize categories, prices, and stock counts effortlessly.</span>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="bg-white p-2 rounded-3 border border-light-subtle shadow-sm">
                <i class="bi bi-people text-primary fs-5"></i>
              </div>
              <div>
                <strong class="text-dark d-block">Role Authorization</strong>
                <span class="small">Secure access controls tailored for administrators and staff.</span>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="bg-white p-2 rounded-3 border border-light-subtle shadow-sm">
                <i class="bi bi-receipt text-primary fs-5"></i>
              </div>
              <div>
                <strong class="text-dark d-block">Terminal Sales</strong>
                <span class="small">Fast and responsive interface designed for quick checkout speeds.</span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </main>

  <!-- FOOTER -->
  <footer class="border-top border-light-subtle py-3 text-center text-secondary small bg-light">
    <div class="container">
      <span>POS Terminal &bull; Active Version 1.0 &copy; {{ date('Y') }}</span>
    </div>
  </footer>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>