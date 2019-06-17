<?php


$file = fopen(__DIR__ . "/files/Highsites.csv","r");

//Create key value array
$keys = fgetcsv($file);
feof($file);

$highsites;

while(! feof($file))
{
	$line = fgetcsv($file);
	for ($i = 0; $i < count($keys); $i++){
		$highsites[$line[0]][$keys[$i]] = $line[$i];
	}
}



//UPDATE `table_name` SET `column_name` = `new_value' [WHERE condition];

highlight_string( var_export($highsites, true) );die;

  

?>