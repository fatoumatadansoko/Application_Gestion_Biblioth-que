<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bibliothèque</title>
    <!-- Inclusion de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Inclusion de Bootstrap CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Inclusion de Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <H1>Se connecter</H1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('auth.login')}}" method="POST" class="vstack gap-3">
                @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                @error('email')
                {{$message}}
                 @enderror
            </div>



            <div class="form-group">
                <label for="email">Mot de passe</label>
                <input type="passeword" class="form-control" id="password" name="password">
                @error('password')
                {{$message}}
                @enderror
            </div>

            <button class="btn btn-primarty">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>