<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Photos</title>
		<link type="text/css" rel="stylesheet" href="index.css"/>
		<script type="text/javascript" src="swfobject.js"></script>
    </head>

    <body>
		<?php include("entete.php"); ?>
		
		<div id="bloc-page">
			<!-- <img src="images/ico_top.png" alt="fleche" class="fleche" style="position:absolute; top:75px; left:615px;"/> -->

			<p>Cliquez sur une image pour l'agrandire. Recliquez sur celle-ci pour revenir à la galerie des photos. Vous pouvez
			également vous déplacer à l'aide des flèches du clavier. </p> 
			
			<div class="galerie_photos">
				<div id="flashcontent">TiltViewer requires JavaScript and the latest Flash player.
					<a href="http://www.macromedia.com/go/getflashplayer/">Get Flash here.</a>
				</div>
				<script type="text/javascript">
						var fo = new SWFObject("TiltViewer.swf", "viewer", "670", "670", "9.0.28", "#FFFFFF");
						fo.addVariable("useFlickr", "false");
						fo.addVariable("xmlURL", "gallery.xml"); // Fichier XML où se trouvent les photos
						fo.addVariable("maxJPGSize","1600"); // Taille de la plus grande image
						//GENERAL OPTIONS
						fo.addVariable("useReloadButton", "false");
						fo.addVariable("columns", "4"); 
						fo.addVariable("rows", "4"); 
						fo.addVariable("bkgndInnerColor", "0xFF0000");
						fo.addVariable("bkgndOuterColor", "0xFFFFFF");
						fo.addVariable("frameColor", "0x000000");
						fo.addVariable("showFlipButton", "false");
						fo.addVariable("showLinkButton", "false");
						fo.addParam("allowFullScreen","false");
						fo.write("flashcontent");
				</script>
			</div>
			
			<div class="flecheNav">
				<a href="index.php"><img title="Revenir à l'accueil" src="images/flechegauche.jpg" alt="flechegauche" class="flechegauche" width=8%/> </a> 				
				<a href=#><img title="Revenir en haut" src="images/flechehaut.jpg" alt="flechehaut" class="flechehaut" width=8%/> </a> 
			</div>
		</div>
		
		<?php include("bas.php"); ?>
    </body>
</html>