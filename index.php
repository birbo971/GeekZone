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

	<div id="contenu" style="height:800px;">
<br>
  		<p id="particle">DERNIERS ARTICLES</p>
  		  				<script type="text/javascript">
		
			$(document).ready(function(){
				$('#horiz_container_outer').horizontalScroll();
			
			});
		
		</script>
  		<ul id="horiz_container_outer">
		<li id="horiz_container_inner">
			<ul id="horiz_container">
				<li><img src="img/cuisine/fridgebook-magnet-reseau-social-frigo (1).jpg" width="300px" height="300px" alt="Toy Story" /></li>
				<li><img src="img/gadget/prise-chargeur-usb-robinet.jpg" width="300px" height="300px" alt="UP" /></li>
				<li><img src="img/mode/t-shirt-coder-1.jpg" width="300px" height="300px" alt="Ratatouille" /></li>
				<li><img  src="img/gadget/powerball.jpg" width="300px" height="300px" alt="Finding Nemo" /></li>
				<li><img src="img/mode/bonnet-barbe.jpg" width="300px" height="300px" alt="Cars" /></li>
				<li><img src="img/portable/coque-iphone-4-decapsuleur.jpg" width="300px" height="300px" alt="Monsters Inc" /></li>
				<li><img src="img/USB/chauffe-tasse-biscuit-usb.jpg" width="300px" height="300px" alt="A Bugs Life" /></li>
				<li><img src="img/cuisine/glacons-tetris (1).jpg" width="300px" height="300px" alt="The Incredibles" /></li>
				<li><img src="img/mode/t-shirt-detecteur-wifi-1.jpg" width="300px" height="300px" alt="The Incredibles" /></li>
				<li><img src="img/cuisine/mug-pac-man-chaud-froid.jpg" width="300px" height="300px" alt="The Incredibles" /></li>
			</ul>
		</li>		
	</ul>			
	
						
	<div id="scrollbar">
		<a id="left_scroll" class="mouseover_left" href="#"></a>
		<div id="track">
		     <div id="dragBar"></div>
		</div>
		<a id="right_scroll" class="mouseover_right" href="#"></a></div>

<br>
<br>
<h1>Bienvenue sur le site de GEEKZONE !</h1>
  	<hr/>
  		<article>
  		<h3>Nous sommes tr&egrave;s heureux que vous soyez nombreux a visiter notre site et nous vous en remercions</h3>
  		</article>


  		<br>
  		<br>


<section>
		<p>
	<u>DERNIERS POST :</u>
			</p>
	<article>
	<img id="tailleimg" src="img/fleche.jpg"/>
	<br/> <br/>
	<p><u>QUI SOMMES NOUS ?</u></p>
	</article>
</section>
<br><br>
  </div>

</body>

  <?php include'inc/footer.inc.php'?>	

</html>
