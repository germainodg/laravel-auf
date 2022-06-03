
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('connextion.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>formulaire</title>
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
                        <h1>SE CONNECTER</h1>
                    </div>
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </header>
    <form method="POST" action="">
        <form class="row g-3 needs-validation" novalidate>
            <div class="menu">
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label  class="form-label" >nom:</label>
                            </div>
                            <div class="entre col-5"><input type="text" name="nom"></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label class="form-label" >prenom:</label>
                            </div>
                            <div class="entre col-5"><input type="text" name="prenom" ></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label class="form-label" >email:</label> </div>
                            <div class="entre col-5">
                            <input type="text" class="form-control" name="email">
                        </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label  class="form-label">mot_de_passe:</label>
                            </div>
                            <div class="entre col-5"><input type="password" class="form-control"  name="password"></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub col-12">
                    <button class="btn btn-primary" type="submit"><a href="liste"> Envoyer</a></button>
                </div>
            </div>

        </form>
        <div class="row">
            <div class="bon">
                <div class="trai">
                    <div class="barr"></div>
                    <div class="texte">
                        <h1>RAPPORT <br>
                            D'ACTIVITES <br>
                            2021 <br>  
                        </h1>
                    </div>
                    <div class="barr"></div>
                </div>
                <div class="image">
                    <img src="./images/a-propos.jpg" width="108px" height="100px">
                </div>
            </div>
        </div>
    </form>
    <footer>
        <div class="container">
            <div class="row">
                <div class="but">
                   <a href="acceuil"><img src="./images/arton1259-f6040.png" width="250px" height="150px"></a>
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
