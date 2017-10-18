<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<script src="../bootstrap/bootstrap-3.3.7/dist/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<style>
.blank_row
{
    height: 10px !important; /* overwrites any other rules */
    background-color: #FFFFFF;
}
body {
	background-color:#dadee5;
	overflow: hidden;
}
table 
{
	empty-cells: show;
	 border-collapse: separate;
  border-spacing: 35px 35px;
} 
</style>
			<table align="center">
				<tr>
				<td><input id="A01" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala1" onclick="showDiv();" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;" value="A01"></td>	
				<td><input id="A02" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala2" onclick="showDiv();" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;" value="A02"></td>
				<td><input id="A03" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala3" onclick="showDiv();" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;" value="A03"></td>	
				<td><input id="A04" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala4" onclick="showDiv();" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;" value="A04"></td>							  
				<td><input id="A05" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala5" onclick="showDiv();" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;" value="A05"></td>	
				<td><input id="A06" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala6" onclick="showDiv();" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;" value="A06"></td>
				<td><input id="A07" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala7" onclick="showDiv();" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;" value="A07"></td>	
				<td><input id="A08" type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModala8" onclick="showDiv();" style="background-color:#CD5C5C;color:#FFF;border-color:#CD5C5C;" value="A08"></td>				
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
									  <h4 class="modal-title">A1</h4>
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

							  <div class="modal fade" id="myModala2" role="dialog">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">A2</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
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
									  <h4 class="modal-title">A3</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
										  </form>
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
									  <h4 class="modal-title">A4</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									 	 </form>
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
									  <h4 class="modal-title">A5</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
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
									  <h4 class="modal-title">A6</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
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
									  <h4 class="modal-title">A7</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
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
									  <h4 class="modal-title">A8</h4>
									</div>
									<div class="modal-body">
									  <div id="option" align="center">
										<form action="handler.php" method="post" target="iframe_a">
										<input type="submit" class="btn btn-primary btn-lg" onclick="return redirect(this.id);" name="order_button" id="order_button" value="ORDER">
									  </form>
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