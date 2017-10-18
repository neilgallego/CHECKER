<?php 
    session_start();
    $position = $_SESSION['sess_userpos'];
    if(!isset($_SESSION['sess_username']) && $position!="checker"){
      header('Location: ../login/index.php');
    }
?>
<?php
 require_once('dbconfig.php');
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<script src="../bootstrap/bootstrap-3.3.7/dist/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<style>
body {
	background-color: gray; 
	overflow: hidden;
	height: 30%;
}

.nav-pills{
    display: inline-block;

}

.nav-pills > li > a {
    margin-right:10px; /* pill spread */
    font-family: "kodakku"; /* font */
    font-size: 20px;
	background-color: red;
}

h1{
	color: white;
}
</style>

<body>
<div name="tables_list">
			<table align="center">
		
				<tr >
				<h1 align="center">SELECT TABLE</h1>
				</tr>

				<tr class="blank_row">
					<td colspan="3"></td>
				</tr>
				<tr>
				<!-- NAVIGATION FOR TABLES -->		
				<div class="container">
				  <div class="text-center">
					 <ul class="nav nav-pills red" role="tablist">
						 <li class="active" role="presentation"><a href="a.php" target="iframe_b" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;">A TABLES</a></li>
						 <li class="active" role="presentation"><a href="b.php" target="iframe_b" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;">B TABLES</a></li>
						 <li class="active" role="presentation"><a href="c.php" target="iframe_b" style="background-color:#228B22;color:#FFF;border-color:#228B22;">C TABLES</a></li>
						 <li class="active" role="presentation"><a href="d.php" target="iframe_b" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;">D TABLES</a></li>
					  </ul>
				  </div>
				</div>
				
				<tr class="blank_row">
					<td colspan="3"></td>
				</tr>
				
				<iframe height="300px" width="100%"  style="border:none; position:relative; top: 20px; left:0%;" src="a.php" name="iframe_b"></iframe>
				


				

</div>
</body>
</html>