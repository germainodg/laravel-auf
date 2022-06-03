
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('formul.css')}}">
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
                        <h1> FORMULAIRE D'ABONNEMENT</h1>
                    </div>
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </header>
    <form>
         <form action="" method="POST">
            <div class="menu">
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label for="validationCustom01" class="form-label" >Nom:</label>
                            </div>
                            <div class="entre col-5"><input type="text" class="form-control" id="validationCustom01" name="nom"
                                    value="" required></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label for="validationCustom01" class="form-label" >Prénom:</label>
                            </div>
                            <div class="entre col-5"><input type="text" class="form-control" id="validationCustom01" name="prenom"
                                    value="" required></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label for="validationCustom01" class="form-label" >Date de naissance:</label> </div>
                            <div class="entre col-5"><input type="text" class="form-control" id="validationCustom01" name="date_de_naissance"
                                    value="" required></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label for="validationCustom01" class="form-label" >Début d'abonnement:</label> </div>
                            <div class="entre col-5"><input type="text" class="form-control" id="validationCustom01" name="debut_d_abonnement"
                                    value="" required></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label for="validationCustom01"
                                    class="form-label" >Email:</label> </div>
                            <div class="entre col-5"><input type="text" class="form-control" id="validationCustom01" name="email"
                                    value="" required></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label  class="form-label">Mot de passe:</label>
                            </div>
                            <div class="entre col-5"><input type="password" class="form-control"  name="password"></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="label col-7"> <label  class="form-label">Mot de passe:</label>
                            </div>
                            <div class="entre col-5"><input type="password" class="form-control"  name="password_confirm"></div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub col-12">
                    <button class="btn btn-primary" type="submit" name="envoyer"> Envoyer</button>
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