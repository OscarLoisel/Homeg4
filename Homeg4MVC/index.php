<?php 
    session_start();
    require("modele/connexion_base.php"); 
    require("vue/commun.php");
    if(!isset($_SESSION["id"])){ // L'utilisateur n'est pas connecté
        include("controleur/connexion.php"); // On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros
   /* if (isset($_GET['id']) AND $_GET['id']> 0)
    {
    $getid = intval($_GET['id']);
    $requser = $bdd ->prepare('SELECT * FROM utilisateur WHERE id = ?');
    $requser -> execute(array($getid));
    $userinfo = $requser->fetch();  // L'utilisateur est connecté  

        if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
        { */
            if (isset($_GET['cible'])) 
            {
                 if ($_GET['cible'] == 'home') // HOME
                 {
                     include("../vue/home.php");
                 }
                 elseif ($_GET['cible'] == 'sécurite') // REGLAGE
                 {
                     include("#");
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
                     include("#");
                 }
                 elseif ($_GET['cible'] == 'newsletter') // CONTACT
                 {
                     include("#");
                 }
                 elseif ($_GET['cible'] == 'forum') 
                 {
                     include("#");
                 }
                 elseif ($_GET['cible'] == 'sav') 
                 {
                     include("#");
                 }
                 elseif ($_GET['cible'] == 'deconnexion') // DECONNEXION
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
            }
       // }  
    }
?>
