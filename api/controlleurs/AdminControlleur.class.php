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

 
 
class AdminControlleur extends Controlleur 
{
	
	public function getAction(Requete $requete)
	{
        echo'<br><br><br>';
		if(isset($requete->url_elements[0]) && $requete->url_elements[0]=='menu')	// Normalement l'id de l'artiste 
		$res = array();
		//var_dump($requete->url_elements);
		/*if(isset($requete->url_elements[0]) && $requete->url_elements[0]=='menu')	// Normalement l'id de l'artiste 
		{
            echo 'MENU ADMIN';
			//$oVue = new AdminVue();
			$oVue = new MenuAdminVue();//test
    		$oVue->afficheHead();
			$oVue->afficheEntete();
<<<<<<< HEAD
			$oVue->afficheMenuAdmin();
			$oVue->affichePied();

			
        } 
//        if(isset($requete->url_elements[0]) && $requete->url_elements[0]=='oeuvres')	// Normalement l'id de l'artiste 
//		{
//            echo 'OEUVRES';
//            $oOAC = new OeuvreControlleur();
//            $oOAC->getAction(Requete $requete);
//    		$oVue->afficheEntete();
//    		$oVue->afficheOeuvres($res);
//    		$oVue->affichePied();
//        } 
			$oVue->affichePied();			
		}
<<<<<<< HEAD
		if
=======
			$oVue->afficheVueAdmin();			
    		$oVue->affichePied();
        } 
>>>>>>> 640b235101dfc9f575e691ccd6af02d7ef207572
=======
>>>>>>> baa5af8dc6ad24ed39da51ceb92ebbf25f65f69c
        else if(isset($requete->url_elements[0]) && $requete->url_elements[0]=='')	// Normalement l'id de l'artiste 
		{
            echo 'ACCUEIL ADMIN';
            $oVue = new AdminVue();
    		$oVue->afficheHead();
    		$oVue->afficheEntete();
            $oVue->afficheConnexion();	
			$oVue->affichePied();
			
		} 
		
        else if(isset($requete->url_elements[0])){
//            var_dump($requete);
            echo 'PAGE ADMIN NON EXISTANTE';
        }
        else 	// Accueil Admin (connection)
        {
    		$oVue = new AdminVue();
    		$oVue->afficheEntete();
    		$oVue->afficheConnexion();				
    		$oVue->affichePied();			
		}*/
		
		if(!isset($requete->url_elements[0])){
			echo 'PAGE ADMIN NON EXISTANTE2';
		}
		else if ($requete->url_elements[0] == '')
		{
			// Accueil Admin (connection)
			//echo 'ACCUEIL ADMIN';
            $oVue = new AdminVue();
			//$oVue->afficheEntete();
			$oVue->afficheEnteteConnexion();
            $oVue->afficheConnexion();	
			$oVue->affichePied();

		}
		else
		{
			/* Instanciation du controlleur */
            $nomControlleur = ucfirst($requete->url_elements[0]) . 'AdminControlleur';
            //var_dump($nomControlleur);
            if (class_exists($nomControlleur)) {
                $oControlleur = new $nomControlleur();
                $nomAction = strtolower($requete->verbe) . 'Action';
                $oControlleur->$nomAction($requete);
            }else{
				echo 'PAGE ADMIN NON EXISTANTE';
			}
		}

	}
    
    
	public function postAction(){        
        if(!empty($_POST)){

  		    $authentification = new Authentification();
            $retour = $authentification->verification($_POST['login'], $_POST['mdp']);
            if($retour == true){ //login et mdp sont corrects
//                echo 'true';
                //connecter la personne
                $_SESSION['login'] = $_POST['login'];
//                echo $_SESSION['login'];
//                die;
                
                //redirection vers page privee
                header("location:http://localhost/art-public-mtl/api/admin/menu");
            }else{
//                $_SESSION['login'] = '';
                session_destroy();
//                echo 'false';
                header("location:http://localhost/art-public-mtl/api/admin");
                exit();
            }
          
        }
    }
}
?>