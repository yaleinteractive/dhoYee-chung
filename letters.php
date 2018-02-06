<!DOCTYPE html>
<html>
<head>
	<title>test php</title>
</head>
<body>

<p>	Greetings!

<?php

$letter = $_GET['letter'];
$number = $_GET['number'];

$counter = 0;


while ($counter < $number) {
  echo "$letter ";
  $counter++;
  system(escapeshellcmd("say $letter"));
  flush();
}

?>

Goodbye.</p>




</body>
</html>