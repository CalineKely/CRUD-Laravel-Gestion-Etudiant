<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud laravel essai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  
    <h1>Coucou</h1>
    <hr>
    <a  href="/ajouter" class="btn btn-primary">Ajouter un étudiant</a>
    <hr>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Classe</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    @php
      $ide=1;
    @endphp

    @foreach($etudiants as $etudiant)
    <tr>
      <th scope="row">{{$ide}}</th>
      <td>{{$etudiant->nom}}</td>
      <td>{{$etudiant->prenom}}</td>
      <td>{{$etudiant->classe}}</td>
      <td>
        <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-warning">Modifier</a>
        <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>

    @php 
      $ide += 1;
    @endphp

    @endforeach
  </tbody>
</table>

{{$etudiants->links()}}
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>