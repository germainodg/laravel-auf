<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>acceuil</title>
</head>
<body>
    
    <header>
        <div class="container fluid">
            <div class="row">
                <div class="logo">
                   <a href="acceuil"> <img src="{{asset('images/index.png')}}." alt=""></a>
                </div>
                    <div class="barre"></div>                
                <div class="trai">
                    <div class="bar"></div>

                    <div class="text">
                        <h1>NOS ACTIVITES</h1>
                    </div>
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </header>
<form>
    <div class="container">
        <div class="row">
            <div class="solide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card1" style="width: 18rem;">
                            <img src="./images/emplois-large.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Section Connecter</h5>
                                <p class="card-text">
                                    Maintenance applicative <br>
                                    Maintenance applicative et/ou <br>
                                    évolutive de votre application <br>
                                    Reprise de code <br>
                                    En savoir plus <br>
                                    Confiez-nous votre projet <br>
                                    Vous avez un projet ? Parlons-en ! <br>
                                </p>
                                <div class="sub col-12">
                                  <button    class="btn btn-primary" type="submit"><a href="connection"> Se Connecter</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card2" style="width: 18rem;">
                            <img src="./images/Instances.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> S'Abonner:</h5>
                                <p class="card-text">
                                    Accompagnement sur vos roadmaps <br>
                                    de développement d'applications web & mobiles <br>
                                    En savoir plus <br>
                                    savoir <br>
                                </p>
                                <div class="sub col-12">
                                   <button class="btn btn-primary" type="submit"><a href="formulaire">S'Abonner</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card3" style="width: 18rem;">
                            <img src="./images/DRA_Prisa_627x449_USherbrooke-2021.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> Nos Abonnées:</h5>
                                <p class="card-text">
                                    Développement de vos solutions web & mobiles <br>
                                    à partir de langages, frameworks éprouvés + <br>
                                    open source <br>
                                    En savoir plus <br>
                                </p>
                                <div class="sub col-12">
                                 <button class="btn btn-primary" type="submit"><a href="liste"> Nos Abonnées</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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