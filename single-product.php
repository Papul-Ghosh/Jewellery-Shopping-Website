<!--File Name: single-product.html
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
		<?php
					$pid=$_REQUEST["pid"];
					$sql="select * from products where pid= '".$pid."'";
					$rs=mysqli_query($con,$sql);
					$row=mysqli_fetch_array($rs);
							
		?>
        <div id="main-content">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="home.php"><i class="fa fa-home"></i></a></li>
                    <li><a><?=$row[1]?></a></li>
                </ul>
                <div class="row">                               
                    <div class="col-sm-12" id="content">            
                        <div class="row">
                            <div class="col-sm-5">
                                <ul style="padding-left: 0" class="thumbnails">
                                    <li class="product_img">
                                        <a class="thumbnail"><img src="<?=$row[4]?>" class="changeimg"></a>
                                    </li>
                                    <li class="image-additional">
                                        <a class="thumbnail"> <img class="galleryimg" src="<?=$row[4]?>" width="100"></a>
                                    </li>
                                    <li class="image-additional">
                                        <a class="thumbnail"> <img class="galleryimg" src="<?=$row[4]?>" width="100"></a>
                                    </li>
                                    <li class="image-additional">
                                        <a class="thumbnail"> <img class="galleryimg" src="<?=$row[4]?>" width="100"></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-7 product_desc set_color">

                                <h2><?=$row[1]?></h2>
                                <ul class="list-unstyled">
                                    <li>Brand: <a class="brand_name">Aurum Collection</a></li>
                                    <li>Product: <?=$row[2]?></li>
                                    <li>Reward Points: 600</li>
                                    <li><span>Availability:</span> <span class="check-stock">In Stock</span></li>
                                </ul>

                                <ul class="list-unstyled">
                                    <li>
                                        <h3>Price: ₹ <?=$row[3]?></h3>
                                    </li>
                                    <li><h4>GST(3.00%): ₹ <?=$row[3]*0.03?></h4></li>
                                </ul>
                                <div id="product">
                                    <div class="row set_color">
                                        <div class="form-group">
                                            <form method="post">
											<!--<div class="col-md-6">
                                                <label for="input-quantity" class="control-label">Qty</label>
                                                <input type="number" class="form-control" id="input-quantity" value="1" name="qty" min="1">
                                            </div>-->
                                            
											<div class="col-md-6 margin-top">
                                                <a class="btn btn-primary btn-lg btn-block" id="button-cart" href="cart.php?pid=<?=$row[0]?>" style="color: #fff">Add to Cart</a>
                                            </div>
											</form>
                                        </div>
                                    </div>
                                </div>
                                <div class="rating margin-top ">
                                    <p>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    </p>

                                    <div class="btn-group">
                                        <button class="btn btn-default"  type="button"><i class="fa fa-heart"></i></button>
                                        <button class="btn btn-default"  type="button"><i class="fa fa-exchange"></i></button>
                                    </div>
                                    <hr>
                                    <!-- AddThis Button BEGIN -->


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <ul class="nav nav-tabs margin-top">
                                    <li class="active"><a data-toggle="tab" href="#tab-description">Description</a></li>
                                    <li><a data-toggle="tab" href="#tab-specification">Specification</a></li>
                                    <li><a data-toggle="tab" href="#tab-review">Reviews (0)</a></li>
                                </ul>
                                <div class="tab-content margin-top">
                                    <div id="tab-description" class="tab-pane active"><div>
                                            <p>
                                                <b>Lorem Small</b></p>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p>
                                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="tab-specification" class="tab-pane">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td colspan="2"><strong>Size</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>test 1</td>
                                                    <td>Large</td>
                                                </tr>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <td colspan="2"><strong>Size</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Small</td>
                                                    <td>Large</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="tab-review" class="tab-pane">
                                        <form id="form-review" class="form-horizontal">
                                            <div id="review"><p>There are no reviews for this product.</p>
                                            </div>
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label for="input-name" class="control-label">Your Name</label>
                                                    <input type="text" class="form-control" id="input-name" value="" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label for="input-review" class="control-label">Your Review</label>
                                                    <textarea class="form-control" id="input-review" rows="5" name="text"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label">Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" value="1" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="2" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="3" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="4" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="5" name="rating">
                                                    &nbsp;Good</div>
                                            </div>
                                            <div class="buttons clearfix">
                                                <div class="pull-right">
                                                    <button class="btn btn-primary" id="button-review" type="button">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h2>Related Products</h2>
                            <ul class="related-slider">
						
                                <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature-product-shop">
                                    <div class="image">
                                        <a href="single-product.php"> <img class="img-responsive" src="images/img5.jpg"></a>
                                    </div>
                                    <div class="media-image-hover">
                                        <h4><a href="single-product.php">necklace</a></h4>
                                        <p class="price">
                                            $602.00                                                     
                                        </p>
                                        <ul class="margin-top">
                                            <li><a><i class="fa fa-exchange"></i></a></li>
                                            <li><a><i class="fa fa-heart"></i></a></li>
                                            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--divider-->
        <div class="divider"></div>
        <!--end-->
        <!--footer-->
        <?php
		include("footer.php");
		?>
        <!--end-->
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
        <script>
            $("document").ready(function () {

                $(".galleryimg").on("click", function () {
                    var src = $(this).attr('src');
                    console.log(src)
                    $(".changeimg").attr('src', src);
                });


            });
        </script>
        <script>
        <script>
            $(document).ready(function () {
                $('.related-slider').bxSlider({
                    controls: true,
                    slideMargin: 10,
                    minSlides: 1,
                    maxSlides: 5,
                    slideWidth: 200,
                    infiniteLoop: true,
                    moveSlides: 1
                });


            });
        </script>

    </body>
</html>