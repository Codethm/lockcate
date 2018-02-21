<?php
include_once("connect_db/connect_db.php");



if(!(empty($_GET['firstname'])&&empty($_GET['lastname'])&&empty($_GET['email']))){
    $id = $_GET['id'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
	$email = $_GET['email'];
    
	$sql = "UPDATE account SET firstName='$firstname', lastName='$lastname', email='$email' WHERE idaccount=$id;";
	echo $sql;

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	
	header("Location: show.php");
}


$sql = "SELECT * FROM account WHERE idaccount =". $_GET['update'];

$stmt = $conn->prepare($sql);
$stmt->execute();
$result =$stmt->fetch();

?>







<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Website CSS style -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Website Font style -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" href="css/register.css">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

</head>
<body>
<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h1>Edit</h1>
					<form class="" method="GET" action="edit.php" id="form">
                        <input hidden type="text" name="id" value="<?php echo $result['idaccount'] ?>">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" disabled name="username" id="username" value="<?php echo $result['username'] ?>" placeholder="Enter your Username"/>
								</div>
							</div>
						</div>
                    
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $result['firstName'] ?>" placeholder="Enter your First Name"/>
								</div>
							</div>
						</div>

                        <div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $result['lastName'] ?>" placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" value="<?php echo $result['email'] ?>" placeholder="Enter your Email"/>
								</div>
							</div>
                        </div>
                        
						<div class="form-group ">
							<input type="submit" form="form" value="Edit" id="button" class="btn btn-primary btn-lg btn-block login-button">
						</div>
						
					</form>
				</div>
			</div>
		</div>
</body>