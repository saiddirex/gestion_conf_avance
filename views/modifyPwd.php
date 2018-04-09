
 <h2><center><strong>Modifier mon mot de passe</strong></center></h2><br><br>
 
    <?php if ($error == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong></strong> vous avez saisi des mots de passe différents.
                  </div>
                </div>
              <?php endif; ?>
              
                  <?php if ($error2 == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong></strong> veuillez remplir tous les champs.
                  </div>
                </div>
              <?php endif; ?>
              
                          <?php if ($error3 == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong></strong> ancien mot de passe incorrect.
                  </div>
                </div>
              <?php endif; ?>
              
                          <?php if ($error4 == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong></strong> veuillez remplir tous les champs.
                  </div>
                </div>
              <?php endif; ?>
              
                           <?php if ($error5 == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong></strong> veuillez saisir un mot de passe de plus de 8 caractères.
                  </div>
                </div>
              <?php endif; ?>
              
                <?php if ($error6 == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong>ERREUR !</strong> nombre de tentatives de changement de mot de passe dépassé.
                  </div>
                </div>
              <?php endif; ?>
              
                  
                <?php if ($succes == true): ?>
                <div class="form-group">
                  <div class="alert alert-success">
                    <strong>mot de passe modifé avec succès.
                  </div>
                </div>
              <?php endif; ?>
              
              

<form  method="post" role="form">
  <div class="form-group"><h4>Ancien mot de passe</h4>
  <input type="password" name="old-password" tabindex="1" class="form-control" value = "" >
  </div>
  
   <div class="form-group"><h4>Nouveau mot de passe</h4>
  <input type="password" pattern="^(?=.*\d)(?=.*[a-zA-Z])(?!.*\s).*$"  title="mot de passe doit comporter des lettres et des chiffres" name="password" tabindex="2" class="form-control" value = "" >
  </div>
   
      <div class="form-group"><h4>Confirmation</h4>
  <input type="password" pattern="^(?=.*\d)(?=.*[a-zA-Z])(?!.*\s).*$"  title="mot de passe doit comporter des lettres et des chiffres" name="confirm-password" tabindex="3" class="form-control" value = "" >
  </div>
  

  <div class="form-group">
  <div class="form-group">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <input type="submit" name="modifier-submit"  tabindex="4" class="form-control btn btn-login" value="Modifier">
      </div>
    </div>
  </div>
</form>
