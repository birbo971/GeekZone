
<html>
<head>
<?php  include'../head.php'?>
 </head> 
<?php session_start();?>
<?php include'Database.php'?>
<link rel="stylesheet" href="../css/main.css" type="text/css"/>
<body>

<?php include'../inc/bmenu.inc2.php'?>
<?php include'../connection.php'?>
<?php include '../newfile.php'?>	

<div id="contenu">



<h1><u>Espace Administration</u></h1>
	<br>
	<h4>Se connecter :</h4>
	<br/>

<center><form action="login.php" method="POST">
<p id="formulaire_admin">Nom d'utilisateur :</p><input type="text" name="username" placeholder="Admin" /><br/>
<p id="formulaire_admin">Mot de passe :</p><input type="password" name="password" placeholder="*****"/><br/><br>
		<input type="submit" name="Connecter" value="Se connecter" />
</form></center>
<?php
if(isset($_POST) && !empty($_POST)){
	if(!empty(htmlspecialchars($_POST['username']))&& !empty(htmlspecialchars($_POST['password']))){
		$username=htmlspecialchars($_POST['username']);
		$password=htmlspecialchars($_POST['password']);
		$req =$db->prepare('SELECT * FROM users WHERE username = :username  AND password = :password');
		$req->execute(array(
				'username'=>$username,
				'password'=>$password
		));
		/*$req =$db->prepare('SELECT * FROM users');
		$req->execute();*/
		if($req->rowCount()==1){
			$_SESSION['admin'] = $username;
			header('location:Espace_Admin.php');
		}else{
			$error ='Identifiants incorrect';
		}
	}

else{
	$error = 'Veuillez remplir tous les champs !';
	}
}
if(isset($error)){
	echo'<div class="error">'.$error.'</div>';
}

?>


<?php include'../inc/footer.inc.php'?>
</div>
</body>
</html>