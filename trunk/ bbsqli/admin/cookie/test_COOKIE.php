<?php setcookie('id', '1'); setcookie('id2', 'pgeseraphin'); ?>
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

<tr><td><a href="test_escape.php">Escape</a></td>
<td><pre><code class="jush">
$userid = isset ($_COOKIE['id']) ? $_COOKIE['id'] : 0;
$userid = $conn->real_escape_string($userid);

$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' FROM Utilisateur WHERE IdUtilisateur=' . $userid;</code></pre></td></tr>

<tr><td><a href="test_escape_quote.php">Escape + Guillemet</a></td>
<td><pre><code class="jush">
$userid = isset ($_COOKIE['id']) ? $_COOKIE['id'] : 0;
$userid = $conn->real_escape_string($userid);

$sql = 'SELECT `IdUtilisateur`, `Type`,	`Login`, `Email`' .
' FROM `Utilisateur` WHERE `IdUtilisateur`="' . $userid . '"';</code></pre></td></tr>

<tr><td><a href="test_escape_quote_intval.php">Escape + Guillemet + Intval</a></td>
<td><pre><code class="jush">
$userid = isset ($_COOKIE['id']) ? $_COOKIE['id'] : 0;
$userid = intval($userid);
$userid = $conn->real_escape_string($userid);

$sql = 'SELECT `IdUtilisateur`, `Type`,	`Login`, `Email`' .
' FROM `Utilisateur` WHERE `IdUtilisateur`=' . $userid;</code></pre></td></tr>

<tr><td><a href="test_limit.php">LIMIT</a></td>
<td><pre><code class="jush">
$offset = isset ($_COOKIE['id']) ? $_COOKIE['id'] : 0;
$offset = $conn->real_escape_string($offset);


$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' FROM Utilisateur LIMIT ' . $offset.', 10';</code></pre></td></tr>

<tr><td><a href="test_limit_quote_intval.php">LIMIT + Guillemet + intval</a></td>
<td><pre><code class="jush">
$offset = isset ($_COOKIE['id']) ? $_COOKIE['id'] : 0;
$offset = intval($offset);

$sql = 'SELECT `IdUtilisateur`, `Type`,	`Login`, `Email`' .
' FROM `Utilisateur` LIMIT ' . $offset . ', 10';</code></pre></td></tr>

<tr><td><a href="test_limit_is_numeric.php">LIMIT + is_numeric</a></td>
<td><pre><code class="jush">
$offset = isset ($_COOKIE['id']) ? $_COOKIE['id'] : 0;
$offset = is_numeric($offset);

$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' FROM Utilisateur LIMIT ' . $offset . ', 10';</code></pre></td></tr>

<tr><td><a href="test_order_by_escape.php">ORDER BY + escape</a></td>
<td><pre><code class="jush">
$order = isset ($_COOKIE['id']) ? $_COOKIE['id'] : 0;
$order = $conn->real_escape_string($order);

$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' FROM Utilisateur ORDER BY ' . $order;</code></pre></td></tr>

<tr><td><a href="test_order_by_quote.php">ORDER BY + quote</a></td>
<td><pre><code class="jush">
$order = isset ($_COOKIE['id']) ? $_COOKIE['id'] : 0;
if (!in_array($order, Array (
		'IdUtilisateur',
		'Type',
		'Login',
		'Email'
	)))
	$order = 'IdUtilisateur';

$sql = 'SELECT `IdUtilisateur`, `Type`,	`Login`, `Email`' .
' FROM `Utilisateur` ORDER BY `' . $order . '`';</code></pre></td></tr>

<tr><td><a href="test_like_escape.php">LIKE + escape</a></td>
<td><pre><code class="jush">
$search = isset ($_COOKIE['id2']) ? $_COOKIE['id2'] : '';

if ($search != '') {
	$search = $conn->real_escape_string($search);

	$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
	' FROM Utilisateur WHERE Login LIKE "' . $search . '%"';
}</code></pre></td></tr>


</table>

</body>
</html>