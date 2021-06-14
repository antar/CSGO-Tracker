<?php

require __DIR__ . '/assets/vendor/autoload.php';
include_once __DIR__ . '/assets/classes/api.class.php';

$t = new API('aizeycs');

// var_dump( $t->getStats("platformUserHandle") );

?>
<!DOCTYPE html>
<html>
	<head>
		<title>CSGO Tracker | an7ar</title>
	</head>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>

<form action="stats.php" method="get" target="_blank">
	  <label for=""> Enter Steam Name, Id, or URL:</label>
	  <input type="text" id="" name=""><br><br>
	  <input type="submit" value="Submit">
</form>

</body>
</html>
<?php
?>