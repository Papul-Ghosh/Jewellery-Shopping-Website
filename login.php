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
                <li><a>Login</a></li>
            </ul>
            <div class="row">
                <aside class="col-sm-3 hidden-xs" id="column-left">
                    <div class="list-group">
                        <a class="list-group-item">Login</a> 
                        <a class="list-group-item" href="register.php">Register</a> 
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
                        <div class="col-sm-6">
                            <div class="well set_color">
                                <h2>New Customer</h2>
                                <p><strong>Register Account</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                <a class="btn btn-primary" href="register.php">Continue</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="well">
                                <h2>Returning Customer</h2>
                                <p><strong>I am a returning customer</strong></p>
                                <form class="set_color" method="post">
                                    <div class="form-group">
                                        <label for="input-email" class="control-label"></label>
                                        <input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-password" class="control-label"></label>
                                        <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password" required>
                                        <a>Forgot Password</a></div>
                                    <input type="submit" name= "s1" class="margin-top btn btn-primary btn-block" value="Login">
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
										
										echo "<script>window.location.href='home.php'</script>";
									}	
								}
							?>
                            </div>
                        </div>
						
						
						<div class="col-sm-6">
                            <div class="well">
                                <h2>Admin Login</h2>
                                <p><strong>I am an admin</strong></p>
                                <form class="set_color" method="post">
                                    <div class="form-group">
                                        <label for="input-email" class="control-label"></label>
                                        <input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-password" class="control-label"></label>
                                        <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password" required>
                                        <a>Forgot Password</a></div>
                                    <input type="submit" name= "s2" class="margin-top btn btn-primary btn-block" value="Login">
                                </form>
								<?php								
								if(isset($_POST["s2"]))
								{
									$email=$_POST["email"];
									$password=$_POST["password"];
									if($email=="papulgsh1997@gmail.com" && $password=="1987")		
									{
										$_SESSION["user"]=$email;
										$_SESSION["step"]="step_2";
										echo "<script>alert('Login Successful as Admin.')</script>";
										echo "<script>window.location.href='home.php'</script>";
									}
									else
										echo "<script>alert('error: Incorrect email ID or password!')</script>";
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
        <!--end-->
        <!--footer-->
        <?php
		include("footer.php");
		?>
    </body>
</html>