<!--File Name: contact.html
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
		
		
		<div class="container">
            <ul class="breadcrumb">
                <li><a href="home.html"><i class="fa fa-home"></i></a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
			
			<div>
			<style>
			   #map {
				height: 400px;
				width: 100%;
			   }
			</style>
			<div id="map"></div>
			<script>
			  function initMap() {
				var uluru = {lat: 22.591948, lng: 88.360962};
				var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 15,
				  center: uluru
				});
				var marker = new google.maps.Marker({
				  position: uluru,
				  map: map
				});
			  }
			</script>
			<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFzJoGMPGNntuXncXMGdmO5PNAP9F2OmI&callback=initMap">
			</script>
			</div>
			<br>
			
			<div style="width:100%">
				<div style="float:left; width:23%; border:1px solid black; font-weight:bold"> 
						<div class="box-heading" style="background-color:red ">
							<h3>Corporate Office</h3>
						</div>
						<div style="margin-left:10px">
							<p>Aurum Collection pvt. ltd.</p>
							<p> 420, Aakash Patal Sarani</p>
							<p>Kolkata- 700006</p>
							<p>West Bengal, India</p>
							<p>Phone:(+91)-8981984550</p>
							<p>Email: aurum@gmail.com</p>
						</div>
						<a style="width:260px" class="btn btn-primary btn-lg" href="https://www.google.co.in/maps/place/Maa+Tara+Star+Ornaments/@22.5919528,88.3587736,17z/data=!3m1!4b1!4m5!3m4!1s0x3a0277cb0d87fb45:0x38d2248f5bde2bf4!8m2!3d22.5919479!4d88.3609623?hl=en" target="blank"><i class="fa fa-map-marker"></i> 
                                                Location</a>
				</div>	
        		
				<div class="col-sm-9 product-cat" style="float:left; width:77%">
				
					<div style=" margin-left:50px; width:800px; border:1px solid black;padding:10px;height:500px">
					<h3 style="margin-left:70px">Contact Us by Email</h3>
					<h6 style=" margin-left:580px">All * marked fields are mandatory.</h6>
					<hr>
						<form method ="post" class="form-horizontal set_color">
                      
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
                                <label for="input-firstname" class="col-sm-2 control-label">First Name: <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname" required>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-lastname" class="col-sm-2 control-label">Last Name: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-email" class="col-sm-2 control-label">E-Mail: <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email" required>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-telephone" class="col-sm-2 control-label">Phone: <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone" required>
                                </div>
                            </div>
							<div class="form-group required">
                                <label for="input-subject" class="col-sm-2 control-label">Subject: <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-subject" placeholder="subject" value="" name="sub" required>
                                </div>
                            </div>
							<div class="form-group required">
                                <label for="input-comment" class="col-sm-2 control-label">Comment/ Query: <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-comment" placeholder="Comment/Query" value="" name="comment" required>
                                </div>
                            </div>
							
                            <div class="pull-right">I have read and agree to the <a class="agree"><b>Privacy Policy</b></a>      
                                <input type="checkbox" value="1" name="agree" required>
                                &nbsp;
                                <input type="submit" name= "btn" class="btn btn-primary" value="Submit">
                            </div>
                                                </form>
						
					</div>
				</div>
			</div>
									
		</div>		
        <!--end-->

		
		
		

        <!--end-->
        <!--footer-->
        <?php
		include("footer.php");
		?>
    </body>
</html>