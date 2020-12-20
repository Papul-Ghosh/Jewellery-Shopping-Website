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
                        
                        <?php
						$sql="select max(pid) from products";
						$rs=mysqli_query($con,$sql);
						$r=mysqli_fetch_array($rs);
						?>
						
						<div class="col-sm-12">
                            <div class="well set_color">
							    <h2>Product details</h2>
								<form method="post" enctype="multipart/form-data">
									<table cellpadding="5" cellspacing="5" border="1" align="center">
										<tr>
											<th>pid</th><th>pname</th><th>pdes</th><th>pcost</th><th>pimg</th><th>cid</th>
										</tr>
										<tr>
											<td><?=$r[0]+1?></td>
											<td><input type="text" value="" name="pname"/></td>
											<td><input type="text" value="" name="pdes"/></td>
											<td><input type="text" value="" name="pcost"/></td>
											<td><input type="text" value="" name="pimg"/></td>
											<td><input type="text" value="" name="cid"/></td>
										</tr>
									</table>
									<input type="file" name="file"/>
									<input type="submit" name="btn5" value="ADD PRODUCT"/>
								</form>
                            </div>
                        </div>
						<?php
							if(isset($_POST["btn5"]))
							{
								
								
								$pname=$_POST["pname"];
								$pdes=$_POST["pdes"];
								$pcost=$_POST["pcost"];
								$pimg=$_POST["pimg"];
								$cid=$_POST["cid"];
								include("connect.php");
								$sql="insert into products(pname,pdes,pcost,pimg,cid) 
								values('". $pname."', '".$pdes."', ". $pcost.",'". $pimg ."','". $cid."')";
								$n=mysqli_query($con,$sql);
								$file_name=$_FILES["file"]["name"];
								$temp_name=$_FILES["file"]["tmp_name"];
								$m=move_uploaded_file($temp_name,"C:/xampp/htdocs/jewellery_project/".$file_name);
								
								if($n==1 && $m==1)
								{
									echo"<script>alert('Product record added to database successfully!')</script>";
									echo"<script>window.location.href='addproduct.php'</script>";
								}
								else
								{
									echo"<script>alert('error error error!!!')</script>";
									echo"<script>window.location.href='addproduct.php'</script>";
								}
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