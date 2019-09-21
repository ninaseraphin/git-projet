<?php
/**
 * Class OeuvreAdminControlleur
 * Gère les requêtes HTTP de l'admin
 *
 * @author Jonathan Martel
 * @version 1.0
 * @update 2019-08-12
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 */
 
 /*
 * TODO : Commenter selon les standards du département.
 *
 */

 
 
class MenuAdminControlleur extends Controlleur
{
    public function getAction(Requete $requete)
    {
        if(isset($_SESSION['login']) && $_SESSION['login'] == 'admin')
        {
            $oVue = new AdminVue();
            $oVue->afficheEntete();
            $oVue->afficheDeconnection();
            $oVue->afficheMenuAdmin();
            $oVue->affichePied(); 
        }
        else
        {
            header("location:http://localhost/art-public-mtl/api/admin");
            exit();
        }
    }
    
	public function postAction()
    {        
            session_start(); //to ensure you are using same session
            session_destroy(); //destroy the session
            header("location:http://localhost/art-public-mtl/api/admin");
            exit();
    }
          
}
    
    
    
    

?>