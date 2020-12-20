<!--File Name: product.html
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
                
				<?php
				$id=$_REQUEST["id"];
				if(substr($id,0,1)=="m")
				{
					?>
					<li><a>
					<?php
					echo "Men";
					?>
					</a></li>
					<li><a>
					<?php
					if($id=="m1")
						echo "Earrings";
					else if($id=="m2")
						echo "Chains";
					else if($id=="m3")
						echo "Lockets";
					else if($id=="m4")
						echo "Rings";
					else if($id=="m5")
						echo "Wristlets";
				
			?>
			</a></li>
			<?php
				}
			?>
			
			<?php
			if(substr($id,0,1)=="w")
				{
					?>
					<li><a>
					<?php
					echo "Women";
					?>
					</a></li>
					<li><a>
					<?php
					if($id=="w1")
						echo "Earrings";
					else if($id=="w2")
						echo "Bangles";
					else if($id=="w3")
						echo "Bracelets";
					else if($id=="w4")
						echo "Necklaces";
					else if($id=="w5")
						echo "Chains";
					else if($id=="w6")
						echo "Lockets";
					else if($id=="w7")
						echo "Rings";
				
				?>
				</a></li>
				<?php
				}
				?>
				<?php
			if(substr($id,0,1)=="k")
				{
					?>
					<li><a>
					<?php
					echo "Kids";
					?>
					</a></li>
					<li><a>
					<?php
					if($id=="k1")
						echo "Earrings";
					else if($id=="k2")
						echo "Bangles";
					else if($id=="w3")
						echo "Chains";
					else if($id=="w4")
						echo "Rings";
					?>
				</a></li>
				<?php
				}
				?>
			
				<!--<li><a>Product</a></li>-->
            </ul>
            <div class="row"><aside class="col-sm-3 hidden-xs" id="column-left">
                    <div class="box-heading">
                        <h3>Category</h3>
                    </div>
                    <div class="list-group">
					<?php
											include("connect.php");
											$id=$_REQUEST["id"];
											if(substr($id,0,1)=="m")
											{
											$sql="select * from men_category";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
			
											?>
                        <a class="list-group-item"href="product.php?id=<?=$row[0]?>"><?=$row[1]?></a>
						<?php
												}
											}
											}
											else if(substr($id,0,1)=="w")
											{
											$sql="select * from women_category";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
			
											?>
                        <a class="list-group-item"href="product.php?id=<?=$row[0]?>"><?=$row[1]?></a>
						<?php
												}
											}
											}
											else if(substr($id,0,1)=="k")
											{
											$sql="select * from kid_category";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
			
											?>
                        <a class="list-group-item"href="product.php?id=<?=$row[0]?>"><?=$row[1]?></a>
						<?php
												}
											}
											}
						?>
                    </div>


                </aside>
                <div class="col-sm-9 product-cat" id="content">
					<?php
											include("connect.php");
											$id=$_REQUEST["id"];
											if(substr($id,0,1)=="m")
											$sql="select * from men_category where id='".$id."'";
											
											if(substr($id,0,1)=="w")
												$sql="select * from women_category where id='".$id."'";
											
											if(substr($id,0,1)=="k")
												$sql="select * from kid_category where id='".$id."'";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												$row=mysqli_fetch_array($rs)
					?>			
                    <h2><?=$row[1]?></h2>
											<?php
											}
											?>
                    <h3>Refine Search</h3>
                    <div class="row">
                        <div class="col-sm-3">
                            <ul>
                                <li><a><i aria-hidden="true" class="fa fa-caret-right fa-lg"></i> test 1 (0)</a></li>
                                <li><a><i aria-hidden="true" class="fa fa-caret-right fa-lg"></i> test 2 (0)</a></li>
                            </ul>
                        </div>
                    </div>
                    <p><a id="compare-total">Product Compare (0)</a></p>
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="btn-group hidden-xs">
                                <a class="btn btn-default" id="list-view" href="product-list.php"><i class="fa fa-th-list"></i></a>
                                <a class="btn btn-default" id="grid-view" href="product.php"><i class="fa fa-th"></i></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 text-right text_l mt-20">
                            <label for="input-sort" class="control-label">Sort By:</label>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 text-right mt-20">
                            <select class="form-control" id="input-sort">
                                <option selected="selected">Default</option>
                                <option>Name (A - Z)</option>
                                <option>Name (Z - A)</option>
                                <option>Price (Low &gt; High)</option>
                                <option>Price (High &gt; Low)</option>
                                <option>Rating (Highest)</option>
                                <option>Rating (Lowest)</option>
                                <option>Model (A - Z)</option>
                                <option>Model (Z - A)</option>
                            </select>
                        </div>
                        <div class="col-md-1 col-sm-2 col-xs-12 text-right text_l mt-20">
                            <label for="input-limit" class="control-label">Show:</label>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12 text-right mt-20">
                            <select class="form-control">
                                <option selected="selected">15</option>
                                <option>25</option>
                                <option>50</option>
                                <option>75</option>
                                <option>100</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row width-50">
					<?php
									include("connect.php");
									if(isset($id))
									{
											$sql="select * from products where cid='".$id."'";
											$rs=mysqli_query($con,$sql);
											$count=mysqli_num_rows(($rs));
											if($count>0)
											{
												while($row=mysqli_fetch_array($rs))
												{
											?>
                        
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						    
                            <div class="product-thumb">
							    
                                <div class="box-image">
								    
                                    <a href="single-product.php?pid=<?=$row[0]?>"><img class="img-responsive" src="<?=$row[4]?>"></a>
                                    <div class="caption-block">
									    <div class="inner-caption-block">
                                            <h4><a href="single-product.php?pid=<?=$row[0]?>"><?=$row[1]?></a></h4>
                                            <p>
                                                <?=$row[2]?>
                                            </p>
                                            <p class="price">
                                                <span class="price-new">₹<?=$row[3]?> </span>
                                                <span class="price-tax">GST: 3.00%</span>
                                            </p>
                                        </div>
																					
                                    </div>
                                </div>
										
                                <div>
                                    <div class="button-group">
                                        <a class="btn btn-primary" href="cart.php?pid=<?=$row[0]?>"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></a>
                                        <button class="btn btn-default" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart"></i><span>&nbsp;</span></button>
                                        <button class="btn btn-default" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i><span>&nbsp;</span></button>
                                    </div>
                                </div>
                            </div>
							<p class="product-price"><h3>₹<?=$row[3]?></h3></p>
                        </div>
                        
                         <?php
												}
												}
											}
											?>
							   
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