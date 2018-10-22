<?php function villes ($ville,$hote,$base,$utilisateur,$mdp){ 
	
	try {

	$pdo_options [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO ( 'mysql:host=' . $hote . ';dbname=' . $base, $utilisateur, $mdp );
	$bdd->exec ( 'SET NAMES utf8' );
	$reponse = $bdd->prepare ( 'SELECT * FROM boutique WHERE ville=:ville'); 
	$reponse -> execute(array(
			"ville"=>$ville
	));
	
	while ($donnees = $reponse->fetch())
	{

	echo $donnees['rue']; 
	echo $donnees['cp'];
	echo $donnees['ville'];echo'<br>';
	echo $donnees['telephone'];echo'<br>';
	echo $donnees['horaires'];


	}
	
	$reponse->closeCursor(); // Termine le traitement de la requête
	
	} catch (Exception $e) {
	die ('Erreur :'.$e -> getMessage());
	}
}
?>


<?php function cuisine ($nom,$hote,$base,$utilisateur,$mdp){ 
	
	try {

	$pdo_options [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO ( 'mysql:host=' . $hote . ';dbname=' . $base, $utilisateur, $mdp );
	$bdd->exec ( 'SET NAMES utf8' );
	$reponse = $bdd->prepare ( 'SELECT * FROM produit WHERE nom=:nom'); 
	$reponse -> execute(array(
			"nom"=>$nom
	));
	
	while ($donnees = $reponse->fetch())
	{

		echo $donnees['nom'];
		echo '<br><br>';
		echo'Prix: ';echo $donnees['prix'];echo' &euro;';
		echo '<br><br>';
		echo $donnees['description'];
		echo $donnees['detail'];

	}
	
	$reponse->closeCursor(); // Termine le traitement de la requête
	
	} catch (Exception $e) {
	die ('Erreur :'.$e -> getMessage());
	}
}
?>


<?php function usb ($nom,$hote,$base,$utilisateur,$mdp){ 
	
	try {

	$pdo_options [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO ( 'mysql:host=' . $hote . ';dbname=' . $base, $utilisateur, $mdp );
	$bdd->exec ( 'SET NAMES utf8' );
	$reponse = $bdd->prepare ( 'SELECT * FROM produit WHERE nom=:nom'); 
	$reponse -> execute(array(
			"nom"=>$nom
	));
	
	while ($donnees = $reponse->fetch())
	{
		
	echo $donnees['nom'];
	echo '<br><br>';
	echo'Prix: ';echo $donnees['prix']; echo' &euro;';
	echo '<br><br>';
	echo $donnees['description'];
	echo $donnees['detail'];
	echo $donnees['image'];	


	}
	
	$reponse->closeCursor(); // Termine le traitement de la requête
	
	} catch (Exception $e) {
	die ('Erreur :'.$e -> getMessage());
	}
}
?>



<?php function portable ($nom,$hote,$base,$utilisateur,$mdp){ 
	
	try {

	$pdo_options [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO ( 'mysql:host=' . $hote . ';dbname=' . $base, $utilisateur, $mdp );
	$bdd->exec ( 'SET NAMES utf8' );
	$reponse = $bdd->prepare ( 'SELECT * FROM produit WHERE nom=:nom'); 
	$reponse -> execute(array(
			"nom"=>$nom
	));
	
	while ($donnees = $reponse->fetch())
	{
		
	echo $donnees['nom'];	
	echo '<br><br>';
	echo'Prix: ';echo $donnees['prix']; echo' &euro;';
	echo '<br><br>';
	echo $donnees['description'];
	echo $donnees['detail'];
	


	}
	
	$reponse->closeCursor(); // Termine le traitement de la requête
	
	} catch (Exception $e) {
	die ('Erreur :'.$e -> getMessage());
	}
}
?>



<?php function modeGeek ($nom,$hote,$base,$utilisateur,$mdp){ 
	
	try {

	$pdo_options [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO ( 'mysql:host=' . $hote . ';dbname=' . $base, $utilisateur, $mdp );
	$bdd->exec ( 'SET NAMES utf8' );
	$reponse = $bdd->prepare ( 'SELECT * FROM produit WHERE nom=:nom'); 
	$reponse -> execute(array(
			"nom"=>$nom
	));
	
	while ($donnees = $reponse->fetch())
	{

		echo $donnees['nom'];
		echo '<br><br>';
		echo'Prix: ';echo $donnees['prix']; echo' &euro;';
		echo '<br><br>';
		echo $donnees['description'];
		echo $donnees['detail'];

	}
	
	$reponse->closeCursor(); // Termine le traitement de la requête
	
	} catch (Exception $e) {
	die ('Erreur :'.$e -> getMessage());
	}
}
?>
<?php function gadgets ($nom,$hote,$base,$utilisateur,$mdp){ 

try {

$pdo_options [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO ( 'mysql:host=' . $hote . ';dbname=' . $base, $utilisateur, $mdp );
$bdd->exec ( 'SET NAMES utf8' );
$reponse = $bdd->prepare ( 'SELECT * FROM produit WHERE nom=:nom'); 
$reponse -> execute(array(
"nom"=>$nom
));

while ($donnees = $reponse->fetch())
{

echo $donnees['nom'];
echo '<br><br>';
echo $donnees['prix']; echo' &euro;';
echo '<br><br>';
echo $donnees['description'];
echo $donnees['detail'];

}

$reponse->closeCursor(); // Termine le traitement de la requête

} catch (Exception $e) {
die ('Erreur :'.$e -> getMessage());
}
}
?>
<?php function images ($image,$hote,$base,$utilisateur,$mdp){ 

try {

$pdo_options [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO ( 'mysql:host=' . $hote . ';dbname=' . $base, $utilisateur, $mdp );
$bdd->exec ( 'SET NAMES utf8' );
$reponse = $bdd->prepare ( 'SELECT image FROM produit WHERE produit_id = nom'); 
$reponse -> execute(array(
"image"=>$image
));

while ($donnees = $reponse->fetch())
{

echo $donnees['image'];
}

$reponse->closeCursor(); // Termine le traitement de la requête

} catch (Exception $e) {
die ('Erreur :'.$e -> getMessage());
}
}
?>
