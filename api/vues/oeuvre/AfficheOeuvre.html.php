	 <section class="contenu listeOeuvres">
         	<section class="recherche"></section>
            <section class="oeuvres flex wrap">
						<?php
        
//        echo '<pre>';
//print_r($aData);
//echo '</pre>';
						foreach ($aData as $cle => $oeuvre) {
							extract($oeuvre);
							?>
							<section class="oeuvre carte">
			                    <header class="image dummy">
			                        <h2 class="titre"><?php echo $Titre?></h2> 
			                    </header>
			                    <section class="texte">
			                        <p class="description">
			                            <?php echo $Description ?> 
									</p>
									<?php 
									foreach($Artistes as $artiste){
										extract($artiste);
										?>
										<p class="auteur">Par : <a href="artiste/<?php echo $id_artiste ?>">
                           <?php 
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
			                    <footer class="barre-action">
								<a class="ouvrir-oeuvre" href="oeuvre/<?php echo $id ?>" data-link="/artPublic/api/oeuvre/<?php echo $id ?>/" data-id="<?php echo $id ?>">En savoir plus...</a>	
								<!--<button class="ouvrir-oeuvre" data-link="/artPublic/api/oeuvre/<?php echo $id_oeuvre ?>/" data-id="<?php echo $id_oeuvre ?>">En savoir plus...</button>-->
			                    </footer>
			                </section>
							
							
							
							
							
							<?php
							/*
							 <section class="oeuvre">
								<h2 class="titre"><a href="/artPublic/api/oeuvre/<?php echo $oeuvre['id'] ?>"><?php echo $oeuvre['Titre']?></a></h2>	
							</section>
							 */
						}
						?>
					</section>
				
			</section>