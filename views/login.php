</br>


<h4>
  <center><strong>Bienvenue sur notre espace membres</strong></center>
</h4>
<h4>
  <center>Si vous êtes membre saisissez votre login et votre mot de passe</center>
</h4>
<h4>
  <center>sinon, appuyer sur <strong>s'inscrire</strong></center>
</h4>
<br><br>


<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-login">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-6">

            <a class="active" id="login-form-link"></a>



            <a href="?page=signUp" class="active" id="login-form-link">S'inscrire</a>


          </div>

        </div>
        <hr>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form id="login-form" method="post" role="form" style="display: block;">
              <?php if ($error11 == true): ?>
              <div class="form-group">
                <div class="alert alert-danger">
                  <strong></strong> nom d'utilisateur et/ou mot de passe incorrect.
                </div>
              </div>
              <?php endif; ?>

              <?php if ($error22 == true): ?>
              <div class="form-group">
                <div class="alert alert-danger">
                  <strong></strong> veuillez saisir les deux champs.
                </div>
              </div>
              <?php endif; ?>


              <?php if ($error33 == true): ?>
              <div class="form-group">
                <div class="alert alert-danger">
                  <strong>ERREUR !</strong> nombre de tentatives d'authentification autorisées dépassé.
                </div>
              </div>
              <?php endif; ?>


              <div class="form-group">
                <input type="text" name="login" tabindex="1" class="form-control" placeholder="Utilisateur">
              </div>
              <div class="form-group">
                <input type="password" name="mdp" tabindex="2" class="form-control" placeholder="Mot de passe">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" name="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-12 col-sm-offset-8">
                    <a href="?page=forgetpwd">mot de passe oublié</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


</br>
</br>
</br>
</br>


<strong><center><p class="para">
			 © 2016 Tout droit réservé. Ecole Nationale Supérieure d'Informatique et d'Analyse des Systèmes.  
			  </p></center></center></strong>


<script type="text/javascript">
  $(function () {
    $('#login-form-link').click(function (e) {
      $("#login-form").delay(100).fadeIn(100);
      $("#register-form").fadeOut(100);
      $('#register-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });
    $('#register-form-link').click(function (e) {
      $("#register-form").delay(100).fadeIn(100);
      $("#login-form").fadeOut(100);
      $('#login-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });

  });
</script>
