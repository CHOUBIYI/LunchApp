<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un TEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="Container text-center">
        <div class="row">
            <div class="col =12 ">
                <h1>Bienvenue dans la liste des etudiants</h1>
                <hr>
                <a href="/ajouter" class="btn btn-primary">Ajouter un étudiant </a>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom de l'Etudiant</th>
                        <th scope="col">Prénom(s)</th>
                        <th scope="col">Niveaux</th>
                        <th> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>DARI</td>
                        <td>Charles</td>
                        <td>Tle</td>
                        <td>
                            <a href="#" class="btn btn-info"> Modifier </a>
                            <a href="#" class="btn btn-danger"> Supprimer </a>
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>