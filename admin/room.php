<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAHARA AUBERGE</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Basculer la navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Profil de l'utilisateur</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Paramètres</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Se déconnecter</a>
                        </li>
                    </ul>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Statut des chambres</a>
                    </li>
					<li>
                        <a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Ajouter une pièce</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-desktop"></i> Supprimer la pièce</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NOUVELLE PIÈCE <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            AJOUTER UNE NOUVELLE CHAMBRE
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Type de pièce *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Double">Double</option>
                                                <option value="Jumeaux">Jumeaux</option>
												<option value="Triple">Triple</option>
												<option value="Quad">Quad</option>
                                            </select>
                              </div>
							  
								<div class="form-group">
                                            <label>Couleur de pièce</label>
                                            <input type="text" name="couleur" class="form-control" required>
                               </div>
							 <input type="submit" name="add" value="Ajouter une nouvelle" class="btn btn-primary"> 
							</form>
							<?php
							 include('db.php');
							 if(isset($_POST['add']))
							 {
										$room = $_POST['troom'];
										$couleur = $_POST['couleur'];
										$place = 'Free';
										
										$check="SELECT * FROM room WHERE type = '$room' AND couleur = '$couleur'";
										$rs = mysqli_query($con,$check);
										$data = mysqli_fetch_array($rs, MYSQLI_NUM);
										if($data[0] > 1) {
											echo "<script type='text/javascript'> alert('Chambre déjà existante')</script>";
											
										}

										else
										{
							 
										
										$sql ="INSERT INTO `room`( `type`, `couleur`,`place`) VALUES ('$room','$couleur','$place')" ;
										if(mysqli_query($con,$sql))
										{
										 echo '<script>alert("Nouvelle salle ajoutée") </script>' ;
										}else {
											echo '<script>alert("Pardon ! Vérifiez le système") </script>' ;
										}
							 }
							}
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            INFORMATIONS SUR LES CHAMBRES
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
						$sql = "select * from room limit 0,10";
						$re = mysqli_query($con,$sql)
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Identifiant de la chambre</th>
                                            <th>Type de chambre</th>
											<th>Couleur de chambre</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['id'];
											if($id % 2 == 0) 
											{
												echo "<tr class=odd gradeX>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['couleur']."</th>
												</tr>";
											}
											else
											{
												echo"<tr class=even gradeC>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['couleur']."</th>
												</tr>";
											
											}
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    
                       
                            
							  
							 
							 
							  
							  
							   
                       </div>
                        
                    </div>
                </div>
                
               
            </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
