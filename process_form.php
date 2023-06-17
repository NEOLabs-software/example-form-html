<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $country = $_POST["country"];
    $subject = $_POST["subject"];

    // Prepare the data to be written
    $data = "First Name: $firstname\n";
    $data .= "Last Name: $lastname\n";
    $data .= "Country: $country\n";
    $data .= "Subject: $subject\n";

    // Write the data to the file
    file_put_contents("out.txt", $data, FILE_APPEND);

    // Redirect back to the HTML form
    header("Location: index.html");
    exit();
}
?>


