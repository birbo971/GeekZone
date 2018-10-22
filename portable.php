<?php
echo'<?xml verison="1.0" encoding="UTF-8" ?>'?>
<!DOCTYPE html>
<html>
<head>
	<?php  include'head.php'?>
</head> 
<?php include'inc/imgaccueil.inc.php'?>
<?php include'connection.php'?>
<?php include 'newfile.php'?>
<body>	
<?php include'inc/bmenu.inc.php'?>
<div id="contenu">
<h1>Portable</h1>
<br>
<hr>
<img id="sizeproduit" src="img/portable/coque-iphone-4-decapsuleur.jpg"/>
<img id="sizeproduit" src="img/portable/coque-iphone-4-decapsuleur-1.jpg"/>
<img id="sizeproduit" src="img/portable/coque-iphone-4-decapsuleur-2.jpg"/>

<p><?php portable ('Coque Iphone 4 decapsuleur',$hote,$base,$utilisateur,$mdp)?></p>

<hr>

<img id="sizeproduit" src="img/portable/manette-jeu-pour-ecran-tactile-istick.jpg"/>
<img id="sizeproduit" src="img/portable/manette-jeu-pour-ecran-tactile-istick-1.jpg"/>

<p><?php portable ('Manette jeu pour ecran tactile Istick',$hote,$base,$utilisateur,$mdp)?></p>

<hr>

<img id="sizeproduit" src="img/portable/ventilo-pour-iphone.jpg"/>
<img id="sizeproduit" src="img/portable/ventilo-pour-iphone-1.jpg"/>

<p><?php portable ('Mini ventilateur pour iPhone',$hote,$base,$utilisateur,$mdp)?></p>

<hr>

</div>	
</body>
<footer>
<?php include 'inc/footer.inc.php' ?>
</footer>	