
<html>
<head>
<?php  include'../head.php'?>
 </head> 

<?php include'Database.php'?>
<?php session_start();?>
<link rel="stylesheet" href="../css/main.css" type="text/css"/>
<body>

<?php include'../inc/bmenu.inc2.php'?>
<?php include'../connection.php'?>
<?php include '../newfile.php'?>	
<div id="contenu">
<?php 
require_once 'Database.php';

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 20)) {
	// last request was more than 30 minutes ago session_unset(); // unset $_SESSION variable for the run-time session_destroy();
	session_destroy();
	header('location:login.php');
}

if(!$_SESSION['admin']){
 header('location:login.php');
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if(isset($_POST['Deconnexion'])){
	session_destroy();
	header('location:login.php');

}	




?><h3>Bienvenue&nbsp;<?php echo $_SESSION['admin'];?></h3>

<form action="Espace_admin.php" method="post">
<input type="submit" name="Deconnexion" value="Deconnexion" />
</form>
</div>
</body>
</html>