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
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Modifier un rayon</h1>
                <hr>
                <!-- Affichage des messages de statut -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- Affichage des erreurs de validation -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <!-- Formulaire de modification de rayon -->
                <form action="{{ url('/update_rayon_traitement/' . $rayons->id) }}" method="POST" class="form-group">
                    @csrf
                    <div class="mb-3">
                        <label for="partie" class="form-label">Partie</label>
                        <input type="text" class="form-control @error('partie') is-invalid @enderror" id="partie" name="partie" value="{{ old('partie', $rayons->partie) }}">
                        @error('partie')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libellé</label>
                        <select class="form-control @error('libelle') is-invalid @enderror" id="libelle" name="libelle">
                            <option value="Fiction" {{ old('libelle', $rayons->libelle) == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                            <option value="Policier" {{ old('libelle', $rayons->libelle) == 'Policier' ? 'selected' : '' }}>Policier</option>
                            <option value="Horreur" {{ old('libelle', $rayons->libelle) == 'Horreur' ? 'selected' : '' }}>Horreur</option>
                            <option value="Biographie" {{ old('libelle', $rayons->libelle) == 'Biographie' ? 'selected' : '' }}>Biographie</option>
                        </select>
                        @error('libelle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn custom-btn mb-3">Modifier un rayon</button>
                    <a href="/rayon" class="btn btn-danger">Retourner</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Chargement de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
