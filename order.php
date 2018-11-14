<?php
//process order
include('client/database_connection.php');

if(isset($_POST["order"]))
{
    $query = "
    INSERT INTO orders id, firstname,lastname,topic) 
    VALUES (:firstname, :lastname, :topic);
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':firstname'=> $_POST['firstname'],
            ':lastname'=> $_POST['lastname'],
            ':topic'=> $_POST['topic'],
        )
        );
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>access point</title>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	</head>
	<body>
		<br />
		<div class="container" style="width:100%; max-width:600px">
			<h2 align="center"><img src="newlogo.png" alt="" width="400px"></h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading"><h4><i class="fa fa-lock"></i> Register</h4></div>
				<div class="panel-body">
					<form method="post" id="register_form">
						
						<div class="form-group">
							<label><i class="fa fa-user"></i> First name</label>
							<input type="text" name="firstname" class="form-control" pattern="[a-zA-Z ]+" required />
						</div>
						<div class="form-group">
							<label><i class="fa fa-envelope"></i>lastname</label>
							<input type="text" name="lastname" class="form-control" required />
						</div>
						<div class="form-group">
							<label><i class="fa fa-envelope"></i>Topic</label>
							<input type="text" name="topic" class="form-control" required />
						</div>
						<div class="form-group">
							<input type="submit" name="register" id="register" value="Register" class="btn btn-info" />
						</div>
					</form>
					<p align="right"><a href="login.php">Login</a></p>
				</div>
			</div>
		</div>
	</body>
</html>