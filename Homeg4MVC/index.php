<?php
ini_set('display_errors', 'On');
    session_start();

    require("modele/connexion_base.php"); 
    require("vue/commun.php");
    include("modele/insertpiece.php");
    include("modele/insertcapteur.php");
    include("modele/inscription.php");
    require("modele/para_capteurs.php");
    if(!isset($_SESSION["id"]))
        { // L'utilisateur n'est pas connecté
        include("controleur/connexion.php");
        }// On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros
    /*if (isset($_GET['id']) AND $_GET['id']> 0)
    {
    $getid = intval($_GET['id']);
    $requser = $bdd ->prepare('SELECT * FROM utilisateur WHERE id = ?');
    $requser -> execute(array($getid));
    $userinfo = $requser->fetch();  // L'utilisateur est connecté  */

        //if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])

        //{

    if (isset($_POST['forminscription'])) 
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $identifiant = htmlspecialchars($_POST['identifiant']);
        $mail = htmlspecialchars($_POST['mail']);
        $mail2 = htmlspecialchars($_POST['mail2']);
        $tel1 = htmlspecialchars($_POST['tel1']);
        $tel2 = htmlspecialchars($_POST['tel2']);
        $n_rue = htmlspecialchars($_POST['n_rue']);
        $rue = htmlspecialchars($_POST['rue']);
        $ville = htmlspecialchars($_POST['ville']);
        $code_postal = htmlspecialchars($_POST['code_postal']);
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']); // 13 variables
        
        if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['identifiant']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['tel1']) AND !empty($_POST['n_rue']) AND !empty($_POST['rue']) AND !empty($_POST['ville']) AND !empty($_POST['code_postal']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) 
        {
        $nomlength = strlen($nom);
        if ($nomlength <= 255)
        {
        $prenomlength = strlen($prenom);
        if ($prenomlength <= 255)
        {
        $reponse = reqidentifiant($bdd, $identifiant);
        $identifiantexist = $reponse-> rowCount(); 
        if ($identifiantexist == 0)
        {
        $identifiantlength = strlen($identifiant);
        if ($identifiantlength <= 255)
        {
        if ($mail == $mail2) 
        {
        $tel1length = strlen($tel1);
        if($tel1length <= 12)
        {
        $tel2length = strlen($tel2);
        if($tel2length <= 12)
        {
        if ($n_rue < 10000000000)
        { 
        $ruelength = strlen($rue);
        if ($ruelength <= 255)
        {
        $villelength = strlen($ville);
        if ($villelength <= 255) 
        {
        if ($mdp == $mdp2) 
        {
            insertutilisateur($bdd, $nom, $prenom, $mail, $n_rue, $rue, $ville, $code_postal, $identifiant, $mdp, $tel1, $tel2);
            $erreur = "Votre compte a bien été créé ! <a href= \"connexion.php\">Connexion</a>"; 
        }
        else{
            $erreur ="Les mots de passes ne correspondent pas !";
        }

        }
        else{
            $erreur = "Le nom de la ville ne doit pas dépasser 255 caractères !";
        }

        }
        else{
            $erreur = "Le nom de la rue ne doit pas dépasser 255 caractères !";
        }

        }
        else{
            $erreur = "Le numéro de rue doit contenir au maximum 10 chiffres !";
        }

        }
        else{
            $erreur = "Le numéro de téléphone 2 doit contenir au maximum 12 chiffres !";
        }
            
        }
        else{
            $erreur = "Le numéro de téléphone 1 doit contenir au maximum 12 chiffres !";
        }

        }
        else{
            $erreur ="Votre adresse email ne correspond pas !";
        }
            
        }
        else{
            $erreur = "L'identifiant ne doit pas dépasser 255 caractères !";
        }

        }
        else{
            $erreur = "Cette identifiant existe déjà, veuillez en saisir un nouveau !";
        }
        }
        else{
            $erreur = "Le prénom ne doit pas dépasser 255 caractères !";
        }
        
        }
        else{
            $erreur = "Le nom ne doit pas dépasser 255 caractères !";
        }

        }
        else{
            $erreur = "Veuillez remplir tous les champs !";
        }

    } 


    if (isset($_POST['formparapieces'])) 
    {
        $id = intval($_SESSION['id']);
        $nbr_salon = htmlspecialchars($_POST['nbr_salon']);
        $nbr_cuisine = htmlspecialchars($_POST['nbr_cuisine']);
        $nbr_sdb = htmlspecialchars($_POST['nbr_sdb']);
        $nbr_chambre = htmlspecialchars($_POST['nbr_chambre']);
        $nbr_jardin = htmlspecialchars($_POST['nbr_jardin']);
    
        for ($i=1; $i <= $nbr_salon ; $i++) 
        {
            if ($i == 1) 
            {
                $piece = "Salon";
            }
            else
            {
                $piece = "Salon ".$i."";
            }
            insertpiece($bdd, $piece, $id);
        }

        for ($i=1; $i <= $nbr_cuisine ; $i++) 
        {
            if ($i == 1) 
            {
                $piece = "Cuisine";
            }
            else
            {
                $piece = "Cuisine ".$i."";
            }
            insertpiece($bdd, $piece, $id); 
        }

        for ($i=1; $i <= $nbr_sdb ; $i++) 
        {
            if ($i == 1) 
            {
                $piece = "Salle de bain";
            }
            else
            {
                $piece = "Salle de bain ".$i."";
            }
            insertpiece($bdd, $piece, $id); 
        }

        for ($i=1; $i <= $nbr_chambre ; $i++) 
        {
            if ($i == 1) 
            {
                $piece = "Chambre";
            }
            else
            {
                $piece = "Chambre ".$i."";
            }
            insertpiece($bdd, $piece, $id); 
        }

        for ($i=1; $i <= $nbr_jardin ; $i++) 
        {
            if ($i == 1) 
            {
                $piece = "Jardin";
            }
            insertpiece($bdd, $piece, $id); 
        }
    }



    $reponse = selectpiece($bdd,$_SESSION['id']);
    $data = $reponse->fetchAll();
    $nombre = sizeof($data);


    if (isset($_POST["formparacapteurs"]))
    {
        if(empty($_GET['id_piece']))
            {
                $id_piece = $data[0][0];
            }
        else
            { 
                $id_piece = $_GET['id_piece'];
            }
        $nbr_volet = htmlspecialchars($_POST['nbr_volet']);
        $nbr_chauffage = htmlspecialchars($_POST['nbr_chauffage']);
        $nbr_light = htmlspecialchars($_POST['nbr_light']);
        $nbr_baro = htmlspecialchars($_POST['nbr_baro']);
        $nbr_presence = htmlspecialchars($_POST['nbr_presence']);
        $nbr_camera = htmlspecialchars($_POST['nbr_camera']);
    
        for ($i=1; $i <= $nbr_volet ; $i++)     
        {
            if ($i == 1) 
            {
                $capteur = "Volet";
                $type = "volet";
            }
            else
            {
                $capteur = "Volet ".$i."";
                $type = "volet";
            }
            insertcapteur($bdd, $id_piece, $capteur, $type);
        }

        for ($i=1; $i <= $nbr_chauffage ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Chauffage";
                $type = "chauffage";
            }
            else
            {
                $capteur = "Chauffage ".$i."";
                $type = "chauffage";
            }
            insertcapteur($bdd, $id_piece, $capteur, $type);
        }

        for ($i=1; $i <= $nbr_light ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Lumière";
                $type = "light";
            }
            else
            {
                $capteur = "Lumière ".$i."";
                $type = "light";
            }
            insertcapteur($bdd, $id_piece, $capteur, $type);
        }

        for ($i=1; $i <= $nbr_baro ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Barométre";
                $type = "baro";
            }
            else
            {
                $capteur = "Barométre ".$i."";
                $type = "baro";
            }
            insertcapteur($bdd, $id_piece, $capteur, $type);
        }

        for ($i=1; $i <= $nbr_presence ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Capteur de présence";
                $type = "presence";
            }
            else
            {
                $capteur = "Capteur de présence ".$i."";
                $type = "presence";
            }
            insertcapteur($bdd, $id_piece, $capteur, $type);
        }

        for ($i=1; $i <= $nbr_camera ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Caméra";
                $type = "cam";
            }
            else
            {
                $capteur = "Caméra ".$i."";
                $type = "cam";
            }
            insertcapteur($bdd, $id_piece, $capteur, $type);
        }
    }


    if (isset($_GET['cible'])) 
    {
        if ($_GET['cible'] == 'para_capteurs') 
        {
            if(empty($_GET['id_piece']))
            {
                $indice = 0;
                $id_piece = $data[0][0];
                include("vue/para_capteurs.php");
            }
            else
            { 
                $indice = $_GET['indice'];
                if($indice == $nombre -1)
                {
                   include("vue/home.php");
                }
                else
                {
                    $id_piece = $_GET['id_piece'];
                    $id_piece ++;
                    $indice ++;
                    include("vue/para_capteurs.php");   
                } 
            }
        }
        elseif ($_GET['cible'] == 'page_capteur_commun') // OK
        {
            $id_piece = $_GET['id_piece'];
            include("vue/page_capteur_commun.php");
        }
        elseif ($_GET['cible'] == 'page_capteur_specifique') // OK
        {
            $id_piece = $_GET['id_piece'];
            $type = $_GET['type'];  
            include("vue/page_capteur_specifique.php"); 
        }
        elseif ($_GET['cible'] == 'home') // HOME // OK
        {
            include("vue/home.php");
        }
        elseif ($_GET['cible'] == 'reglage') // REGLAGE
        {
            include("vue/reglage.php");
        }
        elseif ($_GET['cible'] == 'securite') // REGLAGE
        {
            include("vue/home.php");
        }
        elseif ($_GET['cible'] == 'systeme') 
        {
            include("#");
        }
        elseif ($_GET['cible'] == 'cgu') 
        {
            include("#");
        }
        elseif ($_GET['cible'] == 'edition_profil') // OK
        {
            include("vue/edition_profil.php");
        }
        elseif ($_GET['cible'] == 'newsletter') // CONTACT
        {
            include("vue/newsletter.php");
        }
        elseif ($_GET['cible'] == 'forum') 
        {
            include("#");
        }
        elseif ($_GET['cible'] == 'sav') 
        {
            include("#");
        }
        elseif ($_GET['cible'] == 'lampes') // ASIDE
        {
            include("vue/liste_capteur_lampe.php");
        }
        elseif ($_GET['cible'] == 'chauffage') 
        {
            include("vue/liste_capteur_chauffage.php");
        }
        elseif ($_GET['cible'] == 'volets') 
        {
            include("vue/liste_capteur_volet.php");
        }
        elseif ($_GET['cible'] == 'alarme') 
        {
            include("vue/liste_capteur_alarme.php");
        }
        elseif ($_GET['cible'] == 'cameras') 
        {
            include("vue/liste_capteur_camera.php");
        }

        //ADMIN

        elseif ($_GET['cible'] == "home_admin") //OK
        {
            include("vue/home_admin.php");
        }
        elseif ($_GET['cible'] == "inscription") // OK
        {
            include("vue/inscription.php");
        }
        elseif ($_GET['cible'] == "utilisateur") // OK
        {
            include("vue/gestion_utilisateur.php"); 
        }
        elseif ($_GET['cible'] == "confirme") // OK
        {
            $id_mbr = $_GET['confirme'];
            include("vue/gestion_utilisateur.php");
        }
        elseif ($_GET['cible'] == "delete") // OK
        {
            $id_mbr = $_GET['delete'];
            include("vue/gestion_utilisateur.php");
        }
        else if ($_GET['cible'] == "deconnexion") // OK
        {
        // Détruit toutes les variables de session
        //$_SESSION = array();
        if (isset($_COOKIE[session_name()])) 
        {
         setcookie(session_name(), '', time()-42000, '/');
        }
        session_destroy();
        include("Vue/page_connexion.php");
        }

    }  
 
?>
