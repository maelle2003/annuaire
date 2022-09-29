<!DOCTYPE HTML>
<html>
<head>
<title>Supprimer des membres</title>
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
 
 <link href="" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h1>Formulaire suppression de membre</h1>
<table>
<form method='POST' action='index.php?uc=gerer&action=controlesupprimer' name='supp' enctype='application/x-www-form-urlencoded'>
<tr>
	<td>id : </td>
	<td><input type='int' name='id' size='20'></td>
</tr>
<tr>
	<td>nom : </td>
	<td><input type='text' name='nom' size='20' value=''></td>
</tr>

<tr>
<td colspan="2"><input type='submit' value='Valider'></td>
</tr>
</form>
</table>

</body>
</html>