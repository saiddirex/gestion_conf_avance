              
                 
       		    <div class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse text-center">
            <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="?page=home">Accueil <span class="caret"></span></a>
                    </li>
                    
                          <li class="sub-menu">
                        <a href="?page=showCalendrierPeriode">Affichage par période<span class="caret"></span></a>
                    </li>  
            </ul>
        </div>
    </div>
</div>
	</br>
       
       
       
       
       
          
       
            
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
	<th>Ville</th>
	
     
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
		    <td><?= $c['ville']?></td>
			   
      
        <td nowrap>
          <div class="row">
            <div class="col-md-5">
              <a href=<?= "?page=showConfPrint&show=".$c['id_conference'] ?>><span class="glyphicon glyphicon-th-list"></span> Afficher </a>
            </div>
		     <div class="col-md-5">
              <?php echo '<a href="'.$c['site_web'].'">' ;?><span class="glyphicon glyphicon-globe"></span> Voir site web </a>
			</div>
          </div>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
