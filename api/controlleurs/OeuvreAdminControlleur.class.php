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

 
 
class OeuvreAdminControlleur extends OeuvreControlleur 
{
	
	// GET : 
	// 		/oeuvre/ - Liste des oeuvres
	// 		/oeuvre/{id}/ - Une oeuvre
	// 		/oeuvre/?q=nom,arrond,etc&valeur=chaineDeRecherche
    //      /oeuvre/modifier/id
    //      /oeuvre/supprimer/id
	
	public function getAction(Requete $requete)
	{
//        echo 'getOeuvres';
		$res = array();
		//var_dump($requete->url_elements);
		if(isset($requete->url_elements[0]) && is_numeric($requete->url_elements[0]))	// Normalement l'id de l'oeuvre 
		{
			echo"es numerico";
            $id_oeuvre = (int)$requete->url_elements[0];
            
            $res = $this->getOeuvre($id_oeuvre);
            
        } 
		else if(isset($requete->url_elements[1]) && $requete->url_elements[1] == "miseajour")
		{
			$res = $this->mettreAJour();
            echo "MISE A JOUR";
		}
        else if(isset($requete->url_elements[1]) && $requete->url_elements[1] == "modifier")
        {
            echo "MODIFICATION";
        $id=$requete->url_elements[2];
            
            $oVue = new AdminVue();
            $oVue->afficheFormulaireModification($id);
        }
        else 	// Liste des oeuvres
        {
        	$res = $this->getListeOeuvre();
			
        }
		
		if(isset($_GET['json']))
		{
			echo json_encode($res);	
		}
		else
		{			
			
			$oVue = new AdminVue();
			$oVue->afficheEntete();
			if(isset($requete->url_elements[0]) && is_numeric($requete->url_elements[0]))
			{
				//var_dump($res);
                //die;
				$oVue->afficheOeuvre($res);
                
			}
			else
			{
				$oVue->afficheOeuvres($res);
			}	
			
			$oVue->affichePied();
			
		}		
		
		
	}
	
	
	public function postAction(Requete $requete)
	{
		$res = array();
        //var_dump($requete->url_elements);
        //var_dump($requete);

		if(isset($requete->url_elements[0]) && is_numeric($requete->url_elements[0]))	// Normalement l'id de l'oeuvre 
		{
            $id_oeuvre = (int)$requete->url_elements[0];
            $parametres=array();
            //tableau dans lequel on met toutes les variables POST
            foreach ( $_POST as $post => $val )  {
                $parametres["$post"] = $val;
            }

            //var_dump($requete->parametres);
            //echo $id_oeuvre;

            $res = $this->modifOeuvre($id_oeuvre, $parametres);
            
        } 
		
		if(isset($_GET['json']))
		{
			echo json_encode($res);	
        
		}
        //rediriger vers la page des oeuvres
        header("Location: ../oeuvre");
        
		
        
	}
	
	protected function modifOeuvre($id_oeuvre, $param)
	{
		$oOeuvre = new Oeuvre();
		$aOeuvre = $oOeuvre->modifOeuvre($id_oeuvre, $param);
		
		return $aOeuvre;
	}
	
	/**
	 * Fait l'importation et la mise à jour des oeuvres et des artistes 
	 * @access private
	 * @TODO Ajouter la mise à jour des artistes
	 */
	private function mettreAJour()
	{
		$oImportation = new Importation();
		$oImportation->importerOeuvre();
		$oImportation->mettreAJour();
		
	}
	
	private function getImages($id_oeuvre)
	{
		$oImportation = new Importation();
		$aImage = $oImportation->telechargementImages($id_oeuvre);
		
	}
	
}
?>