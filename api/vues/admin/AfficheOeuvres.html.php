		?>
		 <section class="contenu listeOeuvres">
         	<section class="recherche"></section>
            <section class="oeuvres flex flex-col">
						<?php
						foreach ($aData as $cle => $oeuvre) {
							extract($oeuvre);
                           //echo"test";
							?>
							<section class="oeuvre flex flex-row">
			                    <span class="titre"><?php echo $Titre ?> - </span>
			                    <span class ="description"> <?php echo $Description ?> - </span>
			                    <span class="arrondissement"><?php echo $Arrondissement ?></span>
		                    <span class="action flex-droite"><a href="/art-public-mtl/api/admin/oeuvre/modifier/<?php echo $id_oeuvre ?>">[Modifier l'oeuvre]</a></span>
		                    <span class="action flex-droite"><a href="/art-public-mtl/api/admin/oeuvre/supprimer/<?php echo $id_oeuvre ?>">[Supprimer]</a></span>
			                    
			                </section>

							<?php
						}
						?>
					</section>
				
			</section>
			
		<?php