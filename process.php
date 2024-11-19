<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];

    // Validate that inputs are not empty
    if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e)) {
        echo "<p>Error: All inputs must be provided.</p>";
        exit();
    }

    // Escape the input values to avoid command injection
    $a = escapeshellarg($a);
    $b = escapeshellarg($b);
    $c = escapeshellarg($c);
    $d = escapeshellarg($d);
    $e = escapeshellarg($e);

    // Create the command to call the Python script with the input values
    $command = "python3 data_management.py $a $b $c $d $e 2>&1";

    // Execute the Python script and capture the output
    $output = shell_exec($command);

    // Display the result or error messages
    if (empty($output)) {
        echo "<p>Error: Failed to execute the Python script or no output returned.</p>";
    } else {
        echo "<pre>$output</pre>";  // Display output or error messages
    }
} else {
    // If the request is not POST, display an error
    echo "<p>Error: Invalid request method. Please submit the form.</p>";
}
?>