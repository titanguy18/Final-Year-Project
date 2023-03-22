@extends('layout')
@section('content')
<section class="inner-w3ls">
	<div class="container">
		<h2 class="text-center w3layouts w3 w3l agileits agileinfo">Track Your Product</h2>
		<p class="text-center w3layouts w3 w3l agileits agileinfo">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
	</div>
</section>
<!-- /banner section -->
<!-- tracking section -->
<section class="shipment-w3ls">
	<div class="container">
		<i class="fa fa-braille" aria-hidden="true"></i>
		<h3 class="text-center wthree w3-agileits agileits-w3layouts agile w3-agile">Shipment Track</h3>
		<p class="text-center wthree w3-agileits agileits-w3layouts agile w3-agile">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	</div>
	<div class="container">
		<div class="content-w3ls">	
			<div class="content1-w3ls">
				<h2>Order Tracking: Order No</h2>
			</div>
			<div class="content2-w3ls">
				<div class="content2-header1">
					<p>Shipped Via : <span>Ipsum Dolor</span></p>
				</div>
				<div class="content2-header1">
					<p>Status : <span>Checking Quality</span></p>	
				</div>
				<div class="content2-header1">
					<p>Expected Date : <span>7-NOV-2016</span></p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="content3-w3ls">
				<div class="shipment">
					<div class="confirm">
						<div class="imgcircle">
							<img src="images/confirm.png" alt="confirm order">
						</div>
						<span class="line"></span>
						<p>Confirmed Order</p>
					</div>
					<div class="process">
						<div class="imgcircle">
							<img src="images/process.png" alt="process order">
						</div>
						<span class="line"></span>
						<p>Processing Order</p>
					</div>
					<div class="quality">
						<div class="imgcircle">
							<img src="images/quality.png" alt="quality check">
						</div>
						<span class="line"></span>
						<p>Quality Check</p>
					</div>
					<div class="dispatch">
						<div class="imgcircle">
							<img src="images/dispatch.png" alt="dispatch product">
						</div>
						<span class="line"></span>
						<p>Dispatched Item</p>
					</div>
					<div class="delivery">
						<div class="imgcircle">
							<img src="images/delivery.png" alt="delivery">
						</div>
						<p>Product Delivered</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>	
</section>	
<!-- /tracking section -->
<!-- transit section -->
<section class="transit-w3ls">
	<div class="container">
		<i class="fa fa-trophy" aria-hidden="true"></i>
		<h3 class="text-center">Transit Location</h3>
		<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	</div>
	<div class="container">
		<div class="colorful-tab-wrapper" id="colorful-flatline">
			<ul class="colorful-tab-menu">
				<li class="colorful-tab-menu-item active" tab-color="#445370"><a href="#fl-0">USA</a></li>
				<li class="colorful-tab-menu-item" tab-color="#00A566"><a href="#fl-1">Australia</a></li>
				<li class="colorful-tab-menu-item" tab-color="#C9003C"><a href="#fl-2">Germany</a></li>
				<li class="colorful-tab-menu-item" tab-color="#E54400"><a href="#fl-3">France</a></li>
				<li class="colorful-tab-menu-item" tab-color="#33accc"><a href="#fl-4">England</a></li>
			</ul>
			<div class="colorful-tab-container">  
				<div class="colorful-tab-content active" id="fl-0"> 
					<div class="skill-info">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Location</th>
										<th>Taking Order</th>
										<th>Processing</th>
										<th>Dispatched</th>
										<th>In-Transit</th>
										<th>Delivered</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="images/usa.png" alt="w3ls" class="img-responsive">
											<h4>Washington.DC</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/usa.png" alt="w3ls" class="img-responsive">
											<h4>San Francisco</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/usa.png" alt="w3ls" class="img-responsive">
											<h4>New York</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/usa.png" alt="w3ls" class="img-responsive">
											<h4>Los Angeles</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
									</tr>
									<tr>
										<td>
											<img src="images/usa.png" alt="w3ls" class="img-responsive">
											<h4>Miami</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="colorful-tab-content" id="fl-1">
					<div class="skill-info">	
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Location</th>
										<th>Taking Order</th>
										<th>Processing</th>
										<th>Dispatched</th>
										<th>In-Transit</th>
										<th>Delivered</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="images/australia.png" alt="w3ls" class="img-responsive">
											<h4>Sydney</h4>
											<div class="clearfix"></div>	
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
									</tr>
									<tr>
										<td>
											<img src="images/australia.png" alt="w3ls" class="img-responsive">
											<h4>Melbourne</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/australia.png" alt="w3ls" class="img-responsive">
											<h4>Brisbane</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/australia.png" alt="w3ls" class="img-responsive">
											<h4>Adelaide</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/australia.png" alt="w3ls" class="img-responsive">
											<h4>Perth</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>	
				</div>
				<div class="colorful-tab-content" id="fl-2"> 
					<div class="skill-info">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Location</th>
										<th>Taking Order</th>
										<th>Processing</th>
										<th>Dispatched</th>
										<th>In-Transit</th>
										<th>Delivered</th>
									</tr>
								</thead>
								<tbody>
									<th>
										
									</th>
									<tr>
										<td>
											<img src="images/germany.png" alt="w3ls" class="img-responsive">
											<h4>Frankfurt</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/germany.png" alt="w3ls" class="img-responsive">
											<h4>Munich</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
									</tr>
									<tr>
										<td>
											<img src="images/germany.png" alt="w3ls" class="img-responsive">
											<h4>Stuttgart</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/germany.png" alt="w3ls" class="img-responsive">
											<h4>Brussels</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/germany.png" alt="w3ls" class="img-responsive">
											<h4>Berlin</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>	
				</div>
				<div class="colorful-tab-content" id="fl-3"> 
					<div class="skill-info">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Location</th>
										<th>Taking Order</th>
										<th>Processing</th>
										<th>Dispatched</th>
										<th>In-Transit</th>
										<th>Delivered</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="images/france.png" alt="w3ls" class="img-responsive">
											<h4>Paris</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
									</tr>
									<tr>
										<td>
											<img src="images/france.png" alt="w3ls" class="img-responsive">
											<h4>Marseille</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/france.png" alt="w3ls" class="img-responsive">
											<h4>Bordeaux</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/france.png" alt="w3ls" class="img-responsive">
											<h4>Lyon</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/france.png" alt="w3ls" class="img-responsive">
											<h4>Lille</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>	
				</div>
				<div class="colorful-tab-content" id="fl-4"> 
					<div class="skill-info">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Location</th>
										<th>Taking Order</th>
										<th>Processing</th>
										<th>Dispatched</th>
										<th>In-Transit</th>
										<th>Delivered</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="images/uk.png" alt="w3ls" class="img-responsive">
											<h4>London</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/uk.png" alt="w3ls" class="img-responsive">
											<h4>Birmingham</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
									</tr>
									<tr>
										<td>
											<img src="images/uk.png" alt="w3ls" class="img-responsive">
											<h4>Manchester</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/uk.png" alt="w3ls" class="img-responsive">
											<h4>Liverpool</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Done</td>
										<td>Pending</td>
									</tr>
									<tr>
										<td>
											<img src="images/uk.png" alt="w3ls" class="img-responsive">
											<h4>Bristol</h4>
											<div class="clearfix"></div>
										</td>
										<td>Done</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
										<td>Pending</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>	
				</div>
			</div>
		</div>
  <!-- Flatline -->
	</div>
</section>