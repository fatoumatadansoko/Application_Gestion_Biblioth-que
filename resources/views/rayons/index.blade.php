<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Inclusion de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Inclusion de Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
    /* CSS pour l'en-tête */
        .navbar-custom {
            background: linear-gradient(45deg, #efc21e, #efc21e);
            padding: 15px 10px;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .navbar-custom .nav-link:hover {
            color: #d3d3d3;
        }
        .navbar-custom .navbar-toggler {
            border: none;
        }
        .navbar-custom .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"%3E%3Cpath stroke="rgba%28255, 255, 255, 0.7%29" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
        }
        .navbar-brand img {
            height: 40px; /* Ajustez la hauteur selon vos besoins */
            width: auto;
        }
    </style>
</head>
<body>
     <!-- Barre de navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/banner.jpg')}}"  alt="Logo"> <!-- Assurez-vous de remplacer "logo.png" par le chemin de votre logo -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login">
                            <i class="bi bi-person-circle"></i> Connexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card text-bg-dark">
        <img src="{{asset('img/livre.jpg')}}"  class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small>Last updated 3 mins ago</small></p>
        </div>
      </div>
</body>
</html>
