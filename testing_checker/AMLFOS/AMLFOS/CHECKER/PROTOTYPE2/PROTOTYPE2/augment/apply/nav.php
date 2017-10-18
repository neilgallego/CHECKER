<link rel="stylesheet" href="../../../../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<script src="../../../../bootstrap/bootstrap-3.3.7/dist/js/jquery-3.2.1.min.js"></script>
<script src="../../../../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>


<style>
body {
  background-color:#dadee5;;
    overflow: hidden;

}

#myModala1{
        overflow: hidden;
}

#myModala1 .modal-dialog  {
    width:85%;

}
</style>

<?php
require_once('connect-db.php');
require_once('dbconfig.php');
require_once('dbconfig1.php');
require_once('dbcontroller.php');
$db_handle = new DBController();
?>

<div style="position:relative; top:0%;">
Waiter: 
      <div id="thebutton">
<?php
  $query = mysqli_query($connection,'SELECT waiter1, waiter2, waiter3, waiter4, date from assigned_waiters where date = CURRENT_DATE');
    while($row=mysqli_fetch_array($query))
    {
      extract($row);
      ?>
          <strong><input type="radio"  name="waiters" id="myselect" value="<?php echo $waiter1; ?>" /><?php echo $waiter1; ?></strong>
          <strong><input type="radio"  name="waiters" id="myselect" value="<?php echo $waiter2; ?>" /><?php echo $waiter2; ?></strong>
          </br>
          <strong><input type="radio"  name="waiters" id="myselect" value="<?php echo $waiter3; ?>" /><?php echo $waiter3; ?></strong>
          <strong><input type="radio"  name="waiters" id="myselect" value="<?php echo $waiter4; ?>" /><?php echo $waiter4; ?></strong>
      <?php
    }
?>                 
</div>
<br>
                <input id="TABLES" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala1" onclick="showDiv();" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;" value="SELECT TABLE">
</div>


                               <div class="modal fade" id="myModala1" role="dialog">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color: gray;">
         
                                    </div>
                             
                                           <iframe height="900px" width="100%"  style="border:none; position:absolute; top: 10.5%;" src="../../../../tables/tables.php" name="iframe_a"></iframe> 
                                 
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
<script>
$( "#thebutton" ).change(function()
{
        $.post('test.php', 'val=' + $('input:radio[name=waiters]:checked').val(), function (response) {
      alert(response);
   });
})
</script>



<?php
if(isset($_GET["waiters"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aml_db";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    }

    $waiter = $_GET['waiters'];

    $sql = "INSERT INTO waiter_commission (waiter_name, time, date)
    VALUES ('$waiter', NOW(), NOW())";

if ($connect->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connect->error."');</script>";
}

$connect->close();
}

?>
<div style="position:relative; top:0.5%;">
<h4>Search:</h4>
<form action="item category/all.php" target="iframe_c" method="post"> 
<input type="text"  name="term" placeholder="Item Name or Code...">
<br>
<input type="submit" value="Submit" />  
</form>
</div>

<style>
.list-group { 
    margin: 0; 
    min-width: 170px;
    width: 5%;
    position:absolute; 
    top: 33%; 
    left: 0; 
    right: 0;
 }
</style>
