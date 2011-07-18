<?php

$synonymes = array ();
$description = "";
echo $description;
echo '<p></p>';

$sql="SELECT mot,synonymes  FROM synonymes"; 
$result=mysql_query($sql) or die (mysql_error());
while ($var = mysql_fetch_array($result) ) {
	$synonymes[$var['mot']]=$var['synonymes'];
}

$output = strtr($description, $synonymes);
echo $output;
echo '<p></p>';
$descriptionspin = spin($output, false);
	
echo $descriptionspin;
echo '<hr>';

?>