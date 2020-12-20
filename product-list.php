<!--File Name: product-list.html
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
                <li><a>Product</a></li>
            </ul>
            <div class="row">
                <aside class="col-sm-3 hidden-xs" id="column-left">
                    <div class="box-heading">
                        <h3>Category</h3>
                    </div>
                    <div class="list-group">
					<?php
											include("connect.php");
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
						?>
                    </div>


                </aside>
                <div class="col-sm-9 product-cat" id="content">     
                    <h2>Leather Bag</h2>
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
                    <div class="row">
                        <div class="product-layout product-list col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="single-product.php?pid=<?=$row[0]?>"><img class="img-responsive" src="images/pro12.jpg"></a></div>
                                <div>
                                    <div class="caption">
                                        <h4><a href="single-product.php?pid=<?=$row[0]?>">silver earring</a></h4>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                        </p>
                                        <p class="price">
                                            <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $90.00</span>
                                        </p>
                                    </div>
                                    <div class="button-group">
                                        <a class="btn btn-primary" href="cart.php"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></a>
                                        <button class="btn btn-default" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart"></i><span>&nbsp;</span></button>
                                        <button class="btn btn-default" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i><span>&nbsp;</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-list col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="single-product.php?pid=<?=$row[0]?>"><img class="img-responsive" src="images/pro8.jpg"></a></div>
                                <div>
                                    <div class="caption">
                                        <h4><a href="single-product.php?pid=<?=$row[0]?>">earrings</a></h4>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                        </p>
                                        <p class="price">
                                            <span class="price-new">$55.00</span> <span class="price-old">$75.00</span>
                                            <span class="price-tax">Ex Tax: $10.00</span>
                                        </p>
                                    </div>
                                    <div class="button-group">
                                        <a class="btn btn-primary" href="cart.php"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></a>
                                        <button class="btn btn-default" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart"></i><span>&nbsp;</span></button>
                                        <button class="btn btn-default" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i><span>&nbsp;</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-list col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="single-product.php?pid=<?=$row[0]?>"><img class="img-responsive" src="images/pro3.jpg"></a></div>
                                <div>
                                    <div class="caption">
                                        <h4><a href="single-product.php?pid=<?=$row[0]?>">Bag</a></h4>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                        </p>
                                        <p class="price">
                                            <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $90.00</span>
                                        </p>
                                    </div>
                                    <div class="button-group">
                                        <a class="btn btn-primary" href="cart.php"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></a>
                                        <button class="btn btn-default" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart"></i><span>&nbsp;</span></button>
                                        <button class="btn btn-default" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i><span>&nbsp;</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">Showing 1 to 2 of 2 (1 Pages)</div>
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