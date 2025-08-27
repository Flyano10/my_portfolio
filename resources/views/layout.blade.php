<!DOCTYPE html>
<html>

<head>
    <title>Admin Portofolio - Rafly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Portofolio</a>
            <div class="ms-auto">
                <a href="{{ route('projects.index') }}" class="btn btn-light">Admin Proyek</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>

</html>
