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
<br>
<h1>Mode Geek</h1>
<br>
<hr>
<img id="sizeproduit" width=150; height=150;" src="img/mode/bonnet-barbe-1.jpg" />
<img id="sizeproduit" width=150; height=150;" src="img/mode/bonnet-barbe.jpg" />
	
<p><?php modeGeek('bonnet barbe',$hote,$base,$utilisateur,$mdp)?></p>

<hr>

<img id="sizeproduit" width=150; height=150; src="img/mode/t-shirt-coder.jpg" />
<img id="sizeproduit" width=150; height=150;" src="img/mode/t-shirt-coder-1.jpg" />
	
<p><?php modeGeek ('tee shirt coder',$hote,$base,$utilisateur,$mdp)?></p>

<hr>
	
<img id="sizeproduit"  width=150; height=150; src="img/mode/t-shirt-detecteur-wifi.jpg" />
<img id="sizeproduit" width=150; height=150; src="img/mode/t-shirt-detecteur-wifi-1.jpg" />
<img id="sizeproduit" width=150; height=150; src="img/mode/t-shirt-detecteur-wifi-2.jpg" />
	
<p><?php modeGeek ('tee shirt detecteur wifi',$hote,$base,$utilisateur,$mdp)?></p>

<hr>
	
<img id="sizeproduit"  width=150; height=150; src="img/mode/t-shirt-les-jeux-video-ont-ruine-ma-vie.jpg" />
<img id="sizeproduit"  width=150; height=150;t" src="img/mode/t-shirt-les-jeux-video-ont-ruine-ma-vie-1.jpg" />

<p><?php modeGeek ('tee shirt jeux video',$hote,$base,$utilisateur,$mdp)?></p>
	
</body>
</div>
<?php include'inc/footer.inc.php'?>

