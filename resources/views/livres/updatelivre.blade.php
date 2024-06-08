<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un livre</title>
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Modifier un livre</h1>
        <!-- Formulaire pour la modification du livre -->
        <form action="{{ route('update_livre_traitement', ['id' => $livre->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ $livre->titre }}">
            </div>
            <div class="mb-3">
                <label for="auteur" class="form-label">Auteur</label>
                <input type="text" class="form-control" id="auteur" name="auteur" value="{{ $livre->auteur }}">
            </div>
            <div class="mb-3">
                <label for="editeur" class="form-label">Éditeur</label>
                <input type="text" class="form-control" id="editeur" name="editeur" value="{{ $livre->editeur }}">
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $livre->isbn }}">
            </div>
            
            <div class="mb-3">
                <label for="date_publication" class="form-label">Date de publication</label>
                <input type="date" class="form-control" id="date_publication" name="date_publication" value="{{ $livre->date_publication }}">
            </div>
            <div class="mb-3">
                <label for="nombre_page" class="form-label">Nombre de pages</label>
                <input type="number" class="form-control" id="nombre_page" name="nombre_page" value="{{ $livre->nombre_page }}">
            </div>
            <div class="mb-3">
                <label for="rayon_id" class="form-label">Rayon</label>
                <select class="form-control" id="rayon_id" name="rayon_id">
                    @foreach ($rayons as $rayon)
                        <option value="{{ $rayon->id }}" {{ $livre->rayon_id == $rayon->id ? 'selected' : '' }}>{{ $rayon->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Catégorie</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $livre->category_id == $category->id ? 'selected' : '' }}>{{ $category->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modifier le livre</button>
        </form>
    </div>
    <!-- Inclusion de Bootstrap JS pour les fonctionnalités interactives -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
