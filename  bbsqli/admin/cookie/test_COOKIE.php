<?php setcookie('id', '1'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="fr" />
	<title>Page de Test</title>

	
	
</head>
<body>
<script type="text/javascript" src="../style/js/jquery.jush.js"></script>
<script type="text/javascript">
jush.style('style/css/jush.css');
jush.highlight_tag('code');
</script>
<h1>COOKIE</h1>
<table border="1">

<tr><td><a href="test_unprotect.php">Sans protection</a></td>
<td><pre><code class="jush">
$userid = isset ($_COOKIE['id']) ? $_COOKIE['id'] : 0;

$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' FROM Utilisateur WHERE IdUtilisateur=' . $userid;</code></pre></td></tr>




</table>

</body>
</html>