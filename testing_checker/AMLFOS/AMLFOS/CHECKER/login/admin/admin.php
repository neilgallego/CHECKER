<?php 
    session_start();
    $position = $_SESSION['sess_userpos'];
    if(!isset($_SESSION['sess_username']) && $position!="admin"){
      header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html>

  <body>
    
    
     <div>
      
              <h2>HELLO ADMIN!</h2>
         
    </div>    

        <div>
          <ul>
		  <li><a href="#"><?php echo $_SESSION['sess_username'];?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      
    

    

   
    </body>
</html>
