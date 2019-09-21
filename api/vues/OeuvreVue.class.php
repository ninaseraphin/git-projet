<?php
class OeuvreVue {
/**
	 * Affiche le détails d'une oeuvre
	 * @access public
	 * @return void
	 */
	public function afficheOeuvre($aData = Array()) {
		extract($aData);
		?>
		 <section class="contenu uneOeuvre flex flex-col">
		 	<section class="retour"><a href="/art-public-mtl/api/oeuvre"> < Retour  </a></section>
            <section class="oeuvre flex wrap">
				<h1 class="contenu unOeuvre ">Exploring the desert</h1>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                <header class="image dummy">
                	<img src="/art-public-mtl/img/placeholder_640_480.jpg" />
                    <h2 class="titre"><?php echo $Titre?></h2>
                </header>

				 <div class="systeme_onglets">
					<div class="onglets">
						<span class="onglet_0 onglet" id="onglet_details" onclick="javascript:change_onglet('details');">D&eacute;tails</span>
						<span class="onglet_0 onglet" id="onglet_artiste" onclick="javascript:change_onglet('artiste');">Artiste</span>
						<span class="onglet_0 onglet" id="onglet_carte" onclick="javascript:change_onglet('carte');">Carte</span>
					</div>
					<div class="contenu_onglets">
						<div class="contenu_onglet" id="contenu_onglet_details">
							<h1></h1>
							<table>
								<tr>
									<td>Cat&eacute;gorie</td>
									<td>Peinture</td>
								</tr>
								<tr>
									<td>Mat&eacute;riaux</td>
									<td>Peinture</td>
								</tr>
								<tr>
									<td>Techniques</td>
									<td>Oeuvre peinte</td>
								</tr>
								<tr>
									<td>Date de cr&eacute;ation</td>
									<td>2018</td>
								</tr>
								<tr>
									<td>Date d'acquisition</td>
									<td>2018</td>
								</tr>

							</table>
							
						</div>
						<div class="contenu_onglet" id="contenu_onglet_artiste">
							<h1></h1>
							<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
							<a href="" >Plus d'information ></a>
						
						</div>
						<div class="contenu_onglet" id="contenu_onglet_Carte">
							<h1></h1>
							
						</div>
					</div>
				</div>
                        
                <section class="texte">
					<p class="description"><?php echo $Description ?></p>
						<?php
           
						foreach($Artistes as $artiste){
							extract($artiste);
							?>
							<p class="auteur">Par : <a href="/art-public-mtl/api/artiste/<?php echo $id_artiste ?>"><?php 
                                    if(isset($Nom) && $Nom!=""){
                                echo $Nom .", ". $Prenom;
                            
                            }
                            else
                            {
                                echo $NomCollectif;
                            
                            }
                                
                                
                                        ?></a></p>
						<?php
						}

						?>
                   
			    	<p class="arrondissement"><?php echo $Arrondissement?></p>
                </section>
                
            </section>

        </section>
        
							
			
		<?php
		
	}
}
    

