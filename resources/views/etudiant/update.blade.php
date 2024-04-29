<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud laravel essai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  
    <h1>Modifier un etudiant</h1>
    <br>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <ul>
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
        @endforeach
    </ul>

    
    
    <form action="/update/traitement" method="POST">
        @csrf
        <input type="text" name="id" style="display: none;" value="{{$etudiants->id}}" >

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiants->nom}}" placeholder="Anarana">
            <label for="nom">Nom</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$etudiants->prenom}}"  placeholder="Fanampin'anarana">
            <label for="prenom">Prénom</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="classe" name="classe" value="{{$etudiants->classe}}" placeholder="kilasy">
            <label for="classe">Classe</label>
        </div>
        <br>
        <div class="col-12">
            <button class="btn btn-success" type="submit">Modifier un étudiant</button>
        </div>

<br>
        <a href="/etudiant" class="btn btn-primary" style="background-color: grey; border:none"> Revenir à la liste des étudiants</a>
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>