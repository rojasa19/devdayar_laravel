<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - DevDayAr 2016</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
                <h1 class="text-center text-primary">Lista de tareas del DevDayAr 2016</h1>
            </nav>
        </div>

        <!-- Contenido de la web dinamico -->
        <div class="container">
            @yield('content')
        </div>

    </body>
</html>