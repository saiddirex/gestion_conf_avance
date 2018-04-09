
            
 
 
 
 
 
 
 <div class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse text-center">
            <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="?page=home">Accueil <span class="caret"></span></a>
              
                    </li>
                
               
                
                
                  <li class="sub-menu">
                        <a href=<?= "?page=showProfil&modifier=".$user['id_membre'] ?>>Afficher profil<span class="caret"></span></a>
                    
                    </li>
                    <li class="sub-menu">
                        <a href=<?= "?page=modifierProfil&modifier=".$user['id_membre'] ?>>Modifier profil<span class="caret"></span></a>
                   
                    </li>
                
                  
                
                    <li class="sub-menu">
                        <a href=<?= "?page=modifierPwd&modifier=".$user['id_membre'] ?>>Modifier password<span class="caret"></span></a>
                  
                    </li>
					
					
			
			                          <li class="sub-menu">
                        <a href="?page=showCalendrierPeriode">Affichage par période<span class="caret"></span></a>
                    </li>
									                    <li class="sub-menu">
                        <a href=<?= "?page=afficherConferencesFav&show=".$user['id_membre'] ?>>Mes conférences favorites<span class="caret"></span></a>
						
						
                    </li>  
			   
                 
                
            
            </ul>
        </div>
    </div>
</div>
 
 
 
 
 
 
      
        
        </br></br>
        
        <h3><center><strong>Calendier des conférences</strong></center></h3><br>
                   </br></br>

<table id="table" class="table table-condensed table-hover">
  <thead>
    <tr>
  
      <th>Thème</th>
      <th>Date début</th>
	    <th>Date fin</th>
      <th>Etablissement</th>


     
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php foreach ($conf as $c): ?>
    
 
  
  
        <tr>
        
        <td><?= $c['theme']?></td>
        <td><?= $c['date_debut']?></td>
		       <td><?= $c['date_fin']?></td>
        <td><?= $c['lieu']?></td>
		
		
      
        
        
      
        
        
        <td nowrap>
          <div class="row">
            <div class="col-md-3">
              <a href=<?= "?page=showConfPrint&show=".$c['id_conference'] ?>><span class="glyphicon glyphicon-th-list"></span> Afficher </a>
            </div>
		  
		   <div class="col-md-3">
              <?php echo '<a href="'.$c['site_web'].'">' ;?><span class="glyphicon glyphicon-globe"></span> Web </a>
			</div>
		   
		      <div class="col-md-3">
              <a href=<?= "?page=designerConferenceFav&idc=".$c['id_conference']."&idm=".$user['id_membre'] ?>><span class="glyphicon glyphicon-heart"></span> Favori </a>
			</div>
		   
		   
          </div>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>