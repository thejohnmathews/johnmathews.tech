<?php
// Start PHP session
session_start();

// include congig.php
require_once('../config.php'); 

// trigger status file
$file = 'trigger_status.txt';

// display form
?>
<form action="trigger.php" method="POST">
    <label for="key">Enter Secret Key to Open the Door:</label>
    <input type="text" name="key" required>
    <input type="submit" value="Submit"> 
</form>
<?php

// If a POST request is made to set the trigger
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['key'])) {
    $inputKey = $_POST['key']; // Get the key from the form input

    // Check if the entered key matches the stored secret key
    if ($inputKey === SECRETKEY){

        // set file when trigger is activated
        file_put_contents($file, 'true');
        sleep(7);
        file_put_contents($file, 'false');
        
        // may not need json anymore
        json_encode(["trigger" => true, "message" => "Motor triggered successfully!"]);
        echo "welcome";
    } else {
        json_encode(["trigger" => false, "message" => "Invalid key!"]);
        echo "invalid";
    }
}
?>
