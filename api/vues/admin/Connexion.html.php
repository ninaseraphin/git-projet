
            <h2>ADMINISTRATEUR</h2><br>
            <form id='connection' action="?controller=authentification&action=connexionPost" method="post">	
                <div>
                    <label for="name"><p class="pConnexion">Nom d'utilisateur</p></label>
                    <input class = "inputText" type="text" id="name" name="login">
                </div><br><br>
                <div>
                    <label for="mdp"><p class="pConnexion">Mot de passe</p></label>
                    <input class = "inputText" type="password" id="mdp" name="mdp">
                </div><br><br>
                <div>
                    <input class = "btnConnexion" type="submit" id="envoyer" value="Connexion">
                </div>		
            </form>
		</main	
	