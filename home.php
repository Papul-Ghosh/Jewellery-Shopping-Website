<!--File Name: home.html
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
        
        <!--Modal end--->


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#">
                        <img src="images/banner_ring.jpg" width="1500 px" height="340 px">
					</a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="images/diamond_banner.jpg" width="1500 px" height="340 px">
                    </a>
                </div>

                <div class="item">
                    <a href="#">
                        <img src="images/ring_banner.jpeg" width="1500 px" height="340 px">
                    </a>
                </div>
            </div>
            <!--<div class="buy"><a href="product.php"><i class="fa fa-shopping-basket"></i> SHOP NOW!</a></div>
             Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-chevron-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--shop gallery-->
        <div class="container">
		
            <div class="row shop-gallery">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2><span>SHOP</span> GALLERY</h2>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-5">
                    <p><a>Click products to buy</a></p>
                </div>		
            </div>
            <hr/>
            <div class="mmp">
				<div class="row">

                
					<?php
									include("connect.php");
											$sql="select * from products group by cid";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
											?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-shop">
                        <div class="image">
                            <a href="single-product.php?pid=<?=$row[0]?>"><img class="img-responsive" title="<?=$row[1]?>" alt="<?=$row[1]?>" src="<?=$row[4]?>"></a>
                        </div>
                        <div class="media-image-hover">
                            <h4><a class="latest-product-name" href="single-product.php?pid=<?=$row[0]?>"><?=$row[1]?></a></h4>
                            <!--<div class="triangle-down"><div></div></div>-->
                            <ul>
                                <li><a><i class="fa fa-exchange"></i></a></li>
                                <li><a><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart.php?pid=<?=$row[0]?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>

                        <!--<p class="price">!-->
         <!--               <p class="product-price">₹<?=$row[3]?></p>--> 
                        <span class="price-tax"> </span>
                        <!--</p>!-->
                    </div>
					
					<?php
												}
											}
					?>
					</div>
				</div>
                    
            <div class="row arrival-products">
                <div class="col-xs-12 col-sm-6 col-md-4">
                 <h2><span>Arrival</span> Products</h2>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-5">
                    <p><a>Choose your Bridal Ornaments</a></p>
                </div>		
            </div>
            <hr/>
            <div class="mmp">
                <div class="row">
                    <?php
									include("connect.php");
											$sql="select * from wedding_collection";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
											?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature-product-shop">
                        <div class="image">
                            <a href="single-product.php?pid=<?=$row[0]?>"> <img class="img-responsive" src="<?=$row[4]?>"></a>
                        </div>
                        <div class="media-image-hover">
                            <h4><a href="single-product.php?pid=<?=$row[0]?>"><?=$row[1]?></a></h4>
                            <p class="price">
       <!--                         ₹<?=$row[3]?> -->     
                            </p>
                            <ul class="margin-top">
                                <li><a><i class="fa fa-exchange"></i></a></li>
                                <li><a><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart.php?pid=<?=$row[0]?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
				<!--		<p class="product-price"><h3>₹<?=$row[3]?></h3></p>-->
                    </div>
					<?php
												
												}
											}
					
					
					?>
				</div>
            </div>
            <!--end-->
            <!--offer-->
            <div class="row special-offers">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2><span>Special</span> Offers - <span> 10%</span> OFF</h2>
                </div>
            </div>
            <hr>
            <div class="mmp">
                <div class="row">
				<?php
									include("connect.php");
											$sql="select * from special_offers";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
											?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature-product-shop">
                        <div class="image">
                            <a href="single-product.php?pid=<?=$row[0]?>"> <img class="img-responsive" src="<?=$row[4]?>"></a>
                        </div>
                        <div class="media-image-hover">
                            <h4><a href="single-product.php?pid=<?=$row[0]?>"><?=$row[1]?></a></h4>
                            <p class="price">
                    <!--          ₹<?=$row[3]?>                                       -->                
                            </p>
                            <ul class="margin-top">
                                <li><a><i class="fa fa-exchange"></i></a></li>
                                <li><a><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart.php?pid=<?=$row[0]?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>  
					<!--	<p class="product-price"><h3>₹<?=$row[3]?></h3></p>-->
                    </div>

					<?php
												
											}
									}
					
					
					?>
                </div>
            </div>
            <!--end-->
		</div>
        <div class="divider"></div>
        <!--end-->
        <!--footer-->
        <?php
		include("footer.php");
		?>
    </body>
			
		
</html>