
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>liste</title>
  <link rel="stylesheet" href="{{asset('liste.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>

<body>
  <header>
    <div class="container fluid">
      <div class="row">
        <div class="logo">
          <a href="acceuil"> <img src="./images/index.png" alt=""></a>
        </div>
        <div class="barre"></div>
        <div class="trai">
          <div class="bar"></div>

          <div class="text">
            <h1>LISTES DES ABONNEES</h1>
          </div>
          <div class="bar"></div>
        </div>
      </div>
    </div>
  </header>
  
  <form method="POST" action="">

      <div class="container">
          <div class="d-flex justify-content-end mb-4">
          <a href="" class="btn btn-primary">Ajouter un Abonner</a>
          </div>
      <table class="table grand">
        <thead>
          <tr>
            <th class="bien col-1">N*</th>
            <th class="bien col-2">Nom </th>
            <th class="bien col-2" >Prénom</th>
            <th class="bien col-2">Date de naissance </th>
            <th class="bien col-2">Début de abonnement</th>
            <th class="bien col-2">Email</th>
            <th class="bien col-2">Option</th>
          </tr>
        </thead>

       
        <tbody>
        <tr>
            <th class="bien">1</th>
            <td>kabore</td>
            <td>Hamed</td>
            <td>04/05/1999</td>
            <td>04/02/2022</td>
            <td>hmd@gmail.com</td>
            <td>
               
                <a href="" class="btn btn-info">Modifier</a>
                <a href="" class="btn btn-danger">Supprimer</a>
            </td>
          </tr>
          <tr colspan="6" class="vide"><td colspan="6" class="vide"> 
        
        </tbody>
      </table>
    </div>
  </form>

  <footer>
    <div class="container">
      <div class="row">
        <div class="but">
          <a href="acceuil"> <img src="./images/arton1259-f6040.png" width="250px" height="150px"></a>
        </div>
        <div class="ecrit">
          <h3>
            Contacts <br>
            Mentions Légales <br>
            Politique de confidentialités <br>
          </h3>
        </div>
      </div>
    </div>
  </footer>
  <script src="{{asset('js/bootstrap.js')}}"></script>
</body>

</html>