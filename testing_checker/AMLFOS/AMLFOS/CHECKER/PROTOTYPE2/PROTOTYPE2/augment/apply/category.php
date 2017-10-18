<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	
	<div class="container">
    <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $connection = mysqli_connect($dbhost,$dbuser,$dbpass,'aml_db');

        if(! $connection){
            die('Could not Connect to Database' . mysql_error());
        }

        $query = "SELECT DISTINCT item_category 
                         FROM menu_db";
        $result = mysqli_query( $connection , $query );

        if(! $result){
            die('Could not get data from database : ' . mysql_error() );
        }
    $varcategory='';
        while($row = mysqli_fetch_array($result , MYSQL_NUM)){ 
         $varcategory = $row[0];

   echo "<a href='/AMLFOS/AMLFOS/CHECKER/PROTOTYPE2/".
   "prototype2/augment/apply/item category/appetizzer.php?cat=$varcategory'". 
    "target='iframe_c'".
    "data-parent='#SubMenu2' class='btn'>$varcategory</a>";

 

	}

    ?>
    </div>

</body>
</html>