<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des rayons</title>
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>
    <!-- Conteneur principal -->
    <div class="container mt-5">
        <!-- Titre de la page -->
        <h1 class="mb-4">Liste des rayons</h1>
        <!-- Bouton pour ajouter un nouvel article -->
        <a href="/ajouter/rayon" class="btn btn-primary">Ajouter un rayon</a>   

        <!-- Grille Bootstrap pour afficher les articles -->
        <div class="row">
            <!-- Boucle pour parcourir et afficher chaque article -->
            @foreach($rayons as $rayon)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Affichage de l'image de l'article -->
                        <h5 class="card-title">{{ $rayon->libelle }}</h5>
                        <div class="card-body">
                            <!-- Affichage de la partie avec une limite de 100 caractères -->
                            <p class="card-text">{{ Str::limit($rayon->partie, 100) }}</p>
                            <!-- Affichage de la date de création de l'rayon -->
                            
                            <!-- Boutons pour supprimer ou modifier l'rayon -->
                            <div>
                                <a href="{{ url('/delete_rayon/'.$rayon->id) }}" class="btn btn-danger">Supprimer</a>
                                <a href="/update_rayon/{{ $rayon->id }}" class="btn btn-primary">Modifier un rayon</a>
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
