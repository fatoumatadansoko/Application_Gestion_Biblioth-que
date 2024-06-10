<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des livres</title>
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Définition du style personnalisé pour les boutons */
        .custom-btn {
            background-color: #188774;
            border-color: #188774;
        }

        .custom-btn:hover {
            background-color: #136856;
            border-color: #136856;
        }
    </style>
</head>
<body>
    <!-- Conteneur principal -->
    <div class="container mt-5">
        <!-- Titre de la page -->
        <h1 class="mb-4">Liste des livres</h1>
        <!-- Bouton pour ajouter un nouvel article -->
        <a href="/ajouter/livre" class="btn btn-danger custom-btn">Ajouter un livre</a>   

        <!-- Grille Bootstrap pour afficher les articles -->
        <div class="row">
            <!-- Boucle pour parcourir et afficher chaque article -->
            @foreach($livres as $livre)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Affichage des détails du livre -->
                            <h5 class="card-title">{{ $livre->titre }}</h5>
                            <p class="card-text">Auteur : {{ $livre->auteur }}</p>
                            <p class="card-text">Éditeur : {{ $livre->editeur }}</p>
                            <p class="card-text">Date de publication : {{ $livre->date_publication }}</p>
                            <p class="card-text">ISBN : {{ $livre->isbn }}</p>
                            <p class="card-text">Nombre de pages : {{ $livre->nombre_page }}</p>
                            <p class="card-text">Rayon : {{ $livre->rayon->libelle }}</p>
                            <p class="card-text">Catégorie : {{ $livre->category->libelle }}</p>

                            <!-- Boutons pour supprimer ou modifier le livre -->
                            <a href="{{ url('/delete_livre/'.$livre->id) }}" class="btn btn-danger">Supprimer</a>
                            <a href="{{ url('/update_livre/'.$livre->id) }}" class="btn btn-primary custom-btn">Modifier</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Inclusion de Bootstrap JS pour les fonctionnalités interactives -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
