<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des categorys</title>
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
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
        <h1 class="mb-4">Liste des categories</h1>
        <!-- Bouton pour ajouter un nouvel article -->
        <a href="/ajouter/category" class="btn custom-btn mb-3">Ajouter un category</a>   

        <!-- Grille Bootstrap pour afficher les articles -->
        <div class="row">
            <!-- Boucle pour parcourir et afficher chaque article -->
            @foreach($categories as $category)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Affichage de l'image de l'article -->
                        <h5 class="card-title">{{ $category->libelle }}</h5>
                        <h5 class="card-title">{{ $category->description }}</h5>

                        <div class="card-body">
                            <!-- Boutons pour supprimer ou modifier l'category -->
                            <div>
                                <a href="{{ url('/delete_category/'.$category->id) }}" class="btn btn-danger">Supprimer</a>
                                <a href="/update_category/{{ $category->id }}" class="btn custom-btn mb-3">Modifier un category</a>
                            </div>
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
