<?php
require('connect.php');
$result = mysqli_query($conn, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>View Records</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form">
        <p><a href="register.php">Insert New Record</a></p>
        <h2>View Records</h2>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th><strong>ID #</strong></th>
                    <th><strong>Firstname</strong></th>
                    <th><strong>Lastname</strong></th>
                    <th><strong>Email</strong></th>
                </tr>
            </thead>

            <!-- this is the code for fetching the database results/data -->
            <tbody>
                <?php
	    while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td align="center"><?php echo $row['id']; ?></td>
                    <td align="center"><?php echo $row['firstname']; ?></td>
                    <td align="center"><?php echo $row['lastname']; ?></td>
                    <td align="center"><?php echo $row['email']; ?></td>
                    <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                    <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                </tr>
                <?php } mysqli_close($conn);?>
            </tbody>
        </table>

    </div>
</body>

</html>