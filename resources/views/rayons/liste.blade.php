<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des rayons</title>
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
        <h1 class="mb-4">Liste des rayons</h1>
        <!-- Bouton pour ajouter un nouvel rayon -->
        <a href="/ajouter/rayon" class="btn custom-btn mb-3">Ajouter un rayon</a>   

        <!-- Grille Bootstrap pour afficher les rayons -->
        <div class="row">
            <!-- Boucle pour parcourir et afficher chaque rayon -->
            @foreach($rayons as $rayon)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Affichage du libelle du rayon -->
                            <h5 class="card-title">{{ $rayon->libelle }}</h5>
                            <!-- Affichage de la partie avec une limite de 100 caractères -->
                            <p class="card-text">{{ Str::limit($rayon->partie, 100) }}</p>
                            <!-- Boutons pour supprimer ou modifier le rayon -->
                            <div>
                                <a href="{{ url('/delete_rayon/'.$rayon->id) }}" class="btn btn-danger">Supprimer</a>
                                <a href="/update_rayon/{{ $rayon->id }}" class="btn custom-btn mb-3">Modifier</a>
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
