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
                <li><a href="admin.php">Admin Territory</a></li>
            </ul>
            <div class="row">
                <aside class="col-sm-3 hidden-xs" id="column-left">
                    <div class="list-group"> 
                        <a class="list-group-item" href="viewproduct.php">View product</a>
						<a class="list-group-item" href="addproduct.php">Add product</a>
						<a class="list-group-item" href="viewproduct.php">Update product</a>
						<a class="list-group-item" href="viewproduct.php">Delete product</a>
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
                        <div class="col-sm-8">
                            <div class="well set_color">
                                <h2>Admin</h2>
                                <p>By accessing this area you can modify the database as well as the official Aurum website.</p>
                                <a class="btn btn-primary" href="viewproduct.php">view product</a>
								<a class="btn btn-primary" href="addproduct.php">add product</a>
								<a class="btn btn-primary" href="viewproduct.php">update product</a>
								<a class="btn btn-primary" href="viewproduct.php">delete product</a>
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