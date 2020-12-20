<!--File Name: checkout.html
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
        <div class="container checkout set_color">
            <ul class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i></a></li>
                <li><a>Checkout</a></li>
            </ul>
            <h2 class="text-uppercase text-bold"><i class="fa fa-check-square-o"></i> checkout</h2>

            <div id="accordion" class="panel-group margin-top">
                <div class="panel panel-default" id="step-1">
				<?php
				if(isset($_SESSION["user"]))
					echo "<script>document.getElementById('step-1').style.display='none'</script>";
				?>
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-option">Step 1: Checkout Options <i class="fa fa-caret-down"></i></a></h4>
                    </div>
                    <div id="step-1" class="panel-collapse collapse in" aria-expanded="false">
                        <div class="panel-body"><div class="row">
                                <div class="col-sm-6">
                                    <h2>New Customer</h2>
                                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                    <a input type="button" class="btn btn-primary" id="button-account" href="register.php">Continue</a>
                                </div>
                                <div class="col-sm-6">
                                    <h2>Returning Customer</h2>
                                    <p>I am a returning customer</p>
									<form method="post">
                                    <div class="form-group">
                                        <label for="input-email" class="control-label">E-Mail </label>
                                        <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-password" class="control-label">Password</label>
                                        <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password" required>
                                        
                                        <a href="#">Forgot Password</a></div>
                                    <input type="submit" class="btn btn-primary" name= "s1" id="button-login" value="Login" required>
									</form>
                                								
								
								<?php			
								if(isset($_POST["s1"]))
								{
									$email=$_POST["email"];
									$password=$_POST["password"];
											
									include("connect.php");
									$sql="select userid from register where email= '".$email."' and password= '".$password."' ";
									$rs=mysqli_query($con,$sql);
									$count=mysqli_num_rows($rs);
									if($count==0)
										echo "<script>alert('error: Incorrect email ID or password!')</script>";
									else if($count>0)
									{
										
												
												$_SESSION["user"]=$email;
												$_SESSION["step"]="step_2";
												$sql="select concat(fname,' ',lname) from register where email=  '".$_SESSION["user"]."' ";
												$rs1=mysqli_query($con,$sql);
												$r=mysqli_fetch_array($rs1);
												echo "<script>alert('Login Successful as $r[0]. Continue Shopping')</script>";												
												echo "<script>window.location.href='checkout.php'</script>";
									}	
								}
							?>
															
							</div>
                            </div>
                        </div>
                    </div>
                </div>
				
            
			<div class="panel panel-default" id="step-2">
				<?php
				if(isset($_SESSION["step"]) && ($_SESSION["step"]=="step_2"))
				{
					echo "<script>document.getElementById('step-2').style.display='block'</script>";
					$sql="select * from register where email='".$_SESSION["user"]."'";
					$rs=mysqli_query($con,$sql);
					$row=mysqli_fetch_array($rs);
				}
				else
					echo "<script>document.getElementById('step-2').style.display='none'</script>";
				
				
				?>
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="false">Step 2: Delivery Details <i class="fa fa-caret-down"></i></a></h4>
                    </div>
					
                    <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="false">
                        <div class="panel-body">
						<form method="post" class="form-horizontal">
                                <div class="form-group required">
                                    <label for="input-shipping-firstname" class="col-sm-2 control-label">First Name <font color="red">*</font></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" value="<?=$row[1]?>" name="firstname" required>
                                    </div>
                                </div>
								
                                <div class="form-group required">
                                    <label for="input-shipping-lastname" class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-shipping-lastname" placeholder="Last Name" value="<?=$row[2]?>" name="lastname">
                                    </div>
                                </div>
								<div class="form-group required">
                                    <label for="input-shipping-contact" class="col-sm-2 control-label">Contact Number <font color="red">*</font></label>
                                    <div class="col-sm-10">
										<input type="text" class="form-control" id="input-shipping-contact" placeholder="contact Number" value="<?=$row[4]?>" name="phone" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-shipping-company" class="col-sm-2 control-label">Company</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-shipping-company" placeholder="Company" value="" name="company">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-shipping-address-1" class="col-sm-2 control-label">Address <font color="red">*</font></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-shipping-address-1" placeholder="Address" value="<?=$row[6]?>" name="address" required>
                                    </div>
                                </div>
                                
                                <div class="form-group required">
                                    <label for="input-shipping-city" class="col-sm-2 control-label">City <font color="red">*</font></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-shipping-city" placeholder="City" value="<?=$row[7]?>" name="city" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-shipping-postcode" class="col-sm-2 control-label">Post Code <font color="red">*</font></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Post Code" value="<?=$row[8]?>" name="postcode" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-shipping-country" class="col-sm-2 control-label">Country <font color="red">*</font></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-shipping-country" placeholder="Country" value="<?=$row[9]?>" name="country" required> 
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-shipping-zone" class="col-sm-2 control-label">Region / State <font color="red">*</font></label>
                                    <div class="col-sm-10">
										<input type="text" class="form-control" id="input-shipping-state" placeholder="State" value="<?=$row[10]?>" name="state" required>
                                    </div>
                                </div>
								<div class="form-group required">
                                    <label for="input-shipping-date" class="col-sm-2 control-label">Delivery Date <font color="red">*</font></label>
                                    <div class="col-sm-10">
										<input type="date" class="form-control" id="input-shipping-date" placeholder="yyyy-mm-dd" value="" name="date" required>
                                    </div>
                                </div>
								<div class="form-group required">
                                    <label for="input-shipping-time" class="col-sm-2 control-label">Delivery Time <font color="red">*</font></label>
                                    <div class="col-sm-10">
										<select class="form-control" id="input-time" name="time">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="Morning (09:00 am-12:00 pm)">Morning (09:00 am-12:00 pm)</option>
                                        <option value="Afternoon (12:00 pm-04:00 pm)">Afternoon (12:00 pm-04:00 pm)</option>
										<option value="Evening (04:00 pm-07:00 pm)">Evening (04:00 pm-07:00 pm)</option>
										<option value="Night (07:00 pm-09:00 pm)">Night (07:00 pm-09:00 pm)</option>
                                    </select> 
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="pull-right">
                                        <input type="submit" class="btn btn-primary" name="s2" id="button-guest-shipping" value="Continue">
                                    </div>
								</div>
								
                            </form>
							<?php
							if(isset($_POST["s2"]))
							{
								$email=$_SESSION["user"];
								$fname=$_POST["firstname"];
								$lname=$_POST["lastname"];
								$phone=$_POST["phone"];
								$company=$_POST["company"];
								$address=$_POST["address"];
								$city=$_POST["city"];
								$postcode=$_POST["postcode"];
								$country=$_POST["country"];
								$state=$_POST["state"];
								$date=$_POST["date"];
								$time=$_POST["time"];
								include("connect.php");
								$sql1="select userid from register where email= '".$email."' ";
								$m=mysqli_query($con,$sql1);
								$r=mysqli_fetch_array($m);
								$sql2="insert into delivery_details(userid, firstname, lastname, phone_no, housename, address, city, postcode, country, state, date, time)
								values(".$r[0].", '".$fname."', '".$lname."', ".$phone.", '".$company."', '".$address."', '".$city."', ".$postcode.", '".$country."', '".$state."', '".$date."', '".$time."')";
								$n=mysqli_query($con,$sql2);
								if($n==1){
								$_SESSION["step"]="step_3";
								echo "<script>alert('Step2 Successfully completed. Now move to Step3')</script>";
								echo "<script>document.getElementById('step-2').style.display='none'</script>";
								}
							}
							?>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default" id="step-3">
					<?php
				if(isset($_SESSION["step"]) && ($_SESSION["step"]=="step_3"))
					echo "<script>document.getElementById('step-3').style.display='block'</script>";
				else
					echo "<script>document.getElementById('step-3').style.display='none'</script>";
				?>
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-method" aria-expanded="false">Step 3: Payment Method <i class="fa fa-caret-down"></i></a></h4>
                    </div>
                    <div id="collapse-payment-method" class="panel-collapse collapse in" aria-expanded="false">
                        <div class="panel-body"><p>Please select the preferred payment method to use on this order.</p>
						<form method="post">
                            <div class="radio">
                                <label>
                                    <input type="radio" checked="checked" value="cod" name="payment_method">
                                    Cash On Delivery      </label>
                            </div>
                            <p><strong>Add Comments About Your Order</strong></p>
                            <p>
                                <textarea class="form-control" rows="8" name="comment"></textarea>
                            </p>
                            <div class="buttons">
                                <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a>        <input type="checkbox" value="1" name="agree" required>
                                    &nbsp;
                                    <input type="submit" name="s3" class="btn btn-primary" id="button-payment-method" value="Continue" required>
                                </div>
                            </div>
						</form>
							<?php
							if(isset($_POST["s3"]))
							{
								echo "<script>alert('Step3 Successfully completed. Now move to Step4')</script>";
								$_SESSION["step"]="step_4";
								echo "<script>document.getElementById('step-3').style.display='none'</script>";
							}
							?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" id="step-4">
					<?php
				if(isset($_SESSION["step"]) && ($_SESSION["step"]=="step_4"))
					echo "<script>document.getElementById('step-4').style.display='block'</script>";
				else
					echo "<script>document.getElementById('step-4').style.display='none'</script>";
				?>
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="false">Step 4: Confirm Order <i class="fa fa-caret-down"></i></a></h4>
                    </div>
                    <div id="collapse-checkout-confirm" class="panel-collapse collapse in" aria-expanded="false">
                        <div class="panel-body"><div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td class="text-left">Product Name</td>
                                            <td class="text-left">Model</td>
                                            <td class="text-right">Quantity</td>
                                            <td class="text-right">Unit Price</td>
                                            <td class="text-right">Total</td>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql1="select * from register where email='".$_SESSION["user"]."'" ;
									$rs1=mysqli_query($con,$sql1);
									$row1=mysqli_fetch_array($rs1);
									$sql="select * from cart where userid='".$row1[0]."'";
									$rs=mysqli_query($con,$sql);
									$count=mysqli_num_rows(($rs));
									if($count>0)
										{
										while($row=mysqli_fetch_array($rs))
											{
									?>
                                        <tr>
                                            <td class="text-left"><a href="single-product.php?pid=<?=$row[1]?>"><?=$row[2]?></a>
                                            </td>
                                            <td class="text-left"><?=$row[3]?></td>
                                            <td class="text-right"><?=$row[6]?></td>
                                            <td class="text-right">₹<?=$row[4]?></td>
                                            <td class="text-right">₹<?=$row[6]*$row[4]?></td>
                                        </tr>
										<?php
											}
										}
									$sql="SELECT sum(pcost*pqty) FROM cart where userid='".$row1[0]."'";
									$rs=mysqli_query($con,$sql);
									$row=mysqli_fetch_array($rs);
									$subtotal=$row[0];
									if($subtotal>=2500)
										$shipping_rate=0;
									else
										$shipping_rate=100;
									$gst=$row[0]*3.00/100;
									$total=$subtotal+$gst+$shipping_rate;
									
					
										?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                            <td class="text-right">₹<?=$subtotal?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="text-right" colspan="4"><strong>GST (3.00%):</strong></td>
                                            <td class="text-right">₹<?=$gst?></td>
                                        </tr>
										<tr>
                                            <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
                                            <td class="text-right">₹<?=$shipping_rate?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                            <td class="text-right">₹<?=$total?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="buttons">
                            <form method="post">
                                <div class="pull-right">
								<input type="submit" name="s4" class="btn btn-primary" id="button-confirm" value="Confirm Order">
                                </div>
							</form>
							<?php
								if(isset($_POST["s4"]))
							{
								//$_SESSION["login_path"]="checkout";
								include("connect.php");
								$sql1="select max(orderid) from delivery_details";
								$m1=mysqli_query($con,$sql1);
								$id=mysqli_fetch_array($m1);
								$sql1="select * from register where email='".$_SESSION["user"]."'" ;
								$rs1=mysqli_query($con,$sql1);
								$row1=mysqli_fetch_array($rs1);
								$sql4="select * from cart where userid='".$row1[0]."'";
								$m2=mysqli_query($con,$sql4);
								$count=mysqli_num_rows($m2);
								
								if($count>0)
								{
									while($row=mysqli_fetch_array($m2))
									{
										$sql5="insert into order_details values(".$id[0].", ".$row[1].", '".$row[2]."', '".$row[3]."', ".$row[4].", '".$row[5]."', ".$row[6].")";
										$k=mysqli_query($con,$sql5);
									
									}
								}
								$sql="SELECT sum(pcost*pqty) FROM cart where userid='".$row1[0]."'";
								$rs=mysqli_query($con,$sql);
								$row=mysqli_fetch_array($rs);
								$subtotal=$row[0];
								if($subtotal>=2500)
									$shipping_rate=0;
								else
									$shipping_rate=100;
								$gst=$row[0]*3.00/100;
								$total=$subtotal+$gst+$shipping_rate;
								
								$sql2="delete from cart where userid='".$row1[0]."'";
								$r=mysqli_query($con,$sql2);
						
								$email=$_SESSION["user"];
								$sql6="SELECT userid FROM register WHERE email='".$email."'";
								$rs=mysqli_query($con,$sql6);
								$row6=mysqli_fetch_array($rs);
								$sql3="INSERT INTO order_list(userid, orderid,billcost)
										VALUES (".$row6[0].",".$id[0].",".$total.")";
								$n=mysqli_query($con,$sql3);
								if($n==1)
								{
								$_SESSION["step"]="step-2";
								echo "<script>alert('Order Successfully completed. Thank You.')</script>";
								echo "<script>window.location.href='home.php'</script>";
								}
							}
							?>	
                            </div>

                        </div>
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