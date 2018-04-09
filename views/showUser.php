<h2><center><strong>Informations sur le membre</strong></center></h2><br><br>
<div class="form-group">
  <input type="text" name="login"readonly tabindex="1" class="form-control" value="<?= $membre['login']?>"  placeholder="Utilisateur" >
</div>
<div class="form-group">
  <input type="text" name="mdp" readonly tabindex="2" class="form-control" value="********"  placeholder="Mot de passe">
</div>
<div class="form-group">
  <input type="text" name="nom" readonly tabindex="3" class="form-control" value="<?= $membre['nom']?>"  placeholder="Nom">
</div>
<div class="form-group">
  <input type="text" name="prenom" readonly tabindex="4" class="form-control" value="<?= $membre['prenom']?>" placeholder="Prénom">
</div>


<div class="form-group">
  <input type="email" name="email" readonly tabindex="5" class="form-control" value="<?= $membre['email']?>" placeholder="E-mail">
</div>
<div class="form-group">
  <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
  name="tel" tabindex="6" readonly class="form-control" value="<?= $membre['tel']?>" placeholder="Téléphone" >
</div>
