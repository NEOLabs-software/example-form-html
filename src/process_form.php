<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $problem = $_POST["problem"];
    $describe = $_POST["describe"];

    // Prepare the data to be written
    $data = "Name: $name\n";
    $data .= "Email: $name\n";
    $data .= "Problem Type: $problem\n";
    $data .= "Problem Description: $describe\n";

    // Write the data to the file
    file_put_contents("out.txt", $data);

    // Redirect back to the HTML form
    header("Location: index.html");
    exit();
}
?>


