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
				<td><input id="B01" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala1" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B01"></td>	
				<td><input id="B02" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala2" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B02"></td>
				<td><input id="B03" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala3" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B03"></td>	
				<td><input id="B04" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala4" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B04"></td>							  
				<td><input id="B05" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala5" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B05"></td>	
				<td><input id="B06" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala6" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B06"></td>
				<td><input id="B07" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala7" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B07"></td>	
				<td><input id="B08" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala8" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B08"></td>				
				<td><input id="B09" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala9" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B09"></td>	
				<td><input id="B10" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala10" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B10"></td>
				<td><input id="B11" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala11" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B11"></td>
				</tr>
				<tr>
					
				<td><input id="B12" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala12" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B12"></td>				
				<td><input id="B13" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala13" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B13"></td>	
				<td><input id="B14" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala14" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B14"></td>							  
				<td><input id="B15" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala15" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B15"></td>	
				<td><input id="B16" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala16" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B16"></td>
				<td><input id="B17" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala17" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B17"></td>	
				<td><input id="B18" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala18" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B18"></td>				
				<td><input id="B19" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala19" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B19"></td>	
				<td><input id="B20" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala20" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B20"></td>
				<td><input id="B21" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala21" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B21"></td>	
				<td><input id="B22" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala22" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B22"></td>
				</tr>
				<tr>
					
				<td><input id="B23" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala23" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B23"></td>	
				<td><input id="B24" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala24" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B24"></td>							  
				<td><input id="B25" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala25" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B25"></td>	
				<td><input id="B26" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala26" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B26"></td>
				<td><input id="B27" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala27" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B27"></td>	
				<td><input id="B28" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala28" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B28"></td>				
				<td><input id="B29" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala29" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B29"></td>	
				<td><input id="B30" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala30" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B30"></td>
				<td><input id="B31" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala31" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B31"></td>	
				<td><input id="B32" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala32" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B32"></td>				
				<td><input id="B33" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala33" onclick="showDiv();" style="background-color:#008B8B;color:#FFF;border-color:#008B8B;" value="B33"></td>	
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
									  <h4 class="modal-title">B1</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B2</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B3</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B4</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B5</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B6</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
											<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B7</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
								<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B8</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B9</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B10</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B11</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B12</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B13</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B14</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B15</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B16</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B17</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B18</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B19</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B20</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B21</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B22</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B23</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B24</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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
									  <h4 class="modal-title">B25</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>

							  	  	  <div class="modal fade" id="myModala26" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">B27</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
									  			<input type="submit" class="btn btn-primary btn-lg"  id="order_button" value="ORDER">
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>

							  	  	  <div class="modal fade" id="myModala28" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">B28</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>

							  	  	  <div class="modal fade" id="myModala29" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">B29</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>

							  	  	  <div class="modal fade" id="myModala30" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">B30</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>

							  	  	  <div class="modal fade" id="myModala31" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">B31</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>

							  	  	  <div class="modal fade" id="myModala32" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">B32</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
										<input type="submit" class="btn btn-primary btn-lg"  id="add_order_button" value="MODIFY">
									</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							  </div>

							  	  	  <div class="modal fade" id="myModala33" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">B33</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
									  <br>
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