<?php
include "ru_class.php";

$ru = new rentalsUnited();


//working code and can be used
$mycal = ($ru->getCalendar(1573099));

print_r($mycal);
echo $mycal->ResponseID;
/*
echo $mycal->PropertyBlock->Block[0]->DateFrom;
$arr = $mycal->PropertyBlock;
var_dump($arr);
echo "array count: " . count($arr->Block);
*/

$properties = $ru->getOwnerProperties(429335);
//var_dump($properties);
$arr[] = $properties;
//var_dump($arr[0]->Properties);
echo "array count!: " . count($arr[0]->Properties->Property) . "\n";
//echo $arr[0]->Properties->Property[0]->Name . "\n";
//echo $arr[0]->Properties->Property[1]->Name . "\n";
foreach ($arr[0]->Properties->Property as $value){
	echo $value->Name . "\n";
	$property = $ru->getProperty($value->ID);
	$propCal = $ru->getCalendar($value->ID);
	//$propBlocks = listPropertyBlocks($value->ID);
	//var_dump($propBlocks);
	echo "ID: " . $value->ID . "\n";
	var_dump($property->Property->Images);
	echo "IsActive: " . $property->Property->IsActive . "\n";
	echo "CleaningPrice : " . $property->Property->CleaningPrice . "\n";
	echo "StandardGuests: " . $property->Property->StandardGuests . "\n";
	echo "CanSleepMax: " . $property->Property->CanSleepMax . "\n";
	echo "PropertyTypeID: " . $property->Property->PropertyTypeID . "\n";
	echo "Street: " . $property->Property->Street . "\n";
	echo "ZipCode: " . $property->Property->ZipCode . "\n";
	echo "Latitude: " . $property->Property->Coordinates->Latitude . "\n";
	echo "Longitude: " . $property->Property->Coordinates->Longitude  . "\n";
	echo "Landlord: " . $property->Property->ArrivalInstructions->Landlord . "\n";
	//var_dump($propCal);
	var_dump($propCal);
;
}

?>