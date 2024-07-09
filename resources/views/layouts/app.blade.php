<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Navbar started-->
    <nav class="navbar navbar-expand bg-black">
    <div class="container-fluid">
        <a href="#" class="navbar-brand text-light">Dharani Products</a>
    </div>
    </nav>
    <div class="container mt-5">
        <!--row-->
        <div class="row">
            @if ($message=Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>Success: </strong>{{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @yield('main')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>