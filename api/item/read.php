<?php

/*      Item/read.php      */

header("Access-Control-Allow-Origin: *");
header("Content-Type: Application/json; charset=UTF-8");

include_once "../config/dbclass.php";
include_once "../classes/item.php";

$conn = DBClass::getInstance();

$item = new Item($conn);

$stmt = $item->read();
$num = $stmt->num_rows;

if($num > 0)
{
	$item_array = array();
	$item_array["records"] = array();

	while($row = $stmt->fetch_assoc())
	{
		extract($row);

		$item_record = array(
			"cat_id" => $cat_id,
			"item_id" => $item_id,
			"qty" => $qty,
			"cost" => $cost
		)

		array_push($item_array["records"], $item_record);
	}

	http_response_code(200);

	echo json_encode($item_array);
}
else
{
	http_response_code(404);

	echo json_encode(
		array("message" => "No items found. ");
	);
}

?>