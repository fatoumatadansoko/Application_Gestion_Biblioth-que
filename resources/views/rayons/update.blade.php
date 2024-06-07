<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1>Modifier un rayon</h1>
          <hr>
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
          <ul>
            @foreach ($errors->all() as $error)
              <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
          </ul>
          <form action="{{ url('/update_rayon_traitement/' . $rayons->id) }}" method="POST" class="form-group">
            @csrf
            <div class="mb-3">
              <label for="partie" class="form-label">Partie</label>
              <input type="string" class="form-control" id="partie" name="partie" value="{{ $rayons->partie }}">
            </div>
            <div class="mb-3">
              <label for="libelle" class="form-label">Libellé</label>
              <select class="form-control" id="libelle" name="libelle">
                <option value="Fiction" {{ $rayons->libelle == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                <option value="Policier" {{ $rayons->libelle == 'Policier' ? 'selected' : '' }}>Policier</option>
                <option value="Horreur" {{ $rayons->libelle == 'Horreur' ? 'selected' : '' }}>Horreur</option>
                <option value="Biographie" {{ $rayons->libelle == 'Biographie' ? 'selected' : '' }}>Biographie</option>
              </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Modifier un rayon</button>
            <br>
            <a href="/rayon" class="btn btn-danger">Retourner</a>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
