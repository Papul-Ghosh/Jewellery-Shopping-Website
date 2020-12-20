<!--File Name: login.html
Author Name: Papul Ghosh
Author email: /papulgsh1997@gmail.com/-->

<!DOCTYPE html>
<html lang="en">
    <?php
    include("head.php");
    ?>
    <body>
        <!--header--->
        <?php
		include("header.php");
		?>
        <!-- Modal -->
        
        <!--Modal end--->
        <!--middle content-->
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i></a></li>
                <li><a href="admin.php">Admin Territory</a></li>
            </ul>
            <div class="row">
                <aside class="col-sm-3 hidden-xs" id="column-left">
                    <div class="list-group"> 
                        <a class="list-group-item" href="viewproduct.php">View product</a>
						<a class="list-group-item" href="addproduct.php">Add product</a>
						<a class="list-group-item" href="viewproduct.php">Update product</a>
						<a class="list-group-item" href="viewproduct.php">Delete product</a>
                        <a class="list-group-item">Forgot Password</a>
                        <a class="list-group-item">My Account</a>
                        <a class="list-group-item">Address Book</a> 
                        <a class="list-group-item">Wish List</a>
                        <a class="list-group-item">Order History</a> 
                        <a class="list-group-item">Downloads</a>
                        <a class="list-group-item">Recurring payments</a>
                        <a class="list-group-item">Reward Points</a>
                        <a class="list-group-item">Returns</a>
                        <a class="list-group-item">Transactions</a> 
                        <a class="list-group-item">Newsletter</a>
                    </div>
                </aside>
                <div class="col-sm-9" id="content">      
                    <div class="row login-block">
                        <div class="col-sm-12">
                            <div class="well set_color">
							    <h2>View product</h2>
								<form method="post">
									Product Name    <select name="pid">
									<?php
									include("connect.php");
									$sql="select * from products";
									$rs=mysqli_query($con,$sql);
									while($row=mysqli_fetch_array($rs))
									{
									?>
									<option value="<?=$row[0]?>"><?=$row[1]?></option>
									<?php
									}
									?>
									</select>
									<input type="submit" name="btn1" value="SHOW PRODUCT">
								</form>
								
                            </div>
                        </div>
                        
						<?php
							if(isset($_POST["btn1"]))
							{
								$_SESSION["pid"]=$_POST["pid"];
								$pid=$_POST["pid"];	
								$sql="select * from products where pid=".$pid;
								$rs=mysqli_query($con,$sql);
								$row=mysqli_fetch_array($rs);
						?>
						<div class="col-sm-12">
                            <div class="well set_color">
							    <h2>Product details</h2>
								<form method="post">
									<table cellpadding="25" cellspacing="25" border="2" align="center">
										<tr>
											<th>pid</th><th>pname</th><th>pdes</th><th>pcost</th><th>pimg</th><th>cid</th>
										</tr>
										<tr>
											<td><?=$row[0]?></td>
											<td><input type="text" value="<?=$row[1]?>" name="pname"/></td>
											<td><input type="text" value="<?=$row[2]?>" name="pdes"/></td>
											<td><input type="text" value="<?=$row[3]?>" name="pcost"/></td>
											<td><img class="img-thumbnail" src="<?=$row[4]?>" style="width: 100px"></td>
											<td><?=$row[5]?></td>
										</tr>
									</table>
									<input type="submit" name="btn2" value="UPDATE"/>
									<input type="submit" name="btn3" value="DELETE"/>
								</form>
                            </div>
                        </div>
						<?php
							}
							if(isset($_POST["btn2"]))
							{
								$pid=$_SESSION["pid"];
								$pname=$_POST["pname"];
								$pdes=$_POST["pdes"];
								$pcost=$_POST["pcost"];
								
								$sql="update products set pname='".$pname."', pdes='".$pdes."',pcost='".$pcost."' where pid=".$pid;
								$n=mysqli_query($con,$sql);
								if($n==1)
								{
									unset($_SESSION["pid"]);
									echo"<script>alert('Product record updated successfully!')</script>";
									echo"<script>window.location.href='viewproduct.php'</script>";
								}
								else
									echo"<script>alert('error error error!!!')</script>";
							}
							
							else if(isset($_POST["btn3"]))
							{
								$pid=$_SESSION["pid"];
								
								$sql="delete from products where pid=".$pid;
								$n=mysqli_query($con,$sql);
								if($n==1)
								{
									unset($_SESSION["pid"]);
									echo"<script>alert('Product record deleted successfully!')</script>";
									echo"<script>window.location.href='viewproduct.php'</script>";
								}
								else
									echo"<script>alert('error error error!!!')</script>";
							}
						?>
						
						
                    </div>
                </div>
            </div>
        </div>
        <!--end-->
        <div class="divider"></div>
        <!--end-->
        <!--footer-->
        <?php
		include("footer.php");
		?>
    </body>
</html>