 <h2><center><strong>Modifier données conférencier</strong></center></h2><br><br>
<form  method="post" role="form">
    <div class="form-group">  
    <input type="text" pattern="[a-zA-Z\s]+" title="le nom doit comporter uniquement des lettres" name="nom" tabindex="1" class="form-control" placeholder="Nom" value = "<?=$c['nom']?>" >
  </div>
  <div class="form-group">
    <input type="text" pattern="[a-zA-Z\s]+" title="le prénom doit comporter uniquement des lettres" name="prenom" tabindex="2" class="form-control" placeholder="Prenom" value = "<?=$c['prenom']?>" >
  </div>
  
    <div class="form-group">
    <input type="text" pattern="[a-zA-Z\s]+" title="la fonction doit comporter uniquement des lettres" name="fonction" tabindex="3" class="form-control" placeholder="Fonction" value = "<?=$c['fonction']?>" >
  </div>
  
  <div class="form-group">
    <input type="email" name="email" tabindex="4" class="form-control" placeholder="E-mail" value = "<?=$c['email']?>" >
  </div>
  
  <div class="form-group">
    <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
                title ="exemple : +212600000000" name="tel" tabindex="5" class="form-control" placeholder="Téléphone" value = "<?=$c['tel']?>" >
  </div>
  <div class="form-group">
    <input type="url" title= "exemple : http//www.exemple.com" name="site_web"  tabindex="6" class="form-control" placeholder="Site_web" value = "<?=$c['site_web']?>" >
  </div>


  <div class="form-group">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <input type="submit" name="modifier-submit"  tabindex="7" class="form-control btn btn-login" value="Modifier">
      </div>
    </div>
  </div>
</form>
