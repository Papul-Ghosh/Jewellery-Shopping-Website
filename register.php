<!--File Name: register.html
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
                <li><a>Register</a></li>
            </ul>
            <div class="row">
                <aside class="col-sm-3 hidden-xs" id="column-left">
                    <div class="list-group">
                        <a class="list-group-item" href="login.php">Login</a> 
                        <a class="list-group-item">Register</a> 
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
                    <h1>Register Account</h1>
                    <p>If you already have an account with us, please login at the 
                        <a href="login.php">login page</a>.
                    </p>
                    <form method ="post" class="form-horizontal set_color">
                        <fieldset id="account">
                            <legend>Your Personal Details</legend>
                            <div style="display: none;" class="form-group required">
                                <label class="col-sm-2 control-label">Customer Group</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" checked="checked" value="1" name="customer_group_id">
                                            Default</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-firstname" class="col-sm-2 control-label">First Name <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname" required>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-email" class="col-sm-2 control-label">E-Mail <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email" required>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-telephone" class="col-sm-2 control-label">Telephone <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone" required>
                                </div>
                            </div>
                            </fieldset>
                        <fieldset id="address">
                            <legend>Your Address</font></legend>
                            <div class="form-group">
                                <label for="input-company" class="col-sm-2 control-label">Company/House Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-company" placeholder="Company / House Name" value="" name="company">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-address-1" class="col-sm-2 control-label">Address <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-address-1" placeholder="Address" value="" name="address" required>
                                </div>
                            </div>
                            
                            <div class="form-group required">
                                <label for="input-city" class="col-sm-2 control-label">City <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-city" placeholder="City" value="" name="city" required>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-postcode" class="col-sm-2 control-label">Post Code <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="postcode"required>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-country" class="col-sm-2 control-label">Country <font color="red">*</font></label>
                                <div class="col-sm-10">
								<input type="text" class="form-control" id="Countryname" placeholder="country Name" value="" name="country" required>
								</div>
                            </div>
                            <div class="form-group required">
                                <label for="input-zone" class="col-sm-2 control-label">Region / State <font color="red">*</font></label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="Statename" placeholder="State Name" value="" name="state" required>
								</div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Your Password</legend>
                            <div class="form-group required">
                                <label for="input-password" class="col-sm-2 control-label">Password <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password" required>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-confirm" class="col-sm-2 control-label">Password Confirm <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" name="confirm" required>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Newsletter</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Subscribe</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" value="1" name="newsletter">
                                        Yes</label>
                                    <label class="radio-inline">
                                        <input type="radio" checked="checked" value="0" name="newsletter">
                                        No</label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons">
                            <div class="pull-right">I have read and agree to the <a class="agree"><b>Privacy Policy</b></a>      
                                <input type="checkbox" value="1" name="agree" required>
                                &nbsp;
                                <input type="submit" name= "btn" class="btn btn-primary" value="Continue" onclick=checkPassword()>
                            </div>
                        </div>
                    </form>
					
				<script>
					function checkPassword()
					{
						var p=document.getElementById("input-password").value;
						var c=document.getElementById("input-confirm").value;
						if(p!=c)
							alert('Password mismatch');
						else
							document.f1.submit();

						
					}
					</script>
				
					<?php
			if(isset($_POST["btn"]))
			{
				$fname=$_POST["firstname"];
				$lname=$_POST["lastname"];
				$email=$_POST["email"];
				$phone=$_POST["telephone"];
				$company=$_POST["company"];
				$address=$_POST["address"];
				$city=$_POST["city"];
				$postcode=$_POST["postcode"];
				$country=$_POST["country"];
				$state=$_POST["state"];
				$password=$_POST["password"];
				$confirm=$_POST["confirm"];
			
				
				include("connect.php");
				$query= "select * from register where email='".$email."' ";
				$m= mysqli_query($con,$query);
				$count= mysqli_num_rows($m);
				if($count==0)
				{
				$sql="insert into register (fname,lname,email,phone,housename,address,city,postcode,country,state,password) 
				values('".$fname."', '".$lname."', '".$email."', ".$phone.", '".$company."','".$address."','".$city."',".$postcode.",'".$country."','".$state."','".$password."')";
				$n=mysqli_query($con,$sql);
				if($n==1)
					echo "<script>alert('Successfully Registerred to Aurum')</script>";
					echo"<script>window.location.href='checkout.php'</script>";
				}
				else if($count>0)
					echo "<script>alert('error: Email ID already exists!')</script>";
				
			}
		?>
					
					
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