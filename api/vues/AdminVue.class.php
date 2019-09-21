<?php
/**
 * Class Vue
 * Modèle de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.1
 * @update 2013-12-11
 * @update 2016-01-22 : Adaptation du code aux standards de codage du département de TIM
 * @license MIT
 * @license http://opensource.org/licenses/MIT
 * 
 */


class AdminVue {

/**
	 * Affiche le head html
	 * @access public
	 * @return void
	 */
	public function afficheEntete() {
        require("entetepied/enteteAdmin.html.php");
		
	}
	public function afficheEnteteConnexion() {
        require("entetepied/enteteAdminConnexion.html.php");
		
	}

	/**
	 * Affiche entetes
	 * @access public
	 * @return void
	 */


	/**
	 * Affiche le pied de page
	 * @access public
	 * @return void
	 */
	public function affichePied() {
 
		require("entetepied/piedAdmin.html.php");
	}
	

	
	/**
	 * Affiche la liste des oeuvres
	 * @access public
	 * @return void
	 */
	public function afficheOeuvres($aData = Array()) {
		
require("admin/AfficheOeuvres.html.php");
		
	}
    /**
	 * Affiche une oeuvre
	 * @access public
	 * @return void
	 */
	public function afficheOeuvre($aData = Array()) {
		
		?>
		 <section class="contenu listeOeuvres">
         	<section class="recherche"></section>
            <section class="oeuvres flex flex-col">
						<?php
                        

							extract($aData);
                            
							?>                        
                            
                
							<section class="oeuvre flex flex-row">
                                <form method="post" action="">
                                
			                    <p class="titre" name="Titre" >Titre : <?php echo $Titre ?></p>

                                <p class="arrondissement" > Arrondissement : <?php echo $Arrondissement ?></p>
			                     Description : <input type="text" name="Description" class="description" value="<?php echo $Description ?>"><br>
			                    
			                     
			                    <input type="submit" value="Modifier">
			                    </form>
			                </section>

					</section>
				
			</section>
			
		<?php
		
	}

	public function afficheVueAdmin() {
		
		?>
		<section id='menuadmin'></section>	
			<section id='r1'>
				<fieldset id='oeuvres'>
					<legend>Oeuvres</legend>
					<a href="">Ajouter une oeuvre</a><br>
					<a href="">Modifier une oeuvre</a><br>
					<a href="">Effacer une oeuvre</a>
				</fieldset>
				<fieldset id='parcour'>
					<legend>Parcours</legend>
					<a href="">Modifier une parcours</a><br>
					<a href="">Ajouter une parcours</a>		
				</fieldset>
			</section>
			<section class='r2'>
				<fieldset id='utilisateur'>
					<legend>Utilisateurs</legend>
					<a href="">Ajouter une utilisateur</a><br>
					<a href="">Modifier une utilisateur</a><br>
					<a href="">Effacer une utilisateur</a>	
				</fieldset>
				<fieldset id='artiste'>
					<legend>Artistes</legend>
					<a href="">Modifier une artiste</a><br>
					<a href="">Effacer une utilisateurs</a>	
				</fieldset>
			</section>
		</section>	
		<?php
		
	}
    
	public function afficheConnexion() {
		
        require("admin/Connexion.html.php");
		
	}
    
    
    public function afficheFormulaireModification() {
		
	require("admin/FormulaireModification.html.php");
		
	}
    
	public function afficheDeconnection() {
		
		?>

            <form id='deconnection' action="?controller=deconnection&action=deconnectionPost" method="post">	
                <div>
                    <input type="submit" id="envoyer" value="Déconnection">
                </div>		
            </form>
			
		<?php
		
	}
	
	public function afficheMenuAdmin() { //location temporaire
		
		require("admin/MenuAdmin.html.php");
		
	}

}
?>