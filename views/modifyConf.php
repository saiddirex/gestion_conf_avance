  <?php if ($succes == true): ?>
                <div class="form-group">
                  <div class="alert alert-success">  
                    <strong>Modifications effectuées avec succès</strong>
                  </div>
                </div>
              <?php endif; ?>
              
                <?php if ($error == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">  
                    <strong>Veuillez saisir tous les champs indiqués par (*)</strong>
                  </div>
                </div>
              <?php endif; ?>


<form  method="post" role="form">
  <div class="form-group">
    <input type="text" name="theme" tabindex="1" class="form-control" placeholder="Thème (*)" value = "<?=$c['theme']?>" >
  </div>
  <div class="form-group">
    <input id="date" type="text" name="date_debut" tabindex="2" class="form-control" placeholder="Date début (*)"  value = "<?=$c['date_debut']?>">
  </div>
    <div class="form-group">
    <input id="date2" type="text" name="date_fin" tabindex="3" class="form-control" placeholder="Date fin (*)"  value = "<?=$c['date_fin']?>">
  </div>
  <div class="form-group">
    <input type="text" pattern="[a-zA-Z0-9\s]+" title="le lieu doit comporter uniquement des lettres et des chiffres" name="lieu" tabindex="4" class="form-control" placeholder="Lieu (*)"  value = "<?=$c['lieu']?>">
  </div>
    <div class="form-group">
    <input type="text" pattern="[a-zA-Z0-9\s]+" title="la ville doit comporter uniquement des lettres et des chiffres" name="ville" tabindex="5" class="form-control" placeholder="Ville (*)"  value = "<?=$c['ville']?>">
  </div>
      <div class="form-group">
    <input type="text" pattern="[a-zA-Z0-9\s]+" title="le pays doit comporter uniquement des lettres et des chiffres" name="pays" tabindex="6" class="form-control" placeholder="Pays (*)"  value = "<?=$c['pays']?>">
  </div>
      
      
       <div class="form-group">
                <input type="url" name="site_web" tabindex="7" class="form-control" placeholder="Site web (*)"    value = "<?=$c['site_web']?>"            >
              </div>
      
  <div class="form-group">
    <textarea name="description" tabindex="8"  rows="10" class="form-control" placeholder="Description"> <?=$c['description']?></textarea>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <input type="submit" name="modify-submit"  tabindex="9" class="form-control btn btn-login" value="Modifier">
      </div>
    </div>
  </div>
</form>
