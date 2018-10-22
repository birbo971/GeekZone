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
<div id="contenu" height="1000px;">
<br>
<h1>Gadgets</h1>
<br>
<hr>
<img id="sizeproduit" src="img/gadget/powerball.jpg"/>
<br>
<p><?php gadgets('Powerball',$hote,$base,$utilisateur,$mdp)?></p>

<hr>

<img id="sizeproduit" src="img/gadget/prise-chargeur-usb-robinet.jpg"/>
<img id="sizeproduit" src="img/gadget/prise-chargeur-usb-robinet-2.jpg"/>
<br>
<p><?php gadgets('Prise chargeur USB robinet',$hote,$base,$utilisateur,$mdp)?></p>

<hr>

<img id="sizeproduit" src="img/gadget/souris-optique-pixel.jpg"/>
<img id="sizeproduit" src="img/gadget/souris-optique-pixel-1.jpg"/>
<br>
<p><?php gadgets('Souris optique pixel',$hote,$base,$utilisateur,$mdp)?></p>

<hr>

<img id="sizeproduit" src="img/gadget/stealth-switch.jpg"/>
<img id="sizeproduit" src="img/gadget/stealth-switch-1.jpg"/>
<br>
<p><?php gadgets('Stealth switch',$hote,$base,$utilisateur,$mdp)?></p>

</div>
</body>
<?php include'inc/footer.inc.php'?>	