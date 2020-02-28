<?php
function removeExtraBlanks(string $text):?string
{
	$strNew = $_GET["text"];
	$strNew = ltrim($strNew);
	$strNew = rtrim($strNew);
	$pos = strpos($strNew, '  ');
	while ($pos !== false)
	{
		$strNew = str_replace('  ', ' ', $strNew);
		$pos = strpos($strnew, '  ');
	};
	return $strNew;
};

echo removeExtraBlanks('str');