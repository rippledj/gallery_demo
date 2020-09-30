<?php

// Get file contents with database JSON
$contents = file_get_contents(__DIR__ . "/../resources/demo_files/landscapes.json");
// Convert to JSON
$json = json_decode($contents);
print_r($json);

// Declare database connection vars
$servername = 'localhost';
$username = 'root';
$password = 'XOjRD*P8ymp0^r!%zrHzkcR%NyXGFE^rbYDn8QMP2w3eR@6hwNEXU17gOI5i';
$dbname = 'gallery';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Insert user data
$sql = "
  INSERT INTO user_data
  (`name`, `phone`, `email`, `bio`, `avatar`)
  VALUES ('".$json->name."','".$json->phone."','".$json->email."','".$json->bio."','".$json->avatar."')";

// Handle errors
if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
   $last_id = $conn->insert_id;
} else {
   echo "Error: " . $sql . "" . mysqli_error($conn);
}

// Insert the photos data
foreach($json->album as $photo){

  // Convert `featured` to an integer value
  if($photo->featured == true) $photo->featured = 1;
  else $photo->featured = 0;

  // Insert the photos
  $sql = "
    INSERT INTO photos
    (`user_id`, `title`, `description`, `img_filepath`, `date`, `featured`)
    VALUES (".$last_id.",'".$photo->title."','".$photo->description."','".$photo->img."','".$photo->date."','".$photo->featured."')";

  // Handle errors
  if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
  } else {
     echo "Error: " . $sql . "" . mysqli_error($conn);
  }
}

// Close connection
$conn->close();



?>
