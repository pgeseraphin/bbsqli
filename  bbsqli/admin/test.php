<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="fr" />
	<title>Page de Test</title>

	
	
</head>
<body>
<script type="text/javascript" src="style/js/jquery.jush.js"></script>
<script type="text/javascript">
jush.style('style/css/jush.css');
jush.highlight_tag('code');
</script>
<table border="1">
<tr><td><a href="test_GET.php?id=1">GET</a></td>
<td><pre><code class="jush">
$userid = isset ($_GET['id']) ? $_GET['id'] : 0;

$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' FROM Utilisateur WHERE IdUtilisateur=' . $userid;</code></pre></td></tr>
<tr><td><a href="test_escape.php?id=1">Escape</a></td>
<td><pre><code class="jush">
$userid = isset ($_GET['id']) ? $_GET['id'] : 0;
$userid = $conn->real_escape_string($userid);
$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' FROM Utilisateur WHERE IdUtilisateur=' . $userid;</code></pre></td></tr>
<tr><td><a href="test_escape_quote.php?id=1">Escape + Guillemet</a></td>
<td><pre><code class="jush">
$userid = isset ($_GET['id']) ? $_GET['id'] : 0;
$userid = $conn->real_escape_string($userid);

$sql = 'SELECT `IdUtilisateur`, `Type`,	`Login`, `Email`' .
' FROM `Utilisateur` WHERE `IdUtilisateur`="' . $userid . '"';</code></pre></td></tr>
<tr><td><a href="test_quote_intval.php?id=1">Guillemet + Intval</a></td>
<td><pre><code class="jush">
$userid = isset ($_GET['id']) ? $_GET['id'] : 0;
$userid = intval($userid);

$sql = 'SELECT `IdUtilisateur`, `Type`,	`Login`, `Email`' .
' FROM `Utilisateur` WHERE `IdUtilisateur`=' . $userid;</code></pre></td></tr>

<tr><td><a href="test_limit.php?id=0">LIMIT</a></td>
<td><pre><code class="jush">
$offset = isset ($_GET['id']) ? $_GET['id'] : 0;
$offset = $conn->real_escape_string($userid);

$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' FROM Utilisateur LIMIT ' . $offset .', 10';</code></pre></td></tr>

<tr><td><a href="test_limit_quote_intval.php?id=0">LIMIT + Guillemet + intval</a></td>
<td><pre><code class="jush">
$offset = isset ($_GET['id']) ? $_GET['id'] : 0;
$offset = intval($offset);


$sql = 'SELECT `IdUtilisateur`, `Type`,	`Login`, `Email`' .
' FROM `Utilisateur` LIMIT ' . $offset .', 10';</code></pre></td></tr>

<tr><td><a href="test_limit_is_numeric.php?id=0">LIMIT + is_numeric</a></td>
<td><pre><code class="jush">
$offset = isset ($_GET['id']) ? $_GET['id'] : 0;
$offset = is_numeric($offset);

$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' FROM Utilisateur LIMIT ' . $offset . ', 10';</code></pre></td></tr>

</table>

</body>
</html>