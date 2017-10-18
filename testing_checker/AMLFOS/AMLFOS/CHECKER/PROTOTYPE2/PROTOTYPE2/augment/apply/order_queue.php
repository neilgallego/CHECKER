<!DOCTYPE html>
<html>
<head>
	<title>Order Queue</title>
	<meta http-equiv="refresh" content="2" > 
</head>
<body style="background-color: #E1F5C4;">
		<div name="table_list">
			<table align="center" border="1">
				
					<center>ORDER QUEUE</center>
					
				<th>TABLE</th><th>WAITER</th><th>QTY</th>
				<th>ORDER</th><th>STATUS</th>
			<tr>	
		<?php
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$connection = mysqli_connect($dbhost,$dbuser,$dbpass,'aml_db');

		if(! $connection){
			die('Could not Connect to Database' . mysql_error());
		}

		$query = "SELECT order_table,order_waiter,order_quantity,order_name,order_price,order_code
						 FROM order_db";

		$result = mysqli_query( $connection , $query );

		if(! $result){
			die('Could not get data from database : ' . mysql_error() );
		}

			$vartable = '';
			$varwaiter = '';
			$varquantity ='';
			$varname = '';
			$varprice = '';
			$varcode = '';	
	
	 	while($row = mysqli_fetch_array($result , MYSQL_NUM)){

			$vartable = $row[0];
			$varwaiter = $row[1];
			$varquantity = $row[2];
			$varname = $row[3];
			$varprice = $row[4];
			$varcode = $row[5];	

		   echo "<tr>";
		   echo	"<td><center>$vartable</center></td>";
		   echo	"<td><center>$varwaiter</center></td>";
		   echo	"<td><center>$varquantity</center></td>";
		   echo	"<td><center>$varname</center></td>";
		   echo "<td><input type='button' value='Change'></><input type='button' value='✓'></></td>";
		   echo "</tr>";
       						  
		   echo "<div>";  


     	}   
	mysqli_close($connection);
    ?>
    </tr>
			</table>
 </div>


</body>
</html>