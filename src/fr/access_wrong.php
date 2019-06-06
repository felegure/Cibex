
<html>
<head>
<title>Page d'acces</title>
<link rel="stylesheet" href="styles.css" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<STYLE TYPE="text/css">
BODY {
	scrollbar-face-color: #0069B3;
	scrollbar-shadow-color: #000000;
	scrollbar-highlight-color: #FFFFFF;
	scrollbar-3dlight-color: #000000;
	scrollbar-darkshadow-color: #000000;
	scrollbar-track-color: #0069B3;
	scrollbar-arrow-color: #FFCC00;
	background-color: #666666;
}</STYLE>
<!-- DEBUT DU SCRIPT -->
<SCRIPT LANGUAGE="JavaScript">
size=20;
x = 3*size;
place = 0;
texte = 'NEWS !';
texteDef = texte;
function defil()
	{
	texteDef = texteDef.substring(1,texteDef.length);
	while(texteDef.length < x)
		{
		texteDef += " - " + texte;
		}
	document.defil.defilbox.value = texteDef;
	tempo2 = setTimeout("defil()", 200)
	}

</script>

<style type="text/css">
<!--
.Style14 {color: #990000}
.Style22 {font-weight: bold; font-size: 14px; color: #990000; }
.Style52 {
	color: #666666;
	font-style: italic;
	font-size: 9px;
}
.Style90 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<center>

<body alink="#006699" class="sb">

<div id="Layer4" style="position:absolute; left:22px; top:79px; width:164px; height:17px; z-index:4; background-color: #CCCC99; layer-background-color: #CCCC99; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; border: 1px none #000000;"> 
  <div align="center"><a href="../en/index.php" class="Style1"><span class="Style14">Anglais</span></a> 
    |<a href="../fr/index.php" class="Style14"> </a><a href="../fr/index.php" class="Style1"><span class="Style14">Fran&ccedil;ais 
    </span></a>|<a href="" class="Style1"><span class="Style52"> </span></a><a href="../por/index.php" class="Style1"><span class="Style14">Portugais</span></a> 
  </div> 
</div> 
<center> 
  <!--||| Tableau du début avec des graphiques pour la navigation principale, les graphiques par thème doivent être remplacés par vos propres graphiques de thème modifiés par un programme graphique. N'y insérez aucun espace ou passage à la ligne manuel. |||--> 
  <table width="576" border="1" cellpadding="0" cellspacing="0"> 
    <tr> 
      <td width="572"> <div id="Layer1" style="position:absolute; left:1100px; top:3px; width:162px; height:72px; z-index:1"><img name="carteooas" src="../images/carteooas.png" width="162" height="71" alt=""></div> 
        <div id="Layer2" style="position:absolute; left:29px; top:0px; width:81px; height:69px; z-index:2;"><img name="logooas" src="../images/logooas.jpg" width="90" height="80" alt=""> 
        </div></td> 
    </tr> 
  <tr> 
      <td bgcolor="#FFFFD6"> <div align="center"><span class="Style8"><a href="index.php" class="Style6"> </a><span class="Style1"><span class="Style94">A</span><span class="Style3">CHATS </span><span class="Style94"><strong>I</strong></span><span class="Style3">NFORMES</span> <strong class="Style94">C</strong><span class="Style3">OORDONNES SITE WEB</span><span class="Style3"> </span></span></span></div></td> 
    </tr>
    <tr> 
	
      <td> <p><span class="sub"><img src="../images/med_1.jpg" alt="tApplication Access" name="espacereserve" width="119" height="48" align="middle"><img src="../images/blisters.jpg" width="118" height="48" align="middle"><img src="../images/med_1.jpg" alt="tApplication Access" name="espacereserve" width="109" height="44" align="middle"><img src="../images/blisters.jpg" width="111" height="46" align="middle"><img src="../images/med_1.jpg" alt="tApplication Access" name="espacereserve" width="113" height="48" align="middle"></span></p></td> 
    </tr> 
    <tr> 
      <td bgcolor="#FFFFD6"> <div align="center"><span class="Style8"><a href="index.php" class="Style6"> <span class="Style47"> <a href="index.php" class="Style6"> 
          <span class="Style47 Style73">Page d'accueil</span> </a><span class="Style13 Style73">| 
          </span><a href="project.php" class="Style6"><span class="Style13 Style73"> 
          Le Projet </span></a><span class="Style13 Style73">| </span><span class="Style90"><a href="partners.php"><span class="Style13 Style73">Partenaires</span></a></span></span></div></td> 
    </tr> 
    <tr> 
      <td bgcolor="#FFFFD6"><p align="center"><a href="access.php" class="Style10"><span class="Style12 Style3 Style14"><span class="Style94">ACCES A L'APPLICATION</span></span></a> </p></td> 
    </tr> 
  </table></center>



<div align="right" class="Style48">
    	<?php 
      $today = date ("  M ,D j,Y  H:i:s");
      echo " $today ";
    ?>
</div>
<div id="main"></div> 
<center class="Style22">
  <div align="left">
    <p align="left" class="Style23"><strong> </strong></p>
  
  </div>
  <div id="Layer2" style="position:absolute; left:450px; top:200px; width:370px; height:196px;  z-index:2; background-color: #FFFFD6; layer-background-color: #FFFFD6; border: 1px none #000000;" align="center"> 
  <p align="center" class="Style70">Acc&egrave;s</p>
  <form name="login" method="post" action="validate.php">
    <div align="right">
      <p><span class="Style70">code utilisateur :          
          <input name="user_name" type="text" class="Style28">
            <br>
          mot de passe :</span>  
          <input name="password" type="password" class="Style28">
          <br>
        <span class="Style21"><span class="sub"><span class="Style23"><img src="../images/blisters.jpg" width="118" height="48" align="middle"></span><img src="../images/med_1.jpg" alt="tApplication Access" name="espacereserve" width="88" height="26" align="middle"></span></span>          </p>
      <p class="Style71"><span class="Style70">V&eacute;rifiez votre code utilisateur et votre mot de passe</span></p>
      <p>
        <input name="submit" type="submit" value="Envoi">
        </p>
    </div>
  </form>
<p align="center" class="Style71 Style71"><span class="Style71"><a href="forgotpass.php?userid=$_POST['username']" class="Style71 Style71"><span class="Style71">Mot de passe oubli&eacute; ?</span></a></span></p>
  </div>
</center>
<center class="Style22">
  <p align="left" class="Style23">&nbsp;</p>
</center>
<div align="left">
  <p align="left" class="Style21">&nbsp;</p>
    <p align="left" class="Style21">&nbsp;</p>
    <p align="left" class="Style21">&nbsp;</p>
</div>
<center>
  <p>&nbsp;<br>
    <br>
  &nbsp;  
  <p><br>
  <p><br>
  <p><br>
  <p><br>
  <p><br>
  <p><br>
  <p><br>
  <p><br>
  
  <p><span class="sub"> OOAS 2008 - SITE WEB DES ACHATS INFORMES COORDONNES - 
    F. NEZZI </span> 
    <!--||| Fin du pied de page |||-->
</center>
</body>
</html>

