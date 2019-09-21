		 <section class="contenu listeArtiste">
            <section class="oeuvres flex wrap">
						<?php
						foreach ($aData as $cle => $artiste) {
							extract($artiste);
							?>
							<section class="artiste carte">
			                    <header class="">
			                        <h2 class="nom"><?php 
                              if(isset($Nom) && $Nom!=""){
                                echo $Nom .", ". $Prenom;
                            }
                            else
                            {
                                echo $NomCollectif;
                            }
                                
                                
                                        ?>
                                        </h2> 
			                    </header>
			                    <footer class="barre-action">
								<a class="ouvrir-oeuvre" href="artiste/<?php echo $id_artiste ?>" >En savoir plus...</a>	
								
			                    </footer>
			                </section>
							<?php
						}
						?>
					</section>
				
			</section>