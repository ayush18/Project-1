<?php
session_start();
?>

<html>
<head>
	<title> Welcome to Online Quiz Website</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
	<style>
	body {
		background-image: url("back.jpg");
	}
		h1{
			font-size: 60px;
		}
		#big1{
			background-color: #EEC;
			margin-top: 10px;
			padding-top:5px;
		}
		.jumbotron{
		margin-top: 10px;
		padding:0px;
		padding-top:5px;
		
		padding-bottom:5px;
		
		}
		.ac{
			display:block;
			height:22%;
			
		}
		h3{
			font-size:110%;
		}
		img{
			margin-top:10%;
		}
		.ab1{
		margin-left:-5.5%;
		}
		.ab2{
		margin-left:.90%;
		}
		
	</style>
 
<head>
<body>
<?php
include("database.php");
extract($_POST);
if(isset($submit)){
	$rs=mysql_query("select * from p_user where email='$email' and pass='$pass'");
	if(mysql_num_rows($rs)<1){
		$found = 'N';
	}
	else{
		$_SESSION['email'] = $email;
	}
}
?>

<div class="container">


	<div class = "row">
	<div style="border-color:#FFF;background-color:#FFF">
	<div class = "jumbotron list-inline col-md-9" style="background-color:#EEC">
	<span class = "ab1"><a href = "#" class="btn btn-primary" style="border-color:#FFF;color:#FFF"> Home</a></span>
	<span class="ab2"><a href = "#" class="btn btn-primary" style="border-color:#FFF;color:#FFF"> About</a></span>
	<span class="ab2"><a href = "#" class="btn btn-primary" style="border-color:#FFF;color:#FFF"> Contact</a></span>
	<span class="dropdown ab2">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><button type="button" class="btn btn-primary" style="border-color:#FFF;color:#FFF">Quiz<span class="caret"></span></button>
	<ul class="dropdown-menu">
	<li><a href="#">Aptitude</a></li>
	<li><a href="#">Language Based</a></li>
	<li><a href="#">Bank</a></li>
	<li><a href="#">Enginnering</a></li>
	</ul>
	</a>
	</li>
	</div>
	
	
	<?if (!isset($_SESSION['email'])): ?>
	<form action="index.php" method="POST" >
		<div class="col-md-3 pull-right well" id="big1"  >
		<h1 class="text-center" style="font-family:Tangerine ">Login</h1>
		<!--<input type="text" class="form-control" name="name" placeholder="Full Name"><br>-->
		<input type="text" class="form-control" name="email" placeholder="Email"><br>
		<input type="password" class="form-control" name="pass" placeholder="Password"><br>
		<?php if(isset($found)){ echo '<b>* Invalid Email or password</b>';}?>
		<input type="submit" class="btn btn-primary col-md-offset-4 col-md-4" value="Login" name="submit">
		
		<br><br><br>
		Don't Have an Account? Sign Up.<br>
		<a href="register.php" class="btn btn-warning col-md-offset-4 col-md-4"> Register</a>
		


	
	
	</div>
	</form>
	
	</div>
	<ul class="main-con-list pull-left col-md-9">
		<div class="row-eq-height">
		<li class="span1 text-center well col-md-3 ac" style="background:#4B0082">
		<a href="http://www.allindiaexams.in/aptitude-questions-and-answers">
			<span class="img1"> 
				<img src="http://www.allindiaexams.in/public/uploads/1400528300.png" height="30px" alt="Aptitude">
			</span> 
			<h3 style="color:#FFF"> Aptitude </h3> 
		</a>
	</li>
		<li class="span2 text-center well col-md-3 col-md-offset-1 ac" style="background:#990000">
		<a href="http://www.allindiaexams.in/bank">
			<span class="img1"> 
				<img src="http://www.allindiaexams.in/public/uploads/1428598765.png" height="30px" alt="Bank">
			</span> 
			<h3 style="color:#FFF"> Bank </h3> 
		</a>
	</li>
	<li class="span3 text-center well col-md-3 col-md-offset-1 ac" style="background:#fa8a26">
		<a href="http://www.allindiaexams.in/engineering">
			<span class="img1"> 
				<img src="http://www.allindiaexams.in/public/uploads/1444474933.png" height="30px" alt="Engineering">
			</span> 
			<h3 style="color:#FFF"> Engineering </h3> 
		</a>
	</li>
	</div>
	<div class="row-eq-height">
		<li class="span4 text-center well col-md-3 ac" style="background:#8B4513">
		<a href="http://www.allindiaexams.in/english">
			<span class="img1"> 
				<img src="http://www.allindiaexams.in/public/uploads/1408133868.png" height="30px" alt="Aptitude">
			</span> 
			<h3 style="color:#FFF"> English </h3> 
		</a>
	</li>
		<li class="span5 text-center well col-md-3 col-md-offset-1 ac" style="background:#228B22">
		<a href="http://www.allindiaexams.in/general-knowledge-questions-answers">
			<span class="img1"> 
				<img src="http://www.allindiaexams.in/public/uploads/1400528596.png" height="30px" alt="Bank">
			</span> 
			<h3 style="color:#FFF"> GK </h3> 
		</a>
	</li>
	<li class="span6 text-center well col-md-3 col-md-offset-1 ac" style="background:#fa8678">
		<a href="http://www.allindiaexams.in/interview-questions">
			<span class="img1"> 
				<img src="http://www.allindiaexams.in/public/uploads/1444474933.png" height="30px" alt="Engineering">
			</span> 
			<h3 style="color:#FFF"> Interview </h3> 
		</a>
	</li>
	
	</div>
	</ul>
	
	</div>
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
<?php

?>

</html>