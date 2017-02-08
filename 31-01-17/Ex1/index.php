<form action="traitement.php" method="POST" id="contact">
    <fieldset>
        <legend>Vos coordonnées</legend>
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email">
        </div>
    </fieldset>

    <div><input type="submit" name="send" value="Envoyer le formulaire"></div>
</form>