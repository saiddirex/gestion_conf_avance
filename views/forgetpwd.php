


		    <div class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse text-center">
            <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="?page=home">Accueil <span class="caret"></span></a>
                    </li>     
            </ul>
        </div>
    </div>
</div>
	</br>

 <h2><center><strong>Mot de passe oublié</strong></center></h2><br><br>
 
 
      <?php if ($error == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong>ERREUR !</strong> Cette adresse mail ne correspond à aucun membre.
                  </div>
                </div>
              <?php endif; ?>
              
       <?php if ($sent == true): ?>
                <div class="form-group">
                  <div class="alert alert-success">  
                    Un e-mail a été envoyé à votre adresse.
                  </div>
                </div>
              <?php endif; ?>
              
              
 
 
  </br><h4><strong>Votre adresse mail :</strong></h4></br>

<form  method="post" role="form">
  <div class="form-group">
  <input type="email" name="email" tabindex="1" class="form-control" value = "" >
  </div>
  
      <div class="col-sm-4 col-sm-offset-4">
        <input type="submit" name="valider-submit"  tabindex="3" class="form-control btn btn-login" value="Valider">
      </div>
 

</form>
