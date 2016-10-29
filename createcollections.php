

<?php


  // Configuration
	$dbhost = 'localhost';
	$dbname = 'tripadvisor';

	// Connect to tripadvisor database
	$m = new MongoClient();
	echo "Connect to Mongo successfully <br>";
	$db = $m->$dbname;
  echo "Database $dbname selected <br>";

// adds hotels to collection hotels

  // $hotels = explode("\n",file_get_contents('offering.txt'));
  // foreach ($hotels as $hotel) {

		// Insert new documents into the hotels collection

		// $ho = json_decode($hotel,true);

		//$db->hotels->save($ho);
  	//var_dump($db->lastError());  //debugging
		//  echo "<pre>";
		//  print_r($ho);
		//  echo "</pre>";
//  }

	// adds reviews to collection reviews
	// $time = 30;
	// $reviews = @fopen("review.txt","r");
	// if ($reviews) {
	// 	while (($review = fgets($reviews,4096)) !== false) {
	//
	// 		$re = json_decode($review,true);
	//
	// 		// echo "<pre>";
	// 		// print_r($re);
	// 		// echo "</pre>";
	//
	// 		// $db->reviews->save($re);
	// 		set_time_limit($time);
	// 	}
	// 	fclose($reviews);
	// }
  ?>
