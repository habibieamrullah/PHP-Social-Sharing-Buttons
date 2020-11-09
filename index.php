<?php
//Sharing buttons powered by https://sharingbuttons.io/
include("sharingbuttons.php");

?>

<!DOCTYPE html>
<html>
    <head>
		<title>PHP Social Sharing Buttons</title>
		<link rel="stylesheet" type="text/css" href="hsharingbuttons.css"/>
	</head>
	<body>
		<h1>PHP Social Sharing Buttons</h1>
		<p>How to use? Call this function: showSharer(string $url, string $message). First paramater is the url that you want to share, second parameter is your message along that url.</p>
		
		<?php
		showSharer("https://google.com/", "A search engine site!");
		?>
		
	</body>
</html>
