<link rel="stylesheet" href="../../../../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<script src="../../../../bootstrap/bootstrap-3.3.7/dist/js/jquery-3.2.1.min.js"></script>
<script src="../../../../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

<?php
require_once('dbcontroller.php');
require_once 'dbconfig1.php';

$db_handle = new DBController();
?>



<!DOCTYPE html>
<html>
<center>
<h1>ASSIGN WAITERS</h1>
	<div>
					<form action="" name="assigned" method="POST">
					<!--1-->
				Waiter 1: <select name="waiter1">
				<option value=""></option>
<?php
		$waiter_array = $db_handle->runQuery("SELECT emp_id, Nname FROM employee ORDER BY Nname ASC");
		
		if(!empty($waiter_array)) {
			foreach($waiter_array as $key=>$value) {
				
				?>
						
						<option value="<?php echo $waiter_array[$key]['Nname']; ?>"> <?php echo $waiter_array[$key]['Nname']; ?></option>
					
			
			<?php
			}
		}
?>
</select>


<!--2-->
				Waiter 2: <select name="waiter2">
				<option value=""></option>
<?php
		$waiter_array = $db_handle->runQuery("SELECT emp_id, Nname FROM employee ORDER BY Nname ASC");
		
		if(!empty($waiter_array)) {
			foreach($waiter_array as $key=>$value) {
				
				?>
			
						<option value="<?php echo $waiter_array[$key]['Nname']; ?>"><?php echo $waiter_array[$key]['Nname']; ?></option>
					
			
			<?php
			}
		}
?>
</select>

<!--3-->
				Waiter 3: <select name="waiter3">
				<option value=""></option>
<?php
		$waiter_array = $db_handle->runQuery("SELECT emp_id, Nname FROM employee ORDER BY Nname ASC");
		
		if(!empty($waiter_array)) {
			foreach($waiter_array as $key=>$value) {
				
				?>
			
						<option value="<?php echo $waiter_array[$key]['Nname']; ?>"><?php echo $waiter_array[$key]['Nname']; ?></option>
					
			
			<?php
			}
		}
?>
</select>

<!--4-->
				Waiter 4: <select name="waiter4">
				<option value=""></option>
<?php
		$waiter_array = $db_handle->runQuery("SELECT emp_id, Nname FROM employee ORDER BY Nname ASC");
		
		if(!empty($waiter_array)) {
			foreach($waiter_array as $key=>$value) {
				
				?>
			
						<option value="<?php echo $waiter_array[$key]['Nname']; ?>"><?php echo $waiter_array[$key]['Nname']; ?></option>
					
			
			<?php
			}
		}
?>

</select>
<br>
<br>
<br>
<input type="submit" name="submit" value="Confirm" class="btn btn-warning btn-lg">
</form>
				</div>
				
				
				
</html>
<?php
if(isset($_POST["submit"])){

$uid = 0;
$waiter1 = $_POST['waiter1'];
$waiter2 = $_POST['waiter2'];
$waiter3 = $_POST['waiter3'];
$waiter4 = $_POST['waiter4'];

$sql = $DB_con->prepare('UPDATE assigned_waiters 
SET d_id=:id,waiter1=:w1, waiter2=:w2, waiter3=:w3, waiter4=:w4, time=NOW(), date=NOW()');

if(empty($waiter1)){
			$errMSG = "<div class='error'>Please select a waiter.</div>";
		}
		else if(empty($waiter2)){
			$errMSG = "<div class='error'>Please select a waiter</div>";
			
		}
		else if(empty($waiter3)){
			$errMSG = "<div class='error'>Please select a waiter</div>";
			
		}
		else if(empty($waiter4)){
			$errMSG = "<div class='error'>Please select a waiter</div>";
		}
		
// if no error occured, continue ....
		   if(!isset($errMSG))
		{
			$sql->bindParam(':id',$uid);
			$sql->bindParam(':w1',$waiter1);
			$sql->bindParam(':w2',$waiter2);
			$sql->bindParam(':w3',$waiter3);
			$sql->bindParam(':w4',$waiter4);
			
			
			if($sql->execute())
			{
				header("Location: assign_waiters.php");
			}
			else
			{
				$errMSG = "<div class='error'>error while Assigning....</div>";
			}
		}		


}

?>