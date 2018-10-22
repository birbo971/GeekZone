<?php
echo'<?xml verison="1.0" encoding="UTF-8" ?>'?>
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
<h1>Nos boutiques</h1>
<br>
<hr>
<p>
<h4>La boutique de Lyon</h4>
<img class="placeimg"  src="img/boutiques/boutique_lyon.jpg" alt="boutique de lyon" width="400px"/>
<BR>
<h4><?php villes ('LYON',$hote,$base,$utilisateur,$mdp)  ?></h4>
<h4><u>Mail:<br>
<a href="mailto:geekzonelyon@gmail.com" target="_top">Contact Mail</a></u></h4>
<br>

<h4>La boutique d'Albertville</h4>
<img class="placeimg" src="img/boutiques/boutique_albertville.jpg" alt="boutique d'Albertville" width="400px"/>
</p>
<BR>
<h4><?php villes ('ALBERTVILLE',$hote,$base,$utilisateur,$mdp)  ?></h4>
<h4><u>
<br>
Mail:<br>
<a href="mailto:geekzonealbertville@gmail.com" target="_top">Contact Mail</a></u></h4>
<BR>
<BR>
<br>
<br>
<h4>La boutique de Valence </h4>
<img class="placeimg"  src="img/boutiques/boutique_valence.jpg" alt="boutique de valence" width="400px"/>
<BR>
<h4><?php villes ('VALENCE',$hote,$base,$utilisateur,$mdp)  ?></h4>
<h4><u>Mail:<br>
<a href="mailto:geekzonevalence@gmail.com" target="_top">Contact Mail</a></u></h4>
<br>
<br>
<h4>La boutique de Clermont Ferrand</h4>
<img class="placeimg" src="img/boutiques/boutique_clermont.jpeg" alt="boutique de clermont" width="400px"/>
<h4><?php villes('CLERMONT FERRAND',$hote,$base,$utilisateur,$mdp)?></h4>
<h4><u>Mail:<br>
<a href="mailto:geekzoneclermontferrand@gmail.com">Contact Mail</a></u></h4>
<br>
<br>
<h4>La boutique de Grenoble</h4>
<img class="placeimg" src="img/boutiques/boutique_grenoble.jpg" alt="boutique de grenoble" width="400px"/>
<h4><?php villes('GRENOBLE',$hote,$base,$utilisateur,$mdp)?></h4>
<h4><u>Mail:<br>
<a href="mailto:geekzonegrenoble@gmail.com">Contact Mail</a></u></h4>
<br>
<br>
<h4>La boutique d&apos;Annecy</h4>
<img class="placeimg" src="img/boutiques/boutique_annecy.jpg" alt="boutique de annecy" width="400px"/>
<h4><?php villes('ANNECY',$hote,$base,$utilisateur,$mdp)?></h4>
<h4><u>Mail:<br>
<a href="mailto:geekzoneannecy@gmail.com">Contact Mail</a></u></h4>
<br>
<br>
<h4>La boutique de Chambery</h4>
<img class="placeimg" src="img/boutiques/boutique_chambery.jpg" alt="boutique de grenoble" width="400px"/>
<h4><?php villes('CHAMBERY',$hote,$base,$utilisateur,$mdp)?></h4>
<h4><u>Mail:<br>
<a href="mailto:geekzonegrenoble@gmail.com">Contact Mail</a></u></h4>
<br>
</div>
</body>
</html>
<?php include 'inc/footer.inc.php' ?>
