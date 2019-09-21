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