<?php  
include ("./connection.php");
if (isset($_POST["connecter"])){
    echo "resultat";
    $n =$_POST["n"];
    $nom =$_POST["nom"];
    $prenom =$_POST["prenom"];
    $date_de_naissance =$_POST["date_de_naissance"];
    $debut_d_abonnement =$_POST["debut_d_abonnement"];
    $numero =$_POST["numero"];
    $email =$_POST["email"];
    $query ="INSERT INTO `liste`(`n`,`nom`,`prenom`,`date_de_naissance`,`debut_d_abonnement`,`numero`,`email`)
    values ('$n',$nom, $prenom, $date_de_naissance,$debut_d_abonnement, $numero, $email)";
     $resultat = mysqli_query( $connection, $query);
}

    if( $resultat){

        echo "utilisateur ajoute avec succes";
        header("Location:./formulaire.php");
        exit;
    }
     else{
         echo "echec d'ajout";
     }

}


?>