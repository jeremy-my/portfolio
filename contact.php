<?php
    $tabErreur = array();
    $tabValider = array();

    if (isset($_POST['isSubmit'])&& $_POST['isSubmit']=="1") {
        if (empty($_POST['NOM'])) {
            $errNOM='<span class="error"> Il faut renseigner le NOM </span>';
            array_push($tabErreur, $errNOM);
        }else {
            $NOM=$_POST['NOM'];
            array_push($tabValider, "nom : $NOM");
        }

        if(empty($_POST['Prenom'])) {
            $errPrenom='<span class="error">Il faut renseigner le Prenom </span>';
            array_push($tabErreur, $errPrenom);
        } else {
            $Prenom=$_POST['Prenom'];
            array_push($tabValider, "prenom : $Prenom");
        }

        if(empty($_POST['Email']) || !filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
            $errEmail= '<span class="error">Il faut renseigner le mail </span>';
            array_push($tabErreur, $errEmail);
        } else {
            $Email=$_POST['Email'];
            array_push($tabValider, "Email : $Email");
        }

        if(!empty($_POST['NumeroTel'])) {
            $numTelephone=$_POST['NumeroTel'];
            array_push($tabValider, "Numéro Téléphone : $numTelephone");
        } 

        if(empty($_POST['raison'])) {
            $errRaison='<span class="error">Il faut renseigner la raison </span>';
            array_push($tabErreur, $errRaison);
        } else{
            $raison=$_POST['raison'];
            array_push($tabValider, "Motif du contact : $raison");
        } 

        if(empty($_POST['time'])) {
            $errCreneau='<span class="error">Il faut renseigner un créneau </span>';
            array_push($tabErreur, $errCreneau);
        } else{
            $creneau=$_POST['time'];
            array_push($tabValider, "Créneau : $creneau");
        } 

        if(empty($_POST["demande"])) {
            $errDemande='<span class="error">Il faut renseigner la demande </span>';
            array_push($tabErreur, $errDemande);
        } else {
            $demande=$_POST['demande'];
            array_push($tabValider, "Demande : $demande");
        }  
    }              
?>

<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/contact.css">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jérémy Mouyon</title>
    </head>
    <body>  
        <header>
                <nav>
                    <h1>Jérémy Mouyon - Contact</h1>
                    <a target="-blank" href= "index.html">Accueil</a>
                </nav>
        </header>

        <div>
            <form class="Formulaire" method="POST">
                <p> 
                    <label for="NOM">Saisir le NOM :</label>
                    <input type="text" name="NOM" id="Nom" placeholder="NOM" required />
                </p>

                <p>  
                    <label for="Prenom">Saisir le Prénom :</label>
                    <input type="text" name="Prenom" id="Prenom" placeholder="Prénom" />
			    </p>

                <p>
                    <label for="Email">Saisir l'Email utilisateur :</label>
                    <input type="text" name="Email" id="Email" placeholder="Email" required />
			    </p>

                <p> 
                    <label for="NumeroTel">Saisir le numéro de téléphone (facultatif) :</label>
                    <input type="text" name="NumeroTel" id="NumeroTel" placeholder="Numéro de téléphone (facultatif)">
			    </p>

                <p>
                    <label for="raison">Motif du contact</label>
                    <select id="raison" name="raison">
                        <option value="Formation">Formation</option>
                        <option value="Emploi">Emploi</option>
                        <option value="Loisir">Loisir</option>
                        <option value="Contact">Contact</option>
                    </select>
                </p>
                
                <p>
                    <label for="time">Crénaux Horaire</label>
                    <input type="datetime-local" id="time" name="time"/>
                </p>
                
                <p>
                    <label for="pro">Demande professionelle</label>
                    <input type="radio" id="pro" name="choix"/>
                </p>
                
                <p>
                    <label for="perso">Demande personnelle</label>
                    <input type="radio" id="perso" name="choix"/>
                </p>
                
                <p>
                        <label for="demande"> Demande : </label>
                        <textarea name="demande" id="desc" rows="10" cols="30" required></textarea>
                </p>
                
                <p>
                    <input type="hidden" name="isSubmit" value="1"/>
                    <input type="submit" name="Envoie" class="Envoie">
                </p>
                
                <p>
                    <input type="reset" value="Effacer le formulaire"/>
                </p>
            </form>
            <p class="recap">
            <?php 
                if(empty($tabErreur)) {
                    foreach($tabValider as $arg) {
                        echo "$arg <br>" ;
                    } 
                }  else {
                    foreach($tabErreur as $arg) {
                        echo "$arg <br>";
                    } 
                } 
            ?>
            </p>
        </div>

        <footer>
                <h3>&copyJérémy Mouyon</h3>
        </footer>
    </body>
</html>
