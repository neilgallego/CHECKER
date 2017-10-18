<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<script src="../bootstrap/bootstrap-3.3.7/dist/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<?php 
    session_start();
    $position = $_SESSION['sess_userpos'];
    if(!isset($_SESSION['sess_username']) && $position!="checker"){
      header('Location: ../login/index.php');
    }
?>
<style>

.nav-pills{
    disp4lay: inline-block;
}

.nav-pills > .active > a, .nav-pills > .active > a:hover, .nav-pills > .active > a:focus{
    background-color: red;
}
.nav-pills a {
    color: black;
}

.nav-pills > li > a {
    margin-right:10px; /* pill spread */
    font-size: 30px;
}

body {
	background-color: #dadee5;
	overflow: hidden;

}

</style>
<body>
		<div align="right">
			<b id="welcome">Welcome : <i><?php echo $_SESSION['sess_username']; ?></i></b>
			<br>
			<form action="../login/logout.php" method="post">
			<input href="../login/logout.php" type="submit" class="signout btn btn-danger" style="background-color:#8e0000;color:#FFF;border-color:#8e0000;" value="Sign Out" name="logout">
			</form>
		</div>
<br></body>
			

<ul class="nav nav-pills" role="tablist" style="border:none; position:absolute; top: 1%; left:1.5%;">
	<li class="active" role="presentation" align="left"><a href="tables.php" target="iframe_a">ORDER</a></li>
</ul>
			
<iframe height="900px" width="100%"  style="border:none; position:absolute; top: 10.5%;" src="tables.php" name="iframe_a"></iframe>



<!-- <iframe height="600px" width="21%" src="/AMLFOS/AMLFOS/CHECKER/PROTOTYPE2/prototype2/augment/apply/queue.php" name="iframe_d" style="position:absolute; top: 0%; left: 0%; right: 20%; z-index: 2;">
</iframe> -->