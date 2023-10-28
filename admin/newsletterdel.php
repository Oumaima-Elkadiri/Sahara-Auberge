<?php

include ('db.php');

$id=$_GET['eid'];
if($id=="")
{
echo '<script>alert("Pardon ! Mauvaise touche") </script>' ;
		header("Location: messages.php");


}

else{
$view="DELETE FROM `contact` WHERE id ='$id' ";

	if($re = mysqli_query($con,$view))
	{
		echo "<script>alert('Abonné à la lettre d information Supprimer') </script>" ;
		header("Location: messages.php");
	}


}







?>