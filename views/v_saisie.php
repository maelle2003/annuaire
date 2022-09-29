<!DOCTYPE HTML>
<html>
<head>
<title>Ajouter des membres</title>
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
 
 <link href="" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h1>Formulaire d'ajout de membre</h1>
<table>
<form method='POST' action='index.php?uc=gerer&action=controlesaisie' name='ajout' enctype='application/x-www-form-urlencoded'>
<tr>
	<td>nom : </td>
	<td><input type='text' name='nom' size='20'></td>
</tr>
<tr>
	<td>prénom : </td>
	<td><input type='text' name='prenom' size='20' value=''></td>
</tr>

<tr>
<td colspan="2"><input type='submit' value='Valider'></td>
</tr>
</form>
</table>

</body>
</html>