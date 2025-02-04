<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un TEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="Container">
        <div class="row">
            <div class="col =12 ">
                <h1>Ajouter un Etudiant</h1>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {( session('status') )}
                    </div>
                    
                @endif
                <form action="/ajouter/traitement" method="POST" class="form-goup">
                    @csrf


                    <div class="form-group">
                      <label for="nom">Nom de l'Etudiant</label>
                      <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom(s)</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                    <div class="form-group">
                        <label for="niveau">Niveaux</label>
                        <input type="text" class="form-control" id="niveau" name="niveau">
                    </div>

                    <br>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary" >Ajouter un Etudiant</button>

                    <br><br/>

                    <a href="/etudiant" class="btn btn-danger"> Revenir à la liste des étudiants </a>
                    </div>
                </form>


            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>