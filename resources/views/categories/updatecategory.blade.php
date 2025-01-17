<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Laravel</title>
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
          <form action="{{ url('/update_category_traitement/' . $categories->id) }}" method="POST" class="form-group">
            @csrf
            <div class="mb-3">
              <label for="libelle" class="form-label">libelle</label>
              <input type="string" class="form-control" id="libelle" name="libelle" value="{{ $categories->libelle }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="string" class="form-control" id="description" name="description" value="{{ $categories->description }}">
              </div>
           
            <br>
            <button type="submit" class="btn custom-btn mb-3">Modifier une categorie</button>
            <br>
            <a href="/category" class="btn btn-danger">Retourner</a>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
