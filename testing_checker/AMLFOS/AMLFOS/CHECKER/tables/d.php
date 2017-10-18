<?php
 require_once('dbconfig.php');
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<script src="../bootstrap/bootstrap-3.3.7/dist/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

<script>
function showDiv() {
    document.getElementById('option').style.display = "block";
}

function redirect(clicked_id) {
	if (clicked_id == "order_button"){
				window.location.href = "order.php";
	} else{
		if(clicked_id == "add_order_button"){
				window.location.href = "#add_order.php";
		} else {
			if(clicked_id == "change_order_button"){
				window.location.href = "#change_order.php";
			}
		}
	}
}
</script>
<style>
body {
	background-color: #dadee5; 
}
.blank_row
{
    height: 10px !important; /* overwrites any other rules */
    background-color: #FFFFFF;
}
table 
{
	empty-cells: show;
	 border-collapse: separate;
  border-spacing: 35px 35px;
}
</style>


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
						 FROM table_db where table_column ='D'";

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
		   if ($varcolumn == 'D7'){
         	echo "</tr>";
         }elseif ($varcolumn == 'D14'){ 
         	echo "</tr>";
         }
         
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
    ?>
    </tr>
			</table>
 </div>	<!-- end of div modal-->	

</body>

</body>
</html>