<html>
	<head>
		<title>controller create by admin</title>
	</head>
	<body>
	
	<?php 
		include 'helpers.php';
		
			if(isset($_POST['create'])){
				echo 'came to submit';
				$companyName = $_POST['companyName'];
				$address = $_POST['address'];
				$contactDetails = $_POST['contactDetails'];
				$contactPerson = $_POST['contactPerson'];
				$contactNumber = $_POST['contcatNumber'];
				$email = $_POST['Email'];
				$userAdmin = $_POST['userAdmin'];
				$userpass = md5($_POST['userpassword']);
				$userAccess = $_POST['userAccess'];
				$availableUsers = $_POST['availableUsers'];
				
				$resultquery = "INSERT INTO companyUsers(companyName,address,contactDetails,ContactPerson,Contactnumber,Email,userAdminLogin,userAdminPass,UserAccess,availableUsers)VALUES(
						'$companyName','$address','$contactDetails','$contactPerson','$contactNumber','$email','$userAdmin','$userpass','$userAccess','$availableUsers')";
				echo insertTable($resultquery);
			}
	?>
	
			<form action="controllerCreate.php" method="post">
				Company Name: <input type="text" name="companyName"><br>
				address: <input type="text" name="address"><br>
				contactDetails: <input type="text" name="contactDetails"><br>
				ContactPerson:<input type="text" name="contactPerson"><br>
				ContactNumber:<input type="tel" name="contcatNumber"><br>
				Email:<input type="email" name="Email"><br>
				userAdminLogin: <input type="text" name="userAdmin"><br>
				userAdminPassword: <input type="password" name="userpassword"><br>
				UserAccess: <input type="number" name="userAccess"><br>
				availableUsers: <input type="number" name="availableUsers"><br>
				<input type="submit" name="create" value="create">
			</form>
			
		
	</body>
</html>