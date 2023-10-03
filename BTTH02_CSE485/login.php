<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        h5:hover{
            color: #000 !important;
        }
    </style>
</head>
<body>
	<?php
		session_start();
		if (isset($_SESSION['isLogin'])) {
  		header('location: ./admin/index.php');
}
?>
    <div class="main">
    <?php
         include "header.php"; 
        ?>

	<div class="col-md-12 d-flex justify-content-center h-50 mt-5">
			<div class="card">
				<div class="header">
					<h3>Sign In</h3>
					<div class="d-flex justify-content-end header_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="content">
					<form>
						<div class="input-group form-group">
							<div class="input-group-prepend ">
								<span class="input-group-text"style="border-radius:0;" ><i class="fas fa-user " style="padding-left: 5px"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="username">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend mt-2">
								<span class="input-group-text" style="border-radius:0;"><i class="fas fa-key " style="padding-left: 5px"></i></span>
							</div>
							<input type="password" class="form-control mt-2" placeholder="password">
						</div>
						<div class="row align-items-center remember mt-2">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<div class="btn btn-success login_btn mt-2" style="float:right; background: #FFC312; color:black">Login</div>
						</div>
					</form>
				</div>
				<div class="footer">
					<div class="d-flex justify-content-center footer_wrap ">
						Don't have an account?<a href="#" class=" text-decoration-none" style="color: #FFC312">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#" class=" text-decoration-none"   style="color: #FFC312">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
        
        
    </div>
</body>
</html>