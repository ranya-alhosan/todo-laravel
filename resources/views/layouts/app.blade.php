<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fun To-Do List</title>

    <!-- Fonts and Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Comic Neue', sans-serif;
            background-color: #FFF5E1;
        }
        .navbar {
            background-color: #FFD966;
        }
        .navbar-brand {
            font-weight: bold;
            color: #FF5733;
        }
        .navbar-nav .nav-link {
            color: #FF5733;
            font-weight: 500;
        }
        .navbar-nav .nav-link.active {
            font-weight: bold;
        }
        .container {
            padding: 2rem 1rem;
        }
        .card {
            border-radius: 15px;
            background-color: #FFF8E8;
            border: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-primary, .btn-danger, .btn-outline-success {
            border-radius: 50px;
        }
        .btn-outline-success {
            color: #28A745;
            background-color: #E8F5E9;
        }
        .btn-outline-success:hover {
            background-color: #28A745;
            color: white;
        }
        .fun-heading {
            text-align: center;
            font-size: 2.5rem;
            color: #FF5733;
            font-weight: bold;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">🎉 Fun To-Do!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">All Tasks 📝</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tasks/create">New Task ✨</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="fun-heading mb-4">Welcome to Your Fun To-Do List! 🎈</h1>
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MN1EoBBcN8c5p+K1C3chfMFJvvfCWxJx1K5yjWcSVB1ZTUPMz5Aw66BYMZ6AKRHH" crossorigin="anonymous"></script>
</body>
</html>
