<?php
echo'<?xml verison="1.0" encoding="UTF-8" ?>'?>
<!DOCTYPE html>
<html>
<head>
	<?php  include'head.php'?>
</head> 
<?php include'inc/imgaccueil.inc.php'?>
<?php include'inc/bmenu.inc.php'?>
<?php include'connection.php'?>
<?php include 'newfile.php'?>	
<body>	
<div id="contenu">
<h1>USB</h1>
<br>
<hr>
<img id="sizeproduit" src="img/USB/chauffe-tasse-biscuit-usb.jpg"/>
<img id="sizeproduit" src="img/USB/chauffe-tasse-biscuit-usb-1.jpg"/>

<p><?php usb ('Chauffe-tasse biscuit',$hote,$base,$utilisateur,$mdp) ?></p>

<hr>

<img id="sizeproduit" src="img/USB/frigo-usb.jpg"/>
<img id="sizeproduit" src="img/USB/frigo-usb-1.jpg"/>

<p><?php usb ('Frigo',$hote,$base,$utilisateur,$mdp)  ?></p>

<hr>

<img id="sizeproduit" src="img/USB/mini-aspirateur-usb.jpg"/>

<p><?php usb ('Mini aspirateur',$hote,$base,$utilisateur,$mdp)  ?></p>

<hr>

<img id="sizeproduit" src="img/USB/ventilateur-lumineux-usb.jpg"/>
<img id="sizeproduit" src="img/USB/ventilateur-lumineux-usb-1.jpg"/>

<p><?php usb ('Ventilateur lumineux',$hote,$base,$utilisateur,$mdp)  ?></p>

<br><br><br>

	</div>	
		</body>
	<footer>
			<?php include 'inc/footer.inc.php' ?>
			</footer>	