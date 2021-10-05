@include('layout')
<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Cart</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="cart.html">Cart</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <section class="cart_table_area p_100">
        	<div class="container">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Preview</th>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/product/cart-img.jpg" alt="">
								</td>
								<td>{{$product_details->productName}}</td>
								<td id="product_price">{{$product_details->productPrice}}</td>

								<td>
									<select class="product_select" id="product_select">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option> 
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td class="product_total"></td>
								
							</tr>
							
						</tbody>
					</table>
				</div>
       		
        	</div>
        </section>
		<section class="billing_details_area p_100">
            <div class="container">
                
                <div class="row">
                	<div class="col-lg-7">
               	    	<div class="main_title">
               	    		<h2>Billing Details</h2>
               	    	</div>
                		<div class="billing_form_area">
                			<form class="billing_form row" action="{{ url('addOrder') }}" method="post" id="contactForm" novalidate="novalidate">
							{{ csrf_field() }}	
								<div class="form-group col-md-6">
								    <label for="first">First Name *</label>
									<input type="hidden" class="form-control" id="orderTotal" name="orderTotal" >
									<input type="hidden" class="form-control" id="orderProductName" value="{{$product_details->productName}}"name="orderProductName" >
									<input type="hidden" class="form-control" id="orderQuantity" name="orderQuantity" >
									<input type="text" class="form-control" id="first" name="orderFirstName" placeholder="First Name">
								</div>
								<div class="form-group col-md-6">
								    <label for="last">Last Name *</label>
									<input type="text" class="form-control" id="last" name="orderSecondName" placeholder="Last Name">
								</div>
								
								<div class="form-group col-md-12">
								    <label for="address">Address *</label>
									<input type="text" class="form-control" id="address" name="orderAddress" placeholder="Street Address">
									
								</div>
								<div class="form-group col-md-12">
								    <label for="city">Town / City *</label>
									<input type="text" class="form-control" id="city" name="orderCity" placeholder="Town /City">
								</div>


								<div class="form-group col-md-12">
								    <label for="city">State *</label>
									<input type="text" class="form-control" id="city" name="orderState" placeholder="Town /City">
								</div>
								<div class="form-group col-md-6">
								    <label for="zip">Postcode / Zip *</label>
									<input type="text" class="form-control" id="zip" name="orderZip" placeholder="Postcode / Zip">
								</div>
								<div class="form-group col-md-6">
								    <label for="email">Email Address *</label>
									<input type="email" class="form-control" id="email" name="orderEmail" placeholder="Email Address">
								</div>
								<div class="form-group col-md-6">
								    <label for="phone">Phone *</label>
									<input type="text" class="form-control" id="phone" name="orderPhoneNumber" placeholder="Phone Number">
								</div>
								
								
							
                		</div>
                	</div>
                	<div class="col-lg-5">
                		<div class="order_box_price">
                			<div class="main_title">
                				<h2>Your Order</h2>
                			</div>
							<div class="payment_list">
								<div class="price_single_cost">
									
									
									<h5>Shipping And Handling<span class="text_f">Free Shipping</span></h5>
									<h3 class="product_total">Total <span>$65.00</span></h3>
								</div>
						
								<button type="submit" value="submit" class="btn pest_btn">place order</button>
							</div>
						</div>
                	</div>
					</form>
                </div>
            </div>
        </section>
     
        <footer class="footer_area">
        	<div class="footer_widgets">
        		<div class="container">
        			<div class="row footer_wd_inner">
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_about_widget">
        						<img src="img/footer-logo.png" alt="">
        						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
        						<ul class="nav">
        							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Quick links</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Your Account</a></li>
        							<li><a href="#">View Order</a></li>
        							<li><a href="#">Privacy Policy</a></li>
        							<li><a href="#">Terms & Conditionis</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Work Times</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Mon. :  Fri.: 8 am - 8 pm</a></li>
        							<li><a href="#">Sat. : 9am - 4pm</a></li>
        							<li><a href="#">Sun. : Closed</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_contact_widget">
        						<div class="f_title">
        							<h3>Contact Info</h3>
        						</div>
        						<h4>(1800) 574 9687</h4>
        						<p>Justshiop Store <br />256, baker Street,, New Youk, 5245</p>
        						<h5>cakebakery@contact.co.in</h5>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="footer_copyright">
        		<div class="container">
        			<div class="copyright_inner">
        				<div class="float-left">
        					<h5>© Copyright  cakebakery WordPress WooCommerce Theme. All right reserved.</h5>
        				</div>
        				<div class="float-right">
        					<a href="#">Purchase Now</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
       
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
       
        <script src="js/jquery-3.2.1.min.js"></script>
      
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
      
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <script src="js/theme.js"></script>
		<script>
			$( document ).ready(function() {
				var product_price=$('#product_price').text();
				$('.product_total').text(product_price);
				$('#orderTotal').val(product_price);
				$('#orderQuantity').val(1);
			$('#product_select').on('change', function() {
			
				var product_select=$('#product_select').val();
				var product_total=product_price*product_select;
				$('.product_total').text(product_total);
				$('#orderQuantity').val(product_select);
				$('#orderTotal').val(product_total);
			});
		});
		</script>
    </body>
</html>
      
      