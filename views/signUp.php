
	</br>
   <h3><center><strong>Bienvenue sur notre espace membres</strong></center></h3>
   </br></br>
   
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-login">
      <div class="panel-heading">
        <div class="row">

          <div class="col-xs-6">
            <a class="active" id="register-form-link">Formulaire d'inscription</a>
          </div>
        </div>
        <hr>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form id="register-form" method="post" role="form" style="display: block;">
                 
                <?php if ($error22 == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong></strong> vous avez saisi des mots de passe différents.
                  </div>
                </div>
              <?php endif; ?>
              <?php if ($error33 == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong></strong> ce login existe déjà.
                  </div>
                </div>
              <?php endif; ?>
              <?php if ($error44 == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong></strong> veuillez remplir tous les champs indiqués par (*).
                  </div>
                </div>
              <?php endif; ?>
			      <?php if ($error55 == true): ?>
                <div class="form-group">
                  <div class="alert alert-danger">
                    <strong></strong> veuillez saisir un mot de passe de plus de 8 caractères.
                  </div>
                </div>
              <?php endif; ?>
      

             <div class="form-group">
                <input type="text" pattern="[a-zA-Z0-9]+" title="le login doit comporter uniquement des lettres et des chiffres" name="login" tabindex="1" class="form-control" placeholder="Utilisateur (*)"  value = "<?=$buffer['login']?>" >
              </div>
              <div class="form-group">
                <input type="password" pattern="^(?=.*\d)(?=.*[a-zA-Z])(?!.*\s).*$"  title="mot de passe doit comporter des lettres et des chiffres" name="mdp" tabindex="2" class="form-control" placeholder="Mot de passe (*)">
              </div>
              <div class="form-group">
                <input type="password" pattern="^(?=.*\d)(?=.*[a-zA-Z])(?!.*\s).*$"  title="mot de passe doit comporter des lettres et des chiffres" name="confirm-mdp" tabindex="3" class="form-control" placeholder="Confirmation du mot de passe (*)">
              </div>
              <div class="form-group">
                <input type="text" pattern="[a-zA-Z\s]+" title="le nom doit comporter uniquement des lettres" name="nom" tabindex="4" class="form-control" placeholder="Nom (*)"   value = "<?=$buffer['nom']?>"   >
              </div>
              <div class="form-group">
                <input type="text" pattern="[a-zA-Z\s]+" title="le prénom doit comporter uniquement des lettres" name="prenom" tabindex="5" class="form-control" placeholder="Prénom (*)"       value = "<?=$buffer['prenom']?>"      >
              </div>             
                   
           
              <div class="form-group">
                <input type="email" name="email" tabindex="6" class="form-control" placeholder="E-mail (*)"       value = "<?=$buffer['email']?>"         >
              </div>
              <div class="form-group">
                <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
                title ="exemple : +212600000000" name="tel" tabindex="7" class="form-control" placeholder="Téléphone (*)"    value = "<?=$buffer['tel']?>"        >
              </div>
         
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" name="register-submit"  tabindex="8" class="form-control btn btn-register" value="Valider">
                  </div>
                </div>
              </div>
              
              
                           
                    <div class="form-group">
                <div class="row">
        
                  <div class="col-sm-12 col-sm-offset-8">
                    <a>(*) : champ obligatoire</a>
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

	
			  </br></br>
			  </br></br>
	          <strong><center><p class="para">
			 © 2016 Tout droit réservé. Ecole Nationale Supérieure d'Informatique et d'Analyse des Systèmes.  
			  </p></center></center></strong>
 


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
<script type="text/javascript">
$(function() {
  $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});
</script>

