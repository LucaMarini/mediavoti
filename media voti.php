<html>
<head>
<title>Media dei voti</title>
</head>
<body>
<?php
/*
* calcolo della media dei voti
*/
$voti = array(7,7,6,6,7,7,8,8,7);
$limite = count($voti);
$i=0;
$somma=0;
while ($i<$limite)
{
$somma += $voti[$i];
$i++;
}
$media=$somma/$limite;
echo "<h2>Media dei voti: " . $media . "</h2>";
?>
</body>
</html>