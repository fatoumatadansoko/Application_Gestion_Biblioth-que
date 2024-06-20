<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Laravel</title>
    <!-- Chargement de Bootstrap CSS -->
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
        <div class="row">
            <div class="col-12">
                <!-- Titre de la page -->
                <h1>Ajouter un rayon</h1>
                <!-- Ligne de séparation -->
                <hr>
                <!-- Affichage des messages de statut -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <!-- Formulaire d'ajout de rayon -->
                <form action="{{ url('/ajouter/traitement') }}" method="POST" class="form-group">
                    @csrf
                    <div class="mb-3">
                        <label for="partie" class="form-label">Partie</label>
                        <input type="text" class="form-control @error('partie') is-invalid @enderror" id="partie" name="partie" value="{{ old('partie') }}">
                        @error('partie')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libellé</label>
                        <select class="form-control @error('libelle') is-invalid @enderror" id="libelle" name="libelle">
                            <option value="" disabled selected>Choisissez un libellé</option>
                            <option value="Fiction" {{ old('libelle') == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                            <option value="Policier" {{ old('libelle') == 'Policier' ? 'selected' : '' }}>Policier</option>
                            <option value="Horreur" {{ old('libelle') == 'Horreur' ? 'selected' : '' }}>Horreur</option>
                            <option value="Biographie" {{ old('libelle') == 'Biographie' ? 'selected' : '' }}>Biographie</option>
                        </select>
                        @error('libelle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Boutons de soumission et de retour -->
                    <button type="submit" class="btn custom-btn mb-3">Ajouter un rayon</button>
                    <br>
                    <a href="/rayon" class="btn btn-danger">Retourner</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Chargement de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
