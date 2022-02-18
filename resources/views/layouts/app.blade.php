<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <title>Laravel Cars</title>
=======
    <title>Document</title>
>>>>>>> 694aabcee30c6168bdae4c24e6a4d1a2e2a70a8f
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Lista Auto</a>
                    <a class="nav-link" aria-current="page" href="#">Crea Nuove Auto</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <main>
        @yield('main_content')
    </main>

</body>
</html>
