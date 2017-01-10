<?php 
    session_start();
    require("modele/connexion_base.php"); 
    require("vue/commun.php");
    require("modele/para_capteurs.php");
    include("modele/insertpiece.php");
    include("modele/insertcapteur.php");
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


    /*if (isset($_POST["formparacapteurs"]))
    {
        $reponse= $bdd->prepare("SELECT * FROM pieces WHERE id_utilisateur = ?");
        $reponse->execute(array($id));
        $id_piece = intval($_SESSION['id_piece']);
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
            }
            else
            {
                $capteur = "Volet ".$i."";
            }
            insertcapteur($bdd, $id_piece, $capteur);
        }

        for ($i=1; $i <= $nbr_chauffage ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Chauffage";
            }
            else
            {
                $capteur = "Chauffage ".$i."";
            }
            insertcapteur($bdd, $id_piece, $capteur);
        }

        for ($i=1; $i <= $nbr_light ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Lumière";
            }
            else
            {
                $capteur = "Lumière ".$i."";
            }
            insertcapteur($bdd, $id_piece, $capteur);
        }

        for ($i=1; $i <= $nbr_baro ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Barométre";
            }
            else
            {
                $capteur = "Barométre ".$i."";
            }
            insertcapteur($bdd, $id_piece, $capteur);
        }

        for ($i=1; $i <= $nbr_presence ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Capteur de présence";
            }
            else
            {
                $capteur = "Capteur de présence ".$i."";
            }
            insertcapteur($bdd, $id_piece, $capteur);
        }

        for ($i=1; $i <= $nbr_camera ; $i++) 
        {
            if ($i == 1) 
            {
                $capteur = "Caméra";
            }
            else
            {
                $capteur = "Caméra ".$i."";
            }
            insertcapteur($bdd, $id_piece, $capteur);
        }
    }*/

    $reponse = selectpiece($bdd,$_SESSION['id']);
    $data = $reponse->fetchAll();
    $nombre = sizeof($data);
    $id_max = $nombre + $data[0][0];


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
        elseif ($_GET['cible'] == 'page_capteur_commun') 
        {
            include("vue/page_capteur_commun.php");
        }
        elseif ($_GET['cible'] == 'home') // HOME
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
        elseif ($_GET['cible'] == 'edition_profil') 
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
            include("#");
        }
        elseif ($_GET['cible'] == 'chauffage') 
        {
            include("#");
        }
        elseif ($_GET['cible'] == 'volets') 
        {
            include("#");
        }
        elseif ($_GET['cible'] == 'alarme') 
        {
            include("#");
        }
        elseif ($_GET['cible'] == 'caméras') 
        {
            include("#");
        }
        else if ($_GET['cible'] == "deconnexion")
        {
        // Détruit toutes les variables de session
        $_SESSION = array();
        if (isset($_COOKIE[session_name()])) 
        {
         setcookie(session_name(), '', time()-42000, '/');
        }
        session_destroy();
        include("Vue/page_connexion.php");
        }

    }  

 
?>
