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
				<td><input id="C01" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala1" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C01"></td>	
				<td><input id="C02" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala2" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C02"></td>
				<td><input id="C03" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala3" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C03"></td>	
				<td><input id="C04" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala4" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C04"></td>							  
				<td><input id="C05" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala5" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C05"></td>	
				<td><input id="C06" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala6" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C06"></td>
				<td><input id="C07" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala7" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C07"></td>	
				<td><input id="C08" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala8" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C08"></td>				
				<td><input id="C09" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala9" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C09"></td>	
				<td><input id="C10" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala10" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C10"></td>
				<td><input id="C11" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala11" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C11"></td>
				</tr>
				<tr>
					
				<td><input id="C12" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala12" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C12"></td>				
				<td><input id="C13" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala13" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C13"></td>	
				<td><input id="C14" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala14" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C14"></td>							  
				<td><input id="C15" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala15" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C15"></td>	
				<td><input id="C16" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala16" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C16"></td>
				<td><input id="C17" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala17" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C17"></td>	
				<td><input id="C18" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala18" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C18"></td>				
				<td><input id="C19" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala19" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C19"></td>	
				<td><input id="C20" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala20" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C20"></td>
				<td><input id="C21" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala11" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C21"></td>	
				<td><input id="C22" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala12" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C22"></td>	
				</tr>
				<tr>
			
				<td><input id="C23" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala13" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C23"></td>	
				<td><input id="C24" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala14" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C24"></td>							  
				<td><input id="C25" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala15" onclick="showDiv();" style="background-color:#228B22;color:#FFF;border-color:#228B22;" value="C25"></td>	
				
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
									  <h4 class="modal-title">C1</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>

							  <div class="modal fade" id="myModala2" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C2</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  <div class="modal fade" id="myModala3" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C3</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  <div class="modal fade" id="myModala4" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C4</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala5" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C5</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala6" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C6</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala7" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C7</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala8" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C8</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala9" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C9</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala10" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C10</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala11" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C11</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala12" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C12</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala13" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C13</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala14" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C14</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala15" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C15</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala16" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C16</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala17" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C17</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala18" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C18</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala19" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C19</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  
							  	  	  <div class="modal fade" id="myModala20" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C20</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>

								 <div class="modal fade" id="myModala21" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C21</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  	 <div class="modal fade" id="myModala22" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C22</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  					 <div class="modal fade" id="myModala23" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C23</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  					 <div class="modal fade" id="myModala24" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C24</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
							  					 <div class="modal fade" id="myModala25" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">C25</h4>
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
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>
</div>			

</div>
</body>
</html>