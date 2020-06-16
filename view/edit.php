<?php
include '../controller/show.class.php';
$conn_select_user = new Select_class();
$userId =$_GET['id'];
$read_edit_user = $conn_select_user->select_edit_user($userId);
$row = mysqli_fetch_array($read_edit_user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
</head>
<body>
    <div class="form-edit-wrapper">

    <form method="post" action="">
			<h2>Edit user</h2>
			<input type="text" name="fname" value="<?php echo $row['fname']?>"/><br>
			<input type="text" name="lname" value="<?php echo $row['lname']?>"/><br>
			<input type="text" name="username" value="<?php echo $row['username']?>"/><br>
			<input type="password" name="password" value="<?php echo $row['password']?>"/><br>
			<input type="email" name="email" value="<?php echo $row['email']?>"/><br>

			<input type="submit" value="Submit" name="update-btn"/>	
	

			</form>
 
    </div>
</body>
</html>