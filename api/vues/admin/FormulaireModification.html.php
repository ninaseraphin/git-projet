	?>

            <form id='modification' action="?controller=authentification&action=connexionPost" method="post">	
                <div>
                    <label for="name">ID</label>
                    <input type="text" name="ID" value="ton_pseudo" readonly/>
                </div>
                <div>
                    <label for="titre">Titre</label>
                    <input type="text" value="" id="Titre">
                </div>                
                <div>
                    <label for="titre">NomCollection</label>
                    <input type="text" value="" id="NomCollection">
                </div>                
                <div>
                    <label for="titre">NomCollectionAng</label>
                    <input type="text" value="" id="NomCollectionAng">
                </div>                
                <div>
                    <label for="titre">Technique</label>
                    <input type="text" value="" id="Technique">
                </div>                
                <div>
                    <label for="titre">TechniqueAng</label>
                    <input type="text" value="" id="TechniqueAng">
                </div>                
                <div>
                    <label for="titre">Dimensions</label>
                    <input type="text" value="" id="Dimensions" readonly>
                </div>                
                <div>
                    <label for="titre">Arrondissement</label>
                    <input type="text" value="" id="Arrondissement">
                </div>
                <div>
                    <label for="titre">Batiment</label>
                    <input type="text" value="" id="Batiment">
                </div>
                <div>
                    <label for="titre">AdresseCivique</label>
                    <input type="text" value="" id="AdresseCivique">
                </div>
                <div>
                    <label for="titre">CoordonneeLatitude</label>
                    <input type="text" value="" id="CoordonneeLatitude">
                </div>
                <div>
                    <label for="titre">CoordonneeLongitude</label>
                    <input type="text" value="" id="CoordonneeLongitude">
                </div>
                <div>
                    <label for="titre">dateCreation</label>
                    <input type="text" value="" id="dateCreation">
                </div>
                <div>
                    <input type="submit" id="envoyer" value="Modifier">
                </div>		
            </form>
        

		<?php