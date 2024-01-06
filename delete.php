<?php
//  request connection
require_once("connect.php");

// request ID
$id = $_REQUEST['id'];

// deleting the data from database
$query = "DELETE FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);

echo '<script type="text/javascript">
        alert("Record deleted successfully.");
            window.location.href="display.php";
        </script>';
?>