<?php
  require('index.html');


  // Configuration
	$dbhost = 'localhost';
	$dbname = 'tripadvisor';

	// Connect to tripadvisor database
	$m = new MongoClient();
	//echo "Connect to Mongo successfully <br>";
	$db = $m->$dbname;
  //echo "Database $dbname selected <br>";

  if (isset($_GET['city'])!="") {

  $city = $_GET['city'];

  $stars = (int)$_GET['stars'];

  $query = array("address.locality"=> new MongoRegex("/$city/i"),
                  "hotel_class" => $stars);
  $results = $db->hotels->find($query);

  foreach($results as $result){
    echo "<div class=\"hotels container\">";
    echo "Hotel Class: ".$result['hotel_class']."<br/>";
    echo "Name: ".$result['name']."<br/>";
    echo "Address: ".$result['address']['street-address'].
            " ".$result['address']['locality'].
            ", ".$result['address']['region'].
            " ".$result['address']['postal-code']."<br/>";
    echo "Link: <a href=".$result['url']."><img alt=\"TripAdvisor\" src=\"resources/tripadvisor-16.png\"></a><br/>";
    echo "Offering id: ".$result['id']."<br/>";
    echo "</div>";
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
  }
}

  ?>
