<html>
<head>
<title>Connect your Arduino!</title>
</head>
<body>

<?php
echo "<p>Control Page</p><p>";
$port = fopen("/dev/ttyUSB0", "w"); //You have to check which port your Arduino is connected to and change this
sleep(2);
?>

<br>

<?php
// Turn Led ON ?>
<form action="index.php" method="POST">
<input type="hidden" name="turn" value="on" />
<input type="Submit" value="on">
</form>

<?php
// Turn Led OFF ?>
<form action="index.php" method="POST">
<input type="hidden" name="turn" value="off" />
<input type="Submit" value="off">
</form></p>

<?php
if ($_POST['turn']=="on"){
echo "Turned on";
fwrite($port, "n");
}
if ($_POST['turn']=="off"){
echo "Turned off";
fwrite($port, "f");
}
fclose($port);

?>

</body>
</html>

