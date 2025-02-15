<?php
// Start PHP session
session_start();

// Include config.php
require_once('../config.php'); 

// Trigger status file
$file = 'trigger_status.txt';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luis el Portero 2</title>
    <link rel="stylesheet" href="../styles.css"> 
    <style>
        /* Ensure responsiveness */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
            background-color: #f8f8f8;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }

        label {
            font-size: 1.2em;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #333;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #555;
        }

        .message {
            margin-top: 15px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

    <form id="triggerForm">
        <label for="key">Luis el Portero 2</label>
        <label for="key">Enter Key to Activate Door:</label>
        <input type="text" name="key" id="key" required>
        <input type="submit" value="Submit">
    </form>

    <div class="message" id="responseMessage"></div>

    <script>
        document.getElementById("triggerForm").addEventListener("submit", function(event) {
            event.preventDefault(); 
            
            const key = document.getElementById("key").value;
            const responseMessage = document.getElementById("responseMessage");

            fetch("trigger.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "key=" + encodeURIComponent(key)
            })
            .catch(error => console.error("Error:", error));
        });
    </script>

</body>
</html>

<?php
// If a POST request is made to set the trigger
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['key'])){

    // get key from form
    $inputKey = $_POST['key']; 

    // Check if the entered key matches the stored secret key
    if ($inputKey === SECRETKEY){

        // set file if key is entered correctly
        file_put_contents($file, time());
    }
}
?>
