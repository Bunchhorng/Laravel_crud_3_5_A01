<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'app')</title>

    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        .nav-link {
            transition: all 0.2s ease-in-out;
            border-radius: 0.375rem;
        }
        .nav-link:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary vh-100" style="width: 280px;" bis_skin_checked="1"> 
        <a href="/"
            class="d-flex gap-3 align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
             <i class="bi bi-display" style="font-size: 70px"></i>
            <span class="fs-4 fw-bold">POS <br> SYSTEM</span> 
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto gap-1">
            <li class="nav-item">
                <a href="{{ Route::has('dashboard') ? route('dashboard') : '#' }}" 
                class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('dashboard') ? 'active' : 'link-body-emphasis' }}">
                    <i class="bi bi-speedometer2 fs-5"></i> 
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category.index') }}" 
                class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('category.*') ? 'active' : 'link-body-emphasis' }}">
                    <i class="bi bi-table fs-5"></i>
                    Manage Categories
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route::has('product.index') ? route('product.index') : '#' }}" 
                class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('product.*') ? 'active' : 'link-body-emphasis' }}">
                    <i class="bi bi-columns-gap fs-5"></i>
                    Manage Products
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route::has('user.index') ? route('user.index') : '#' }}" 
                class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('user.*') ? 'active' : 'link-body-emphasis' }}">
                    <i class="bi bi-people fs-5"></i>
                    Manage Users
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown" bis_skin_checked="1"> <a href="#"
                class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false"> <img src="https://i.pinimg.com/736x/04/02/a1/0402a18e5d84322515612f1648200fc0.jpg" alt=""
                    width="32" height="32" class="rounded-circle me-2"> <strong>Superman</strong> </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>

    <main class="w-100 mx-3 my-3">
        @yield('content')
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
