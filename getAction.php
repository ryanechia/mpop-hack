<?php
$servername = "localhost";
$username = ""; //obfuscated
$password = ""; //obfuscated
$database = ""; //obfuscated

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    // exit;
}

// Retrieve data from Query String
$ctrl = $_GET['ctrl'];
$alt = $_GET['alt'];
$shift = $_GET['shift'];
$keycode = $_GET['keycode'];

//build query
$query = "SELECT action FROM ryanechi_mpop.shortcut WHERE";

if($ctrl == 1 || $ctrl == 0)
    $query .= " ctrl = $ctrl";

if($alt == 1 || $alt == 0)
   $query .= " AND alt = $alt";

if($shift == 1 || $shift == 0)
   $query .= " AND shift = $shift";

if(is_numeric($keycode))
   $query .= " AND keycode = $keycode";
	
//Execute query
if(!$result = $conn->query($query)){
    echo "<p>Sorry, the website is experiencing problems.</p>";
    exit;
}

//check for results
if ($result->num_rows === 0) {    
    echo "<p>no match for an action using this action</p>";
}else{
    //Build Result String (only one result)
    $display_string = "<p>";
    $action = $result->fetch_assoc();

    echo "Result : " . $action['action'] . "<br>";
    $display_string .= "</p>";

    echo $display_string;
}


?>