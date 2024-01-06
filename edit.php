<?php
// require connection for the localhost
require_once("connect.php");

// id searching
$id = $_REQUEST['id'];
$query = "SELECT * FROM users WHERE id = '".$id."' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit  Account</title>
</head>
<body>

<?php
// status for the selected record
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $id =$_REQUEST['id'];
	$firstname =$_REQUEST['fname'];
	$lastname = $_REQUEST['lname'];
	$email = $_REQUEST['email'];

// code for update from database
	$update="UPDATE users SET id ='$id', firstname ='$firstname', lastname ='$lastname', email ='$email' WHERE id = '$id'";
	mysqli_query($conn, $update);

	$status = "Record Updated Successfully. </br></br><a href='display.php'>View Updated Record</a>";
	echo '<p style="color:#FF0000;">'.$status.'</p>';
	}
	else{

?>


<p><a href="display.php">View Records</a></p>

<form action="" method="post">
<input type="hidden" name="new" value="1" />
<table style="margin-top:30px;" align="center" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td align="center" colspan="2"><h1>Edit User Account</h1></td>
    </tr>
    <tr>
      <td>ID</td>
      <td><input type="number" type="
      hidden" name="id" value="<?php echo $row['id'];?>"></td>
    </tr>
    <tr>
      <td>Firstname</td>
      <td><input type="text" name="fname" value="<?php echo $row['firstname'];?>"></td>
    </tr>
    <tr>
      <td>Lastname</td>
      <td><input type="text" name="lname" value="<?php echo $row['lastname'];?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
    </tr>
    <tr>
      <td align="right" colspan="2"><br><input type="submit"></td>
    </tr>
  </table>
</form>

<?php } ?>

</body>
</html>