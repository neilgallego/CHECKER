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
	overflow: hidden; 
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


<div name="tables_list">
			<table align="center">
				<tr>
				<td><input id="D01" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala1" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D01"></td>	
				<td><input id="D02" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala2" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D02"></td>
				<td><input id="D03" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala3" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D03"></td>	
				<td><input id="D04" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala4" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D04"></td>							  
				<td><input id="D05" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala5" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D05"></td>	
				<td><input id="D06" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala6" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D06"></td>
				<td><input id="D07" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala7" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D07"></td>	
				<td><input id="D08" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala8" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D08"></td>				
				<td><input id="D09" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala9" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D09"></td>	
				<td><input id="D10" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala10" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D10"></td>
				<td><input id="D11" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala11" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D11"></td>	
				</tr>
				<tr>

				<td><input id="D12" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala12" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D12"></td>				
				<td><input id="D13" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala13" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D13"></td>	
				<td><input id="D14" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala14" onclick="showDiv();" style="background-color:#FF4500;color:#FFF;border-color:#FF4500;" value="D14"></td>							  
			
				</tr>
				
			</table>
						
</div>  
<div>
							   <!--MODALS-->
							   <div class="modal fade" id="myModala1" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D1</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>

							  <div class="modal fade" id="myModala2" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D2</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  <div class="modal fade" id="myModala3" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D3</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  <div class="modal fade" id="myModala4" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D4</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala5" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D5</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala6" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D6</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala7" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D7</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala8" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D8</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala9" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D9</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala10" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D10</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala11" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D11</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala12" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D12</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala13" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D13</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala14" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">D14</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form><br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Dlose</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  
</div>			

</div>
</body>
</html>