<!--File Name: invoice.html
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
		
		
		

		<div id="collapse-checkout-confirm">
                        <div class="panel-body">
							<div class="table-responsive">
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
                                <div class="pull-right">
                                    <input type="submit" name="s4" class="btn btn-primary" id="button-confirm" value="Confirm Order">
                                </div>
                            </div>

                        </div>
                    </div>
		
		
		
		
		
		<!--footer-->
        <div class="divider"></div>
        <!--end-->
        
        <?php
		include("footer.php");
		?>
    </body>
			
		
</html>