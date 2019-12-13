<form action="#" method="post">
  <fieldset>
    <legend>Coucou</legend>
  <div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"/>
  </div>
  <div>
    <label for="prenom">Prénom : </label>
    <input type="text" name="prenom" id="prenom" />
  </div>
  <div>
    <label for="email">Email : </label>
    <input type="email" name="email" id="email" />
  </div>
  <div>
    <label for="msg">Message : </label>
    <textarea name="msg" id="msg"><?=$msg ?></textarea>
  </div>
  <div>
    <input type="submit" value="Envoyer" />
  </div>
  <input type="hidden" value="Formulaire" />
</fieldset>
</form>
