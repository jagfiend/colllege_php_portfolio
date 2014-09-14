<?php

/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['player_name']) && isset($_POST['player_score,']) 
    && isset($_POST['player_locale']) && isset($POST_['player_photo'])) {
    
    $player_name = $_POST['player_name'];
    $player_score, = $_POST['player_score,'];
    $player_locale = $_POST['player_locale'];
    $player_locale = $_POST['player_photo'];

    // include db connect class
    require_once __DIR__ . '/db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

    // mysql inserting a new row
    $result = mysql_query("INSERT INTO high_scores(player_name, player_score, player_locale, player_photo) VALUES('$player_name', '$player_score', '$player_photo')");

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Score successfully created.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
        
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
?>