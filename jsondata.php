<?php 
	// header('Content-Type: application/json; charset=utf-8');
	$mongoDB = new MongoClient();
	$database = $mongoDB->selectDB("ramath");
	$collectionOperations = $database->selectCollection('operations');

	
	
	// $jsondata = file_get_contents("operationsTest.json");
	// $json = json_decode($jsondata,true);
	// foreach ($json as $operation) {
	// 	$collection->insert($operation);
	// }
	$retrieved = $collectionOperations->find();

	$resultArray = array();
	$tempArray = array();	
	
	foreach ($retrieved as $item) {

		$tempArray = $item;
		array_push($resultArray, $tempArray);	
		
	}

	echo json_encode($resultArray, JSON_UNESCAPED_UNICODE);

?>