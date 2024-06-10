<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Livre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container">
        <h1>Ajouter un Livre</h1>
        <hr>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('ajouter_livre_traitement') }}" method="POST" class="form-group">
            @csrf
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre') }}" required>
            </div>
            <div class="mb-3">
                <label for="date_publication" class="form-label">Date de Publication</label>
                <input type="date" class="form-control" id="date_publication" name="date_publication" value="{{ old('date_publication') }}" required>
            </div>
            <div class="mb-3">
                <label for="nombre_page" class="form-label">Nombre de Pages</label>
                <input type="number" class="form-control" id="nombre_page" name="nombre_page" value="{{ old('nombre_page') }}" required>
            </div>
            <div class="mb-3">
                <label for="auteur" class="form-label">Auteur</label>
                <input type="text" class="form-control" id="auteur" name="auteur" value="{{ old('auteur') }}" required>
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}" required>
            </div>
            <div class="mb-3">
                <label for="editeur" class="form-label">Éditeur</label>
                <input type="text" class="form-control" id="editeur" name="editeur" value="{{ old('editeur') }}" required>
            </div>
            <div class="mb-3">
                <label for="rayon_id" class="form-label">Rayon</label>
                <select class="form-control" id="rayon_id" name="rayon_id" required>
                    @foreach ($rayons as $rayon)
                        <option value="{{ $rayon->id }}" {{ old('rayon_id') == $rayon->id ? 'selected' : '' }}>{{ $rayon->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Catégorie</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary custom-btn">Ajouter un Livre</button>
            <br>
            <a href="/livre" class="btn btn-danger">Retourner</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
