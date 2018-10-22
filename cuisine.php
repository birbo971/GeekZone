
<!DOCTYPE html>
<html>
<head>
<?php  include'head.php'?>
 </head> 
<?php include'inc/imgaccueil.inc.php'?>

<body>
<?php include'inc/bmenu.inc.php'?>
<?php include'connection.php'?>
<?php include 'newfile.php'?>	
<div id="contenu">
<br>
<h1>Cuisine</h1>
<br>
<hr>


<img id="sizeproduit" src="img/cuisine/glacons-tetris (1).jpg"/>
<img id="sizeproduit" src="img/cuisine/glacons-tetris (2).jpg"/>
<img id="sizeproduit" src="img/cuisine/glacons-tetris.jpg"/>

<p><?php cuisine ('Glacons Tetris',$hote,$base,$utilisateur,$mdp)  ?></p>

<hr>

<img id="sizeproduit" src="img/cuisine/fridgebook-magnet-reseau-social-frigo (1).jpg"/>
<img id="sizeproduit" src="img/cuisine/fridgebook-magnet-reseau-social-frigo.jpg"/>

<p><?php cuisine ('Magnets fridgebook',$hote,$base,$utilisateur,$mdp)  ?></p>

<hr>

<img id="sizeproduit" src="img/cuisine/mug-pac-man-chaud-froid.jpg"/>

<p><?php cuisine ('Mug Pac-Man chaud/froid',$hote,$base,$utilisateur,$mdp)  ?></p>

<br><br>

</div>

</body>
  <?php include'inc/footer.inc.php'?>	