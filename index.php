<?php

$queue = $_SERVER['REQUEST_URI'];

if ($queue === '/') {
	$queue = '';
}

$url = 'https://miniggiodev.fr' . $queue;

header('Location: ' . $url);

?>
<head>
	<title>Redirection vers miniggiodev.fr...</title>
</head>
<body>
	<a href="<?php echo $url ?>">Si la redirection ne fonctionne pas, cliquez ici</a>.
</body>
