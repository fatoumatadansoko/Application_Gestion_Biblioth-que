<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Laravel</title>
    <!-- Chargement de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Conteneur principal -->
    <div class="container">
        <div class="row">
            <div class="col s12">
                <!-- Titre de la page -->
                <h1>Ajouter une catégorie</h1>
                <!-- Ligne de séparation -->
                <hr>
                <!-- Affichage des messages de statut -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- Affichage des erreurs de validation -->
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>

                <!-- Formulaire d'ajout d'article -->
                <form action="/ajoutercategory/traitement" method="POST" class="form-group">
                    @csrf
                    <div class="mb-3">
                        <label for="libelle" class="form-label">libelle</label>
                        <input type="string" class="form-control" id="libelle" name="libelle">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <input type="string" class="form-control" id="description" name="description">
                    </div>
                    
                  
                    <!-- Boutons de soumission et de retour -->
                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter une categrie</button>
                    <br>
                    <a href="/category" class="btn btn-danger">Retourner</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Chargement de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
