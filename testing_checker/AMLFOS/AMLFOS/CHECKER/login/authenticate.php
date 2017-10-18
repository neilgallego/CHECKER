<?php 
	require 'dbconfig1.php';

	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}
	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM users WHERE username=:username AND password=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userpos'] = $row['position'];

        echo $_SESSION['sess_userpos'];
		session_write_close();

		if( $_SESSION['sess_userpos'] == "Admin"){
			header('Location: /login/admin/admin.php'); //admin.php ay temporary lang papalitan to ng right na pagreredirectan
		}else{
			if($_SESSION['sess_userpos'] == "Checker"){
			header('Location: ../prototype2/prototype2/augment/apply/index.php');//checker.php ay temporary lang papalitan to ng right na pagreredirectan
			} else {
				if($_SESSION['sess_userpos'] == "Cashier"){
					header('Location: /login/cashier/cashier.php'); //cashier.php ay temporary lang papalitan to ng right na pagreredirectan
				} else{
					echo "error logging in!";
				}
			}
		}
		
		
	}


?>