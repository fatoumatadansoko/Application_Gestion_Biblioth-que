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
            background-color: #188774; /* Fond blanc */
            padding: 15px 10px;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #000000; /* Texte noir */
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .navbar-custom .nav-link:hover {
            color: #999999; /* Couleur gris foncé au survol */
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
        /* CSS pour la section */
        .section-container {
            display: flex;
            align-items: center;
        }
        .image-section {
            flex: 1;
            padding: 60px;
        }
        .text-section {
            flex: 1;
            padding: 20px;
        }
        .text-section p {
            font-size: 18px;
        }
        /* CSS pour la galerie d'images */
        .gallery-img {
            width: 100%;
            height: 200px; /* Ajustez la hauteur selon vos besoins */
            object-fit: cover; /* Cette propriété permet de garder les proportions de l'image et de remplir l'espace disponible */
            margin-bottom: 15px; /* Espace entre les images */
        }
    </style>
</head>
<body>
     <!-- Barre de navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/logo.webp')}}"  alt="Logo"> <!-- Assurez-vous de remplacer "logo.png" par le chemin de votre logo -->
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
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 section-container">
                <div class="image-section">
                    <img src="{{asset('img/couverture5.webp')}}" class="img-fluid" alt="...">
                </div>
            </div>
            <div class="col-md-6 section-container">
                <div class="text-section">
                    <h2>Description de l'application</h2>
                    <p>Ceci est une brève description de l'application pour le bibliothécaire. Vous pouvez ajouter ici toutes les fonctionnalités principales de l'application, ses avantages, et tout ce qui peut intéresser les utilisateurs.</p>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
              <div class="col"><img src="{{asset('img/couverture1.jpg')}}" alt="Image 1" class="gallery-img"></div>
              <div class="col"><img src="{{asset('img/couverture2.jpg')}}" alt="Image 2" class="gallery-img"></div>
              <div class="col"><img src="{{asset('img/couverture3.jpg')}}" alt="Image 3" class="gallery-img"></div>
              <div class="col"><img src="{{asset('img/couverture1.jpg')}}" alt="Image 4" class="gallery-img"></div>
            </div>
            <div class="row">
              <div class="col-8"><img src="{{asset('img/couverture2.jpg')}}" alt="Image 5" class="gallery-img"></div>
              <div class="col-4"><img src="{{asset('img/couverture2.jpg')}}" alt="Image 6" class="gallery-img"></div>
            </div>
        </div>
    </div>
    <!-- Inclusion de Bootstrap JS pour les fonctionnalités -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
