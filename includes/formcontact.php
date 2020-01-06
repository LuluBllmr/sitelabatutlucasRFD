<form action="index.php?page=contact" method="post">
  <fieldset>
    <legend>Veuillez remplir les champs de renseignements:</legend>
  <div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"/>
  </div>
  <div>
    <label for="prenom">Prénom : </label>
    <input type="text" name="prenom" id="prenom" />
  </div>
  <div>
    <label for="mail">Email : </label>
    <input type="mail" name="mail" id="mail" />
  </div>
  <div>
    <label for="message">Message : </label>
    <textarea name="message" id="message"><?=$msg ?></textarea>
  </div>
  <div>
    <input type="submit" value="Envoyer" />
  </div>
  <input type="hidden" value="formcontact" />
</fieldset>
</form>
