<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from roombook where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$title = $row['Title'];
					$fname = $row['FName'];
					$lname = $row['LName'];
					$email = $row['Email'];
					$nat = $row['National'];
					$country = $row['Country'];
					$Phone = $row['Phone'];
					$troom = $row['TRoom'];
					$nroom = $row['NRoom'];
					$non = $row['NRoom'];
					$meal = $row['Meal'];
					$cin = $row['cin'];
					$cout = $row['cout'];
					$sta = $row['stat'];
					$days = $row['nodays'];
					
				
				
				}
					
					
				
		
	}
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrateur	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
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
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Statut</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> Lettres d'information</a>
                    </li>
					<li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Réservation de chambre</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Paiement</a>
                    </li>
					<li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Se déconnecter</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Réservation de chambre<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Confirmation de réservation
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Nom</th>
                                            <th><?php echo $title.' '.$fname.' '.$lname; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Nationalité </th>
                                            <th><?php echo $nat; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Pays </th>
                                            <th><?php echo $country;  ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Numéro de téléphone </th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Type de chambre</th>
                                            <th><?php echo $troom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No de la pièce </th>
                                            <th><?php echo $nroom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Plan de repas </th>
                                            <th><?php echo $meal; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Date d'arrivée </th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Date de départ</th>
                                            <th><?php echo $cout; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Nombre de jours</th>
                                            <th><?php echo $days; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Niveau d'état</th>
                                            <th><?php echo $sta; ?></th>
                                            
                                        </tr>
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Sélectionnez la conformation</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Conform">Se conformer</option>
															
															
														</select>
										 </div>
							<input type="submit" name="co" value="Se conformer" class="btn btn-success">
							
							</form>
                        </div>
                    </div>
					</div>
					
					<?php
						$rsql ="select * from room";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$d =0;
						$j = 0;
						$t = 0;
						$q = 0;
						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="Double" )
							{
								$d = $d+ 1;
							}
							
							if($s=="Jumeaux")
							{
								$j = $j + 1;
							}
							if($s=="Triple" )
							{
								$t = $t + 1;
							}
							if($s=="Quad" )
							{
								$q = $q + 1;
							}
							
						
						}
						?>
						
						<?php
						$csql ="select * from roombook where stat='Conform'";
						$cre= mysqli_query($con,$csql);
						$cr =0 ;
						$cd =0;
						$cj = 0;
						$ct = 0;
						$cq = 0;
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['TRoom'];
							
							if($cs=="Double"  )
							{
								$cd = $cd + 1;
							}
							
							if($cs=="Jumeaux" )
							{
								$cj = $cj + 1;
							}
							if($cs=="Triple" )
							{
								$ct = $ct + 1;
							}
							if($cs=="Quad" )
							{
								$cq = $cq + 1;
							}
							
						
						}
				
					?>
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Détails des chambres disponibles
                        </div>
                        <div class="panel-body">
						<table width="200px">
							<tr>
								<td><b>Chambre Double</b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php  
									$f1 =$d - $cd;
									if($f1 <=0 )
									{	$f1 = "NO";
										echo $f1;
									}
									else{
											echo $f1;
									}
								
								
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Chambre Jumeaux</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle" ><?php 
								$f2 =  $j -$cj;
								if($f2 <=0 )
									{	$f2 = "NO";
										echo $f2;
									}
									else{
											echo $f2;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Chambre Triple	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle" ><?php
								$f3 =$t - $ct;
								if($f3 <=0 )
									{	$f3 = "NO";
										echo $f3;
									}
									else{
											echo $f3;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Chambre Quad</b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								
								$f4 =$q - $cq; 
								if($f4 <=0 )
									{	$f4 = "NO";
										echo $f4;
									}
									else{
											echo $f4;
									}
								?></button> </td> 
							</tr>
							<tr>
								<td><b>Nombre total de chambres	</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle" ><?php 
								
								$f5 =$r-$cr; 
								if($f5 <=0 )
									{	$f5 = "NO";
										echo $f5;
									}
									else{
											echo $f5;
									}
								 ?></button> </td> 
							</tr>
						</table>
						
						
						
                        
						
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
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
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
						if(isset($_POST['co']))
						{	
							$st = $_POST['conf'];
							
							 
							
							if($st=="Conform")
							{
									$urb = "UPDATE `roombook` SET `stat`='$st' WHERE id = '$id'";
									
								if($f1=="NO" and $troom=="Double")
								{
									echo "<script type='text/javascript'> alert('Pardon! Non Disponible Chambre Double')</script>";
								}
								else if($f2=="NO" and $troom=="Jumeaux")
									{
										echo "<script type='text/javascript'> alert('Pardon! Non Disponible Chambre Jumeaux')</script>";
										
									}
									else if ($f3=="NO" and $troom =="Triple")
									{
										echo "<script type='text/javascript'> alert('Pardon! Non Disponible Chambre Triple')</script>";
									}
										else if($f4=="NO" and $troom =="Quad")
										{
										echo "<script type='text/javascript'> alert('Pardon! Non Disponible Chambre Quad')</script>";
										}
										
										else if( mysqli_query($con,$urb))
											{	
												//echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
												//echo "<script type='text/javascript'> window.location='home.php'</script>";
												 $type_of_room = 0;       
														if($troom=="Double")
														{
															$type_of_room = 529;
														
														}
														else if($troom=="Jumeaux")
														{
															$type_of_room = 529;
														}
														else if($troom=="Triple")
														{
															$type_of_room = 818;
														}
														else if($troom=="Quad")
														{
															$type_of_room = 1059;
														}
														
															
														if($meal=="Chambre Seulement")
														{
															$type_of_meal= 0;
														}
														else if($meal=="Petit-Déjeuner")
														{
															$type_of_meal= 40;
														}else if($meal=="Demis-Pension")
														{
															$type_of_meal= 80;
														
														}else if($meal=="Pension Complète")
														{
															$type_of_meal= 150;
														}
														
														
														$ttot = $type_of_room * $days * $nroom;
														$mepr = $type_of_meal * $days;
														
														$fintot = $ttot + $mepr ;
															
															//echo "<script type='text/javascript'> alert('$count_date')</script>";
														$psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `nroom`, `cin`, `cout`, `ttot`,`meal`, `mepr`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$nroom','$cin','$cout','$ttot','$meal','$mepr','$fintot','$days')";
														
														if(mysqli_query($con,$psql))
														{	$notfree="NotFree";
															$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where   type='$troom' ";
															if(mysqli_query($con,$rpsql))
															{
															echo "<script type='text/javascript'> alert('Réservation conforme')</script>";
															echo "<script type='text/javascript'> window.location='roombook.php'</script>";
															}
															
															
														}
												
											}
									
                                        
							}	
					
						}
					
									
									
							
						?>