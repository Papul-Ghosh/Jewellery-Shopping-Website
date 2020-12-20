<!--File Name: cart.html
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
                <li><a>Shopping Cart</a></li>
            </ul>
            <div class="row set_color cart-table">              
                <div class="col-sm-12" id="content">     
                    <h1>Shopping Cart</h1>
					<?php
						if(isset($_REQUEST["pid"]))
						{
						if(isset($_SESSION["user"]))
							{
							include("connect.php");
							$pid=$_REQUEST["pid"];
							$sql="select * from products where pid= '".$pid."'";
							$rs=mysqli_query($con,$sql);
							$row=mysqli_fetch_array($rs);
							$sql1="select * from register where email= '".$_SESSION["user"]."'";
							$rs1=mysqli_query($con,$sql1);
							$row1=mysqli_fetch_array($rs1);
							$userid=$row1[0];
							$pid=$row[0];
							$name=$row[1];
							$des=$row[2];
							$cost=$row[3];
							$img=$row[4];
							$qty=1;
							$sql="insert into cart(userid,pid,pname,pdes,pcost,pimg,pqty) 
								values(". $userid. ",". $pid. ", '". $name."', '".$des."', ". $cost.", '". $img."', ". $qty.")";
							$n=mysqli_query($con,$sql);
							if($n==1)
								echo "<script>alert('Product added to cart')</script>";
								echo"<script>window.location.href='cart.php'</script>";
							}
						else
							{
								echo "<script>alert('Please Login/Register before accessing the cart')</script>";
								echo"<script>window.location.href='login.php'</script>";
							}
						}
							$sql1="select * from register where email='".$_SESSION["user"]."'" ;
							$rs1=mysqli_query($con,$sql1);
							$row1=mysqli_fetch_array($rs1);
							$sql="select * from cart where userid='".$row1[0]."'";
							$rs=mysqli_query($con,$sql);
							$count=mysqli_num_rows(($rs));
							
					?>
                    
                        <div class="table-responsive  margin-top">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td class="text-center">Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left">Description</td>
                                        <td class="text-left">Quantity</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Total</td>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
										
									if($count>0)
										{
										while($row=mysqli_fetch_array($rs))
											{
                                ?>
									<tr>
                                        <td class="text-center">               
                                            <a href="single-product.php?pid=<?=$row[1]?>"><img class="img-thumbnail" src="<?=$row[5]?>" style="width: 100px"></a>
                                        </td>
                                        <td class="text-left"><a href="single-product.php?pid=<?=$row[1]?>"><?=$row[2]?></a>
                                            <br>
                                            <small>Reward Points: 600</small>
                                            <hr></td>
                                        <td class="text-left"><?=$row[3]?></td>
                                        <td class="text-left">
										<form method="get">
                                            <div style="max-width: 200px;" class="input-group btn-block">
                                                
												<input type="number" class="form-control" size="<?=$row[6]?>" name="nqty" value="<?=$row[6]?>" min="1">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" title="" type="submit" name="upd" value="<?=$row[1]?>">update<i class=""></i></button>
                                                <button class="btn btn-default" title="" type="submit" name="btn" value="<?=$row[1]?>"><i class="fa fa-times-circle"></i></button>
                                                </span>
												
                                            </div>
										</form>
                                        </td>
                                        <td class="text-right">₹<?=$row[4]?></td>
										<td class="text-right">₹<?=$row[4]*$row[6]?></td>
                                    </tr>
									<?php
									
									if(isset($_GET["upd"]))
										{
											
											$nqty=$_REQUEST["nqty"];
											$pid=$_REQUEST["upd"];
											$sql="update cart set pqty=".$nqty." where pid=".$pid." and userid=".$row1[0];
											$n=mysqli_query($con,$sql);
											if($n==1)
											{
												echo"<script>alert('Product record updated successfully!')</script>";
												echo"<script>window.location.href='cart.php'</script>";
											}
											
										}
									
									if(isset($_GET["btn"]))
										{
											
											
											$pid=$_REQUEST["btn"];
											$sql="delete from cart where pid=". $pid . " and userid= '".$row1[0]."'" ;
											$n=mysqli_query($con,$sql);
											if($n==1)
											{
												echo"<script>alert('Product record deleted successfully!')</script>";
												echo"<script>window.location.href='cart.php'</script>";
											}
											
										}
											}
									
										}
									?>
                                </tbody>
                            </table>
                        </div>
                    
					<?php
					if($count<=0)
						echo "<h4>The cart is empty now!<br><br><br><br></h4>";
					?>

                    <h2>What would you like to do next?</h2>
                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                    <div id="accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed" href="#collapse-coupon" aria-expanded="false">Use Coupon Code <i class="fa fa-caret-down"></i></a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapse-coupon" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <label for="input-coupon" class="col-sm-2 control-label">Enter your coupon here</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
                                        <span class="input-group-btn">
                                            <input type="button" class="btn btn-primary"  id="button-coupon" value="Apply Coupon">
                                        </span></div>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-voucher" aria-expanded="false">Use Gift Certificate <i class="fa fa-caret-down"></i></a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapse-voucher" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <label for="input-voucher" class="col-sm-2 control-label">Enter your gift certificate code here</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift certificate code here" value="" name="voucher">
                                        <span class="input-group-btn">
                                            <input type="submit" class="btn btn-primary" id="button-voucher" value="Apply Gift Certificate">
                                        </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <?php
											$sql="SELECT sum(pcost*pqty) FROM cart where userid='".$row1[0]."'";
											$rs=mysqli_query($con,$sql);
											$row=mysqli_fetch_array($rs);
											$subtotal=$row[0];
											$gst=$row[0]*3.00/100;
											$total=$subtotal+$gst;
											
							?>
							<table class="table">
							
                                <tbody><tr>
                                        <td class="text-right cart-table-total-label"><strong>Sub-Total:</strong></td>                                       
										<td class="text-right cart-table-total">₹<?=$subtotal?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right cart-table-total-label"><strong>GST (3.00%):</strong></td>
                                        <td class="text-right cart-table-total">₹<?=$gst?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right cart-table-total-label"><strong>Total:</strong></td>
                                        <td class="text-right cart-table-total">₹ <?=$total?></td>
                                    </tr>
                                </tbody></table>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="pull-left"><a class="btn btn-default" href="home.php">Continue Shopping</a></div>
                        <div class="pull-right"><a class="btn btn-primary" href="checkout.php">Checkout</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->
        <div class="divider"></div>

        <!--footer-->
        <?php
		include("footer.php");
		?>
    </body>
</html>