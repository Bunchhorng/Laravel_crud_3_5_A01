<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS System - Register</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-white min-vh-100 d-flex align-items-center justify-content-center">

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-9">
      
      <!-- Main Outer Container -->
      <div class="border border-light-subtle rounded-4 shadow-sm overflow-hidden bg-white">
        <div class="row g-0">
          
          <!-- LEFT SIDEBAR: Matches Dashboard Brand Sidebar -->
          <div class="col-md-5 bg-light p-4 p-lg-5 d-flex flex-column justify-content-between border-end border-light-subtle">
            <div>
              <!-- POS SYSTEM Branding Header -->
              <div class="d-flex align-items-center gap-3 mb-4">
                <i class="bi bi-display text-dark display-5"></i>
                <h3 class="fw-black text-dark text-uppercase lh-sm mb-0">
                  POS<br>SYSTEM
                </h3>
              </div>

              <hr class="text-secondary opacity-25 my-4">

              <p class="text-secondary small mb-4">
                Create a new staff account to grant dashboard permissions and manage terminal records.
              </p>

              <!-- Sidebar Features List matching Dashboard Icons -->
              <div class="d-flex flex-column gap-3 text-secondary small">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-speedometer2 text-primary fs-5"></i>
                  <span class="text-dark">Dashboard Access</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-grid-3x3-gap text-primary fs-5"></i>
                  <span class="text-dark">Manage Categories & Products</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-people text-primary fs-5"></i>
                  <span class="text-dark">User System Role Authorization</span>
                </div>
              </div>
            </div>

            <div class="pt-4 border-top border-secondary border-opacity-10 mt-5">
              <span class="text-secondary small">POS Terminal &bull; Active Version 1.0</span>
            </div>
          </div>

          <!-- RIGHT PANEL: Registration Form -->
          <div class="col-md-7 p-4 p-lg-5 d-flex flex-column justify-content-center">
            
            <!-- Page Title matching 'category list' font style -->
            <div class="d-flex align-items-center justify-content-between mb-4">
              <h1 class="fw-black text-dark text-lowercase mb-0 fs-2">register user</h1>
              <a href="#" class="btn btn-primary rounded-3 px-3 fw-bold btn-sm">
                +Help
              </a>
            </div>

            <form action="{{route('register')}}" method="POST">
              @csrf
              <!-- Full Name Input -->
              <div class="mb-3">
                <label for="name" class="form-label text-dark fw-bold text-uppercase small">Full Name</label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0 text-secondary"><i class="bi bi-person"></i></span>
                  <input type="text" class="form-control bg-light border-start-0 py-2" id="name" name="name" placeholder="Superman" required>
                </div>
              </div>

              <!-- Email Input -->
              <div class="mb-3">
                <label for="email" class="form-label text-dark fw-bold text-uppercase small">Email Address</label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0 text-secondary"><i class="bi bi-envelope"></i></span>
                  <input type="email" class="form-control bg-light border-start-0 py-2" id="email" name="email" placeholder="superman@pos.com" required>
                </div>
              </div>

              <!-- Password Input -->
              <div class="mb-3">
                <label for="password" class="form-label text-dark fw-bold text-uppercase small">Password</label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0 text-secondary"><i class="bi bi-lock"></i></span>
                  <input type="password" class="form-control bg-light border-start-0 py-2" id="password" name="password" placeholder="••••••••" required>
                </div>
              </div>

              <!-- Submit Button matching '+Add New Category' Blue Accent -->
              <button type="submit" class="btn btn-primary w-100 py-2 fs-6 rounded-3 fw-bold mb-3">
                Create User Account
              </button>

              <div class="text-center">
                <span class="text-secondary small">Already registered?</span>
                <a href="{{route('auth.loginForm')}}" class="text-primary fw-bold text-decoration-none small ms-1">Login here</a>
              </div>

            </form>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>