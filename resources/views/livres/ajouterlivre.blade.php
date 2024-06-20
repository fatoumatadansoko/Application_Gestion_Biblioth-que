<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Livre</title>
    <!-- Chargement de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <h1>Ajouter un Livre</h1>
        <hr>

        <!-- Affichage des messages de statut -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Formulaire d'ajout de livre -->
        <form action="{{ route('ajouter_livre_traitement') }}" method="POST" class="form-group">
            @csrf
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{ old('titre') }}" required>
                @error('titre')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date_publication" class="form-label">Date de Publication</label>
                <input type="date" class="form-control @error('date_publication') is-invalid @enderror" id="date_publication" name="date_publication" value="{{ old('date_publication') }}" required>
                @error('date_publication')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nombre_page" class="form-label">Nombre de Pages</label>
                <input type="number" class="form-control @error('nombre_page') is-invalid @enderror" id="nombre_page" name="nombre_page" value="{{ old('nombre_page') }}" required>
                @error('nombre_page')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="auteur" class="form-label">Auteur</label>
                <input type="text" class="form-control @error('auteur') is-invalid @enderror" id="auteur" name="auteur" value="{{ old('auteur') }}" required>
                @error('auteur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{ old('isbn') }}" required>
                @error('isbn')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="editeur" class="form-label">Éditeur</label>
                <input type="text" class="form-control @error('editeur') is-invalid @enderror" id="editeur" name="editeur" value="{{ old('editeur') }}" required>
                @error('editeur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="rayon_id" class="form-label">Rayon</label>
                <select class="form-control @error('rayon_id') is-invalid @enderror" id="rayon_id" name="rayon_id" required>
                    @foreach ($rayons as $rayon)
                        <option value="{{ $rayon->id }}" {{ old('rayon_id') == $rayon->id ? 'selected' : '' }}>{{ $rayon->libelle }}</option>
                    @endforeach
                </select>
                @error('rayon_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Catégorie</label>
                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->libelle }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn custom-btn mb-3">Ajouter un Livre</button>
            <br>
            <a href="/livre" class="btn btn-danger">Retourner</a>
        </form>
    </div>

    <!-- Chargement de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
