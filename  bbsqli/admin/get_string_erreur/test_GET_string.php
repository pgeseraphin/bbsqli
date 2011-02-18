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
<h3>GET en utilisant string(Avec affichage d'erreur)</h3>
<a href="../../index.php">accueil</a>
<table border="1">
<tr><td><a href="test_string_GET.php?login=">Sans protection</a></td>
<td><pre><code class="jush">
$user = isset ($_GET['login']) ? $_GET['login'] : '';
$sql = 'SELECT Type, Login, Email' .
' FROM Utilisateur WHERE Login="' . $user.'"';</code></pre></td></tr>

<tr><td><a href="test_string_escape.php?login=">Escape</a></td>
<td><pre><code class="jush">
$user = isset ($_GET['login']) ? $_GET['login'] : '';
$user = $conn->real_escape_string($user);
$sql = 'SELECT Type, Login, Email' .
' FROM Utilisateur WHERE Login="' . $user.'"';</code></pre></td></tr>
<tr><td><a href="test_string_escape_quote.php?login=">Escape + Guillemet</a></td>
<td><pre><code class="jush">
$user = isset ($_GET['login']) ? $_GET['login'] : '';
$user = $conn->real_escape_string($user);
$sql = 'SELECT `Type`,	`Login`, `Email`' .
' FROM `Utilisateur` WHERE `Login`="' . $user . '"';</code></pre></td></tr>

</table>

</body>
</html>