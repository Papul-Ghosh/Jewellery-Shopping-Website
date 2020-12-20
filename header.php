<DOCTYPE html>
<html>
<header>
            <nav id="top">
                <div class="container">
                    <div class="row margin-top">
                        <div class="col-md-3 col-sm-5 col-xs-6 social-icons">
                            <div>           
                                <a href="https://www.facebook.com/profile.php?id=100009247465675" target="blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target ="blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/papulghosh/" target ="blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://plus.google.com/112696057963595859091" target ="blank"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-2 col-sm-7 col-xs-6">
                            <div class="nav pull-right" id="top-links">
                                <ul class="list-inline">
									<li><a><i class="fa fa-phone i_gray_color"></i> <span class="hidden-xs">+91-8981984550</span></a></li>
                                    <li><a href="register.php"><i class="fa fa-sign-in"></i> <span class="hidden-xs">Register</span></a></li>
                                    
						<?php session_start();
							if(isset($_SESSION["user"]))
							{
								if($_SESSION["user"]!="papulgsh1997@gmail.com")
								{
								include("connect.php");
								$sql="select concat(fname,' ',lname) from register where email=  '".$_SESSION["user"]."' ";
								$rs1=mysqli_query($con,$sql);
								$r=mysqli_fetch_array($rs1);
						?>
									<li><a href="logout.php"><i class="fa fa-user"></i> <span class="hidden-xs">
						<?php
									echo "Logout "
						?>
									<i class="fa fa-meh-o"></i>
						<u><b><i><?php	echo "$r[0]";	?></i></b></u>
									<i class="fa fa-meh-o"></i></span></a></li>
						<?php	}
								else
								{
						?>
									<li><a href="logout.php">Logout</a></li>
									<li><a href="admin.php"><i class="fa fa-gear"></i> <span class="hidden-xs">Admin:- <b><u><i>Papul</i></u></b></span></a></li>
						<?php
									
								}
							}
							else
							{
						?>
									<li><a href="logout.php"><i class="fa fa-user"></i> <span class="hidden-xs">Login</i></span></a></li>
									<li><a href="logout.php"><i class="fa fa-gear"></i> <span class="hidden-xs">Admin</span></a></li>
                            <?php
							}
							?>
									<li><a title="Wish List (0)" id="wishlist-total"><i class="fa fa-heart i_gray_color"></i> <span class="hidden-xs">Wish List (0)</span></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="col-xs-12 col-sm-6 col-md-3 remove-padding-left">
                    <!--                    <a href="home.html">
                                            <img class="img-responsive logo" alt="Your Store" title="Your Store" src="images/rubba.png">
                                        </a>-->
                    <a class="logo-text" href="home.php">
                        Au<span style="color:#fff; font-size:50px">rum</span>
                    </a>
                </div>
				
                <div class="col-xs-12 col-sm-6 col-md-6 bookings">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <p><strong></strong><br><a href="#"></a></p>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <p><strong>CUSTOMER SERVICES</strong><br><a href="https://mail.google.com//u/0/#inbox?compose=new">aurum@gmail.com</a></p>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 shop_cart">
					<div class="row">
                        <div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-6 col-xs-12 ">
                            <div class="btn-group btn-block" id="cart">
							<?php
								if(isset($_SESSION["user"]))
								{
									include("connect.php");
									$sql1="select * from register where email='".$_SESSION["user"]."'" ;
									$rs1=mysqli_query($con,$sql1);
									$row1=mysqli_fetch_array($rs1);
									$sql="select * from cart where userid='".$row1[0]."'";
									$rs1=mysqli_query($con,$sql);
									$count=mysqli_num_rows($rs1);
									if($count>0)
									{
									$sql="SELECT sum(pqty) FROM cart where userid='".$row1[0]."'";
									$rs=mysqli_query($con,$sql);
									$row=mysqli_fetch_array($rs);
									$qty=$row[0];
									$sql="SELECT sum(pcost*pqty) FROM cart where userid='".$row1[0]."'";
									$rs=mysqli_query($con,$sql);
									$row=mysqli_fetch_array($rs);
									$subtotal=$row[0];
									$gst=$row[0]*3.00/100;
									$total=$subtotal+$gst;
									}
									else
									{
									$qty=0;
									$subtotal=0;
									$gst=0;
									$total=$subtotal+$gst;
									}
								
							?>
                                <button width= "600 px" class="btn btn-default btn-lg dropdown-toggle btn-block"  data-toggle="dropdown" type="button"><span id="cart-total"><i class="fa fa-shopping-cart"></i><?=$qty?> item(s) - ₹ <?=$total?></span>
                                </button>
								
                                <ul class="dropdown-menu btn-block cartView">
                                    <li>
                                        <table class="table">
                                            <tbody>
											<?php
											if($count>0)
											{
											while($row1=mysqli_fetch_array($rs1))
												{
											?>
												<tr>
                                                    <td class="text-center">                        
                                                        <a href="single-product.php?pid=<?=$row1[1]?>"><img class="img-responsive" src="<?=$row1[5]?>" style="width: 100%"></a>
                                                    </td>
                                                    <td class="text-left"><a class="view_cart cart-product-name" href="single-product.php?pid=<?=$row[1]?>"><?=$row1[2]?></a>
                                                    </td>
                                                    <td class="product-remove text-center"><a><i class="fa fa-times margin-top"></i></a></td>
                                                </tr>
												<?php
												}
											}
												?>
                                                <tr style="border-bottom: 1px solid #D4D4D4" class="clearfix">
                                                    <td class="text-right cart-qty"><span>Qty:</span><?=$qty?></td>
                                                    <td class="text-left cart-product-total">₹ <?=$total?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
									<li>
                                        <div>
                                            <table class="table">
                                                <tbody><tr>
                                                        <td class=""><strong>Sub-Total</strong></td>
                                                        <td class="">₹<?=$subtotal?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><strong>GST</strong></td>
                                                        <td class="">₹<?=$gst?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><strong>Total</strong></td>
                                                        <td class="">₹ <?=$total?></td>
                                                    </tr>
                                                </tbody></table>
                                            <a class="btn btn-primary btn-lg" href="cart.php"><i class="fa fa-shopping-cart"></i> 
                                                View Cart</a>
                                            <a class="btn btn-primary btn-lg" href="checkout.php">
                                                <i class="fa fa-share"></i> 
                                                Checkout                   
                                            </a>
                                        </div>
                                    </li></ul>
                            
							<?php
							}
							else
							{
							?>
							<a class="btn btn-default btn-lg dropdown-toggle btn-block" href="login.php">Login/Register to access Cart</a>
                             
							<?php
							}
							?>
							</div>

                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>		
            </div>
            <nav class="container">
                <div class="row">
                    <div class="col-md-11 col-sm-11 col-xs-10 left-side-remove-space">
                        <div class="navbar-header nav_set_button">
                            <button data-target="#myNavbar" data-toggle="collapse" class="navbar-toggle btn_set" type="button">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>

                        </div>
                        <div id="myNavbar" class="collapse navbar-collapse left-side-remove-space">
                            
							<ul class="nav navbar-nav">

							
                                <li class="active"><a href="home.php">Home</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="product.php">Men</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
											<?php
											include("connect.php");
											$sql="select * from men_category";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
			
											?>
							
                                                <li><a href="product.php?id=<?=$row[0]?>"><?=$row[1]?></a></li>
                                                <?php
												}
											}?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="product.php">Women</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
										    <ul class="list-unstyled">
											<?php
											//include("connect.php");
											$sql="select * from women_category";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
											
											?>
							                
												<li><a href="product.php?id=<?=$row[0]?>"><?=$row[1]?></a></li>
                                              <?php
												}
											}
												?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="product.php">Kids</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
											<?php
											include("connect.php");
											$sql="select * from kid_category";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
			
											?>
							
                                                <li><a href="product.php?id=<?=$row[0]?>"><?=$row[1]?></a></li>
                                                <?php
												}
											}?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a>Blog</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-2 header-search">
                        <a data-toggle="modal" data-target="#myModal" class="btn btn-search pull-right"><i class="fa fa-search"></i></a>
                    </div>

                </div>
            </nav>

        </header>
		<!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content set_color">
                    <div class="modal-body">
                        <button aria-label="Close" data-dismiss="modal" class="btn btn-search text-dark" type="button"><i class="fa fa-remove"></i></button> 
                        <div class="input-group margin-top" id="search">
                            <input type="text" class="form-control remove-radious" placeholder="Search" value="" name="search">
                            <span class="input-group-btn">
                                <button class="btn btn-search text-dark" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div> 
                    </div>
                </div>

            </div>
        </div>
</html>