<?php
	$webyep_bDocumentPage = false;
	$webyep_sIncludePath = "../..";
	include_once("$webyep_sIncludePath/webyep.php");
?>
<html>
<head>
<!--
// WebYep
// (C) Objective Development Software GmbH
// http://www.obdev.at
-->
<title><?php echo $webyep_sProductName?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../../styles.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<span class="textButton">&lt;<a href="javascript:window.close();">sluit venster</a>&gt;</span><br>
<img src="../../images/nix.gif" width="8" height="8">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="left" valign="top"><h1><?php echo $webyep_sProductName?> Help: Opgemaakte tekst</h1></td>
    <td align="right" valign="top"><img src="../../images/logo.gif" align="top" border="0"><img src="../../images/nix.gif" width="8" height="8" align="top"></td>
</tr>
</table>
<div><img src="../../images/nix.gif" width="8" height="10"></div>
<h3>Omschrijving</h3>
<p>U kunt het <?php echo $webyep_sProductName?> Opgemaakte tekstveld gebruiken om tekst in te voeren met HTML opmaakcode.</p>
<h3>Gebruik</h3>
<p>Voer de gewenste tekst in (inclusief de HTML opmaakcode) en klik op de knop &quot;Bewaar&quot;.</p>
<p>Het bewerkingsvenster zal sluiten en de gewijzigde tekst zal worden weergegeven in uw webpagina.<br>
  <span class="remark">In sommmige uitzonderlijke gevallen kan het nodig zijn om de pagina in uw brwoser te verversen.</span></p>
<span class="textButton">&lt;<a href="javascript:window.close();">sluit venster</a>&gt;</span>
<hr>
<span class="remark"><?php echo $webyep_sCopyrightLine?></span>
</body>
</html>