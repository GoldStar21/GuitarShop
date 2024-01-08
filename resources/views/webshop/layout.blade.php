<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel GuitarShop application - DEMO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">GuitarShop - WAREHOUSE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">XXXXXXXXX</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">XXXXXXXXX</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">XXXXXXXXX</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">XXXXXXXXX</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

    
<div class="container-fluid">
    <br>
    @yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>