<?php
require_once('connect.php');
$form_fname = $_POST['fname'];
$form_lname = $_POST['lname'];
$form_email = $_POST['email'];

// Inserting data inside the db_intprog users table
$sql = "INSERT INTO $tbname (firstname, lastname, email) VALUES('$form_fname', '$form_lname', '$form_email')";

// inserted data from db message
if ($conn->query($sql) === TRUE) {
    echo "Record was successfully added! <br> <a href='display.php'>Go to display</a>";
} else {
    echo "Error inserting data! <br> <a href='register.php'>Go to form</a>";
}

// CLOSE CONNECTION
$conn->close();

?>