<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Inclusion de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Inclusion de Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .moving-message {
            position: absolute;
            left: 0;
            top: 0;
            white-space: nowrap;
            animation: move 10s linear infinite;
        }

        @keyframes move {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        .navbar-custom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #188774; /* Couleur personnalisée pour la barre de navigation */
        }

        .username {
            margin: 0 auto;
            font-size: 1.25rem;
            font-weight: bold;
            color: #f98a28; /* Couleur personnalisée pour le nom de l'utilisateur */
        }

        .logout-button {
            background-color: rgb(232, 143, 143);
            color: rgb(107, 25, 25);
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: darkgray;
        }

        .sidebar {
            height: 100vh;
            background-color: #188774; /* Couleur personnalisée pour le fond de la barre latérale */
            padding-top: 1rem;
        }

        .sidebar .nav-link {
            color: white;
            font-size: 1.1rem;
        }

        .sidebar .nav-link:hover {
            background-color: #188774; /* Couleur de survol */
        }

        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }
        .circle {
    width: 120px;
    height: 120px;
    background-color: #188774;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}

.circle h1 {
    font-size: 3rem;
    margin: 0;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand moving-message" href="#">Bienvenue</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="username">
                            @auth
                                {{ \Illuminate\Support\Facades\Auth::user()->name }}
                            @endauth
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-nav ms-auto mb-2 mb-lg-0">
            @auth
                <form class="nav-item" action="{{ route('auth.logout') }}" method="POST">
                    @method("delete")
                    @csrf
                    <button class="nav-link logout-button">Se déconnecter</button>
                </form>
            @endauth
            @guest
                <a href="{{ route('auth.login') }}" class="nav-link">Se connecter</a>
            @endguest
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="livre">
                                <i class="bi bi-book"></i>
                                Mes livres
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rayon">
                                <i class="bi bi-columns"></i>
                                Mes rayons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category">
                                <i class="bi bi-tags"></i>
                                Mes catégories
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1>Les livres</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Catégorie 1</div>
                <div class="card-body text-center">
                    <div class="circle">
                        <h1>{{ $category1Count }}</h1>
                    </div>
                    <p class="card-text">Livres dans la catégorie 1</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Catégorie 2</div>
                <div class="card-body text-center">
                    <div class="circle">
                        <h1>{{ $category2Count }}</h1>
                    </div>
                    <p class="card-text">Livres dans la catégorie 2</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Catégorie 3</div>
                <div class="card-body text-center">
                    <div class="circle">
                        <h1>{{ $category3Count }}</h1>
                    </div>
                    <p class="card-text">Livres dans la catégorie 3</p>
                </div>
            </div>
        </div>
    </div>
</main>


        </div>
    </div>

    <!-- Inclusion de Bootstrap JS pour les fonctionnalités de la barre de navigation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+6P1ZZYo4zsXY6HWeKCI8/EzN0WN2" crossorigin="anonymous"></script>
</body>
</html>
