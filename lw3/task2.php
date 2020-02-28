<?php
//mb_internal_encoding("UTF-8");
function checkIdentifier(string $identifier):?string
{
	
	$strNew = $_GET["identifier"];
	$checkInd = 'Yes';
	$i = 0;
	while ($i < strlen($strNew))
	{
		if ((($strNew[$i] < 'A') or ($strNew[$i] > 'z')) and (($strNew[$i] < '0') or ($strNew[$i] > '9')) and (($strNew[$i] < 'А') or ($strNew[$i] > 'я')))
		{
			$checkInd = 'No';
			echo ($strNew[$i]." can't be identifier character </br>"); 
		};
		$i++;
	};
	echo "</br>";
	if ($checkInd === 'No')
	{
		$strNew = $strNew." can't be identifier";
	} else {
		$strNew = $strNew." is identifier";
	};
	return $strNew;
};

echo checkIdentifier('');