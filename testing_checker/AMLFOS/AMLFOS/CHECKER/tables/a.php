
<!DOCTYPE html>
<html>
<head>
	<title></title>


<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<script src="../bootstrap/bootstrap-3.3.7/dist/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<style>
.blank_row
{
    height: 10px !important; /* overwrites any other rules */
    background-color: #FFFFFF;
}
body {
	background-color:#dadee5;
}
table 
{
	empty-cells: show;
	 border-collapse: separate;
  border-spacing: 35px 35px;
} 
</style>
</head>
<body>
<div name="table_list">
			<table align="center">
				
			<tr>	
		<?php


		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$connection = mysqli_connect($dbhost,$dbuser,$dbpass,'aml_db');

		if(! $connection){
			die('Could not Connect to Database' . mysql_error());
		}

		$query = "SELECT table_name,table_column 
						 FROM table_db where table_column ='A' order BY table_name";

		$result = mysqli_query( $connection , $query );

		if(! $result){
			die('Could not get data from database : ' . mysql_error() );
		}

	$varletter = '';
	$varcolumn = '';
	
	
	 	while($row = mysqli_fetch_array($result , MYSQL_NUM)){

		 $varhash = '#';
         $varmodal = 'myModal';
         $varcolumn = $row[0];
         $varletter = $row[1];
         
		   echo	'<td><input id="'. $varcolumn .' " '; 
		   echo "type='button' class='btn btn-warning btn-lg' ";
		   echo 'data-toggle="modal" data-target=" '. $varhash.$varmodal.$varcolumn .' " ';
		   echo 'onclick="showDiv()" value="'. $varcolumn .'" ';
		   echo "></td>";
         
       ?>						
</div>  
<div> <!-- start of div modal-->  

 <?php

 $tablemodal = $varmodal.$varcolumn;
            echo <<<FRAG
            <div class="modal fade" id=$tablemodal role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"> $varcolumn </h4>
				</div>
					<div class="modal-body">
						 <div id="option" align="center" align="center">
							<form action="handler.php" method="post" target="iframe_a">
								<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									</form>
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" id="add_order_button" value="MODIFY">
							</div>
					</div>
									
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>	

FRAG;
     }   

	mysqli_close($connection);
    ?>
    </tr>
			</table>
 </div>	<!-- end of div modal-->	

</body>
</html>