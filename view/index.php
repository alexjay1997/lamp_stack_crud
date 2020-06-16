<?php
include '../controller/create.class.php';

$conn_create = new Create_class();

$create_user = $conn_create->create_user();



include '../controller/show.class.php';

$conn = new Select_class();
$read = $conn->show_all_users();
//$read_results = mysqli_fetch_assoc($read);

?>

<!Doctype html>



<html>
<head>
<title>
	Lamp Stack Crud 
</title>
<style>
.form-wrapper{
margin:0 auto;
max-width:400px;
height:auto;

padding:20px;
border-radius: 50px;

background: #ffffff;
box-shadow:  30px 30px 80px #d9d9d9, 
             -30px -30px 80px #ffffff;
}
form{
display:flex;
flex-direction:column;

width:100%;
border:px solid blue;
}
form input{
margin:5px;
padding:10px;
border-radius: 50px;
background: #ffffff;
box-shadow:  30px 30px 80px #ffffff, 
             -30px -30px 80px #ffffff;
}
th{
	color:red;
}
td{color:green;}
</style>
</head>
<body>
	<div class="page-container">
		<div class="form-wrapper">
			
			<form method="post" action="">
			<h2>Register</h2>
			<input type="text" name="fname" placeholder="Firstname"/>
			<input type="text" name="lname" placeholder="Lastname"/>
			<input type="text" name="username" placeholder="Username"/>
			<input type="password" name="password" placeholder="Password"/>
			<input type="email" name="email" placeholder="Email"/><br>

			<input type="submit" value="Submit" name="reg-btn"/>	
	

			</form>
			</div>	<br>
			
			<table>
				<tr>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Username</th>
					<th>Email</th>
				</tr>
				
				<tr>
					 <?php
				
				foreach($read as $row){
				echo "<td>".$row['userId']."</td>";
				echo "<td>".$row['fname']."</td>";
				echo "<td>".$row['lname']."</td>";
				echo "<td>".$row['username']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td><a href='edit.php?id=$row[userId]'>Edit</a></td>";
				?>
					
				</tr>
				<?php
				}
				?>
			</table>
			

</div>
</body>
</html>

