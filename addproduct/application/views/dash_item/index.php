<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Add item or product | Sangoma Bootstrap Admin Template</title>
		<meta name="description" content="">
		<meta name="author" content="Walking Pixels | www.walkingpixels.com">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Lightbox -->
		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>css/plugins/lightbox/lightbox.css'>
		
		<!-- Styles -->
	
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

		<link rel="stylesheet" href="<?php echo base_url(); ?>css/sangoma-purple.css">
		<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> -->
		<!-- JS Libs -->
	
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->

		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
		<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/libs/jquery.js"><\/script>')</script>
		<script src="<?php echo base_url(); ?>js/libs/modernizr.js"></script>

		<!-- IE8 support of media queries and CSS 2/3 selectors -->
		<!--[if lt IE 9]>
			<script src="js/libs/respond.min.js"></script>
			<script src="js/libs/selectivizr.js"></script>
		<![endif]-->
		
		<script>
			$(document).ready(function(){
				
				// Tooltips
				$('[title]').tooltip();
				
			});
		</script>
		
		<script type="text/javascript">
			var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-22557155-10"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();
		</script>


	</head>

	<?php

			error_reporting(0);
?>

<style>

body {
  font-family: Verdana, Geneva, sans-serif;
  font-size: 14px;
  background: #f2f2f2;
}

.clearfix:after {
  content: "";
  display: block;
  clear: both;
  visibility: hidden;
  height: 0;
}

h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	margin-left: 10px;
	margin-right: 10px;
}

</style>
	<body>
		
		<!-- Full height wrapper -->
		<div id="wrapper">

			<!-- Main page header -->
			<header id="header" class="container">

				<h1>
					<!-- Main page logo -->
					<a href="login.html">Sangoma</a>
					
					<!-- Main page headline -->
					<span>A flat Bootstrap admin template</span>
				</h1>
				
				<!-- User profile -->
				<div class="user-profile">
					<figure>

						<!-- User profile avatar -->
						<img alt="John Pixel avatar" src="http://placekitten.com/60/60">

						<!-- User profile info -->
						<figcaption>
							<strong><a href="user-profile.html">John Pixel</a></strong>
							<ul>
								<li><a href="<?php echo base_url(); ?>add-item.html#" title="Message inbox">inbox</a></li>
								<li><a href="<?php echo base_url(); ?>add-item.html#" title="Account settings">settings</a></li>
								<li><a href="<?php echo base_url(); ?>login.html" title="Logout">logout</a></li>
							</ul>
						</figcaption>
						<!-- /User profile info -->

					</figure>
				</div>
				<!-- /User profile -->

				<!-- Main navigation -->
				<nav class="main-navigation navbar navbar-default" role="navigation">

					<!-- Collapse navigation for mobile -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navigation-collapse">
							<span class="elusive icon-file"></span> Add item
						</button>
					</div>
					<!-- /Collapse navigation for mobile -->

					<!-- Navigation -->
					<div class="main-navigation-collapse collapse navbar-collapse">

						<!-- Navigation items -->
						<ul class="nav navbar-nav">

							<li>
								<a  href="<?php echo base_url();?>dash_item_add"><span class="elusive icon-home"></span> Dashboard</a>
							</li>

							<!-- Dropdown navigation items -->
							<li class="dropdown">
								<a href="add-item.html#" class="dropdown-toggle" data-toggle="dropdown"><span class="elusive icon-asl"></span> Components <b class="caret"></b></a>
								<span class="badge">23</span>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url(); ?>tables.html"><span class="elusive icon-th-list"></span> Tables</a></li>
									<li><a href="<?php echo base_url(); ?>forms.html"><span class="elusive icon-align-left"></span> Forms</a></li>
									<li><a href="<?php echo base_url(); ?>calendar.html"><span class="elusive icon-calendar"></span> Calendar</a></li>
									<li><a href="<?php echo base_url(); ?>charts.html"><span class="elusive icon-graph"></span> Charts</a></li>
									<li><a href="<?php echo base_url(); ?>gallery.html"><span class="elusive icon-picture"></span> Gallery</a></li>
									<li><a href="<?php echo base_url(); ?>file-explorer.html"><span class="elusive icon-inbox"></span> File explorer</a></li>
									<li class="divider"></li>
									<li><a href="<?php echo base_url(); ?>ui-buttons.html"><span class="elusive icon-cogs"></span> UI &amp; Buttons</a></li>
									<li><a href="<?php echo base_url(); ?>typo.html"><span class="elusive icon-font"></span> Typography</a><span class="badge">7</span></li>
									<li><a href="<?php echo base_url(); ?>grid.html"><span class="elusive icon-th"></span> Grid</a></li>
									<li><a href="<?php echo base_url(); ?>goodies.html"><span class="elusive icon-heart"></span> Goodies</a></li>
								</ul>
							</li>
							<!-- /Dropdown navigation items -->

							<!-- Dropdown navigation with multi-level dropdown -->
							<li class="dropdown">
								<a href="add-item.html#" class="dropdown-toggle" data-toggle="dropdown"><span class="elusive icon-file"></span> Extra <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="eshop.html"><span class="elusive icon-file"></span> Online store</a></li>
									<li class="active"><a href="add-item.html"><span class="elusive icon-file"></span> Add item / product</a></li>
									<li><a href="invoice.html"><span class="elusive icon-file"></span> Invoice</a></li>
									<li><a href="user-profile.html"><span class="elusive icon-file"></span> User profile</a></li>
									<li class="divider"></li>

									<!-- 2nd level dropdown -->
									<li class="dropdown-submenu">
										<a href="add-item.html#">Login Pages</a>
										<ul class="dropdown-menu">
											<li role="presentation" class="dropdown-header">Login Pages</li>
											<li><a href="login.html"><span class="elusive icon-file"></span> Login page</a></li>
											<li><a href="lost-password.html"><span class="elusive icon-file"></span> Lost password</a></li>
										</ul>
									</li>
									<!-- /2nd level dropdown -->

									<li class="dropdown-submenu">
										<a href="add-item.html#">Error Pages</a>
										<ul class="dropdown-menu">
											<li role="presentation" class="dropdown-header">Error Pages</li>
											<li><a href="<?php echo base_url(); ?>401.html"><span class="elusive icon-file"></span> Error 401</a></li>
											<li><a href="<?php echo base_url(); ?>403.html"><span class="elusive icon-file"></span> Error 403</a></li>
											<li><a href="<?php echo base_url(); ?>404.html"><span class="elusive icon-file"></span> Error 404</a></li>
											<li><a href="<?php echo base_url(); ?>500.html"><span class="elusive icon-file"></span> Error 500</a></li>
											<li><a href="<?php echo base_url(); ?>503.html"><span class="elusive icon-file"></span> Error 503</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<!-- /Dropdown navigation with multi-level dropdown -->

							<li>
								<a href="docs/index.html"><span class="elusive icon-info-sign1"></span> Docs</a>
							</li>
							<li class="nav1 active">
								<a href="<?php echo base_url(); ?>dash_item_add"><span class="elusive icon-info-sign"></span>Dashboart_Item</a>
							</li>
							
						</ul>
						<!-- /Navigation items -->

						<!-- Navigation form -->
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Type here to search&hellip;">
							</div>
							<button type="submit" class="btn btn-default"><span class="elusive icon-search"></span></button>
						</form>
						<!-- /Navigation form -->

					</div>
					<!-- /Navigation -->

				</nav>
				<!-- /Main navigation -->

			</header>
			<!-- /Main page header -->

			<!-- Main page container -->
			<section class="container" role="main">

				<!-- Page header -->
				
				<!-- /Page header -->
				
				<!-- Grid row -->
				<div class="row">

					

					<!-- Data block -->
					<article class="col-sm-12">
						<div class="red data-block">
							<header>
								<h2>Registration User Data</h2>
								<ul class="data-header-actions">
									<li><a href="add-item.html#" title="Refresh"><span class="elusive icon-refresh"></span></a></li>
								</ul>
								
						

								<button style="float:right;margin-right:30px;" type="button" class="btn btn-alt btn" data-toggle="modal" data-target="#myModal">Add User</button>

																
								<div class="container">

								<!-- Trigger the modal with a button -->
								
								<!-- Modal -->
								<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog">
									
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Add Product</h4>
									
										</div>
										<div class="modal-body">

													

<!-- form show -->

																	<div class="form_container">
																		<div class="title_container">
																			<h2>Responsive Registration Form</h2>
																		</div>

																		<form id="contact-form" role="form" method="post" action="<?php echo base_url(); ?>dash_item_add/insert" enctype="multipart/form-data">

            

<div class="controls">

	<div class="row">
		
	<div class="col-md-12">
		<div class="form-group">
		<label for="form_name">Product Type</label></br>
				
							 <input type="radio" id="html" onclick="show1();" name="fav_language" value="HTML" checked>
						  <label for="html">Standerd</label>
						  <input type="radio" id="css" onclick="show2();"  name="fav_language" value="CSS">
						  <label for="css">Media & Interactive</label>

		</div>

	</div>
	


	<script>
							function show2(){
								document.getElementById('f1').style.display ='block';
								document.getElementById('file').style.display = 'none';
								}
								function show1(){
									document.getElementById('f1').style.display ='none';
									document.getElementById('file').style.display = 'block';
									document.getElementById('file1').style.display ='none';

									document.getElementById('file2').style.display ='none';
									document.getElementById('file3').style.display ='none';
									document.getElementById('file4').style.display ='none';	
								}
								function fun1()
								{
									document.getElementById('file1').style.display ='block';

									document.getElementById('file2').style.display ='none';
									document.getElementById('file3').style.display ='none';
									document.getElementById('file4').style.display ='none';	
								}
								function fun2()
								{
									document.getElementById('file1').style.display ='none';

									document.getElementById('file2').style.display ='block';	
									document.getElementById('file3').style.display ='none';
									document.getElementById('file4').style.display ='none';	
								}
								function fun3()
								{
									document.getElementById('file1').style.display ='none';
									document.getElementById('file2').style.display ='none';
									document.getElementById('file3').style.display ='block';
									document.getElementById('file4').style.display ='none';	
								}
								function fun4()
								{
									document.getElementById('file1').style.display ='none';
									document.getElementById('file2').style.display ='none';
									document.getElementById('file3').style.display ='none';
									document.getElementById('file4').style.display ='block';	
								}
							
									
	</script>


		<div class="row" id="f1" style="display:none";>
			<div class="col-md-12">
						<div class="form-group">
										<label for="form_name">Media & Interactive</label></br>
											
									<input type="radio" id="html" onclick="fun1();" name="fav_language" value="text">
									  <label for="html">text</label>
									  <input type="radio" id="css1" onclick="fun2();" name="fav_language" value="image">
									  <label for="css">Image</label>
									  <input type="radio" id="css2" onclick="fun3();" name="fav_language" value="document">
									  <label for="css">Document</label>
									  <input type="radio" id="css3" onclick="fun4();" name="fav_language" value="video">
									  <label for="css">Video</label>				
						</div>
			</div>
		</div>


		<div class="col-md-6">


<div class="form-group" id="file1" style="display:none";>
		<label for="form_name">text</label>
		<input id="form_lastname" type="file" name="image" class="form-control" placeholder="Please  text enter url *"  data-error="Lastname is required.">
		
</div>

<div class="form-group" id="file2" style="display:none";>
		<label for="form_name">image</label>
		<input id="form_lastname" type="file" name="image" class="form-control" placeholder="Please enter image url *"  data-error="Lastname is required.">
		
</div>

<div class="form-group" id="file3" style="display:none";>
		<label for="form_name">document</label>
		<input id="form_lastname" type="file" name="image" class="form-control" placeholder="Please enter document url *"  data-error="Lastname is required.">
		
</div>

<div class="form-group" id="file4" style="display:none";>
		<label for="form_name">video</label>
		<input id="form_lastname" type="file" name="image" class="form-control" placeholder="Please enter video url *"  data-error="Lastname is required.">
		
</div>

</div>

		<div class="row">

		
			

				<div class="col-md-6">


						<div class="form-group" id="file" style="display:block";>
								<label for="form_name">image</label>
								<input id="form_name" type="file" name="image" class="form-control " placeholder="pleace select file*"  data-error="Firstname is required.">
								
						</div>
				</div>
	


				<div class="col-md-6">
						<div class="form-group">
								<label for="form_lastname">product name</label>
								<input id="form_lastname" type="text" name="name" class="form-control" placeholder="Please enter your name *"  data-error="Lastname is required.">
																								</div>
				</div>
		</div>
		<div class="row">
				<div class="col-md-6">
						<div class="form-group">
								<label for="form_email">price *</label>
								<input id="form_email" type="number" name="price" class="form-control" placeholder="Pleace enter the price"  data-error="Valid email is required.">
								
						</div>
				</div>
				<div class="col-md-6">
						<div class="form-group">
								<label for="form_need">Please Select quntity*</label>
								<select id="form_need" name="qnt" class="form-control" required="required" data-error="Please specify your need.">
										<option value="" selected disabled>--Select Your Issue--</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										
								</select>
								
						</div>
				</div>
		</div>
		<div class="row">
				<div class="col-md-12">
						<div class="form-group">
								<label for="form_message">Message *</label>
								<textarea id="form_message" name="comment" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
										>
								</div>

						</div>


				<div class="col-md-12">
						
						<input type="submit" name="submit" class="btn btn-success btn-send  pt-2 btn-block
								" value="insert" >
				
		</div>

		</div>


</div>
</form>
																	</div>


								
										<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
									
									</div>
								</div>
								
								</div>

								
										
								
							</header>

					
										
								
								

							<section>
								<!-- As a link -->
						

									<script>
									$(document).ready(function () {
  				  $("#table").DataTable();
});

</script>

								<table class="table table-striped table-condensed table-hover" id="table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Image</th>
											<th>Name</th>
											<th>Price</th>
											<th>Quntity</th>
											<th>Message</th>
											
											<th>Action</th>
										</tr>
									</thead>
									<tbody id="tbody">
										<?php
											foreach($item as $data)
											{
												?>

<tr>
											<td><?php echo $data['id'];  ?></td>
											<td><strong><?php echo $data['image']; ?></strong></td>
											<td class="text-muted"><?php echo $data['name']; ?></td>
											<td class="text-muted"><?php echo $data['price']; ?></td>
											<td class="text-muted"><?php echo $data['qnt']; ?></td>
											<td class="text-muted"><?php echo $data['info']; ?></td>
											
											
											
											<td>
												<div class="btn-group">
													<button class="btn btn-default"><span class="elusive icon-tag"><a href="<?php echo base_url();  ?>dash_item_add/delete/<?php echo $data['id']; ?>"> DELETE</a></span></button>
													<button class="btn btn-default"><span class="elusive icon-print"><a href="<?php echo base_url(); ?>dash_item_add/update/<?php echo $data['id']; ?>">Update</a></span></button>
												</div>
											</td>
										</tr>
									
<?php

											}  
										?>
										
								
									</tbody>
								</table>
							</section>
						</div>
					</article>
					<!-- /Data block -->
					
				</div>
				<!-- /Grid row -->

			</section>
			<!-- /Main page container -->
			
		</div>
		<!-- /Full height wrapper -->

		<!-- Main page footer -->
		<footer id="footer">
			<div class="container">

				<!-- Footer info -->
				<p>Built with love on <a href="http://getbootstrap.com/">Twitter Bootstrap</a> by <a href="http://www.walkingpixels.com">Walking Pixels</a></p>

				<!-- Footer nav -->
				<ul>
					<li><a href="http://support.walkingpixels.com/">Support</a></li>
					<li><a href="http://getbootstrap.com/getting-started/">Documentation</a></li>
					<li><a href="http://parallaq.com/">API</a></li>
				</ul>
				<!-- /Footer nav -->

				<!-- Footer back to top -->
				<a href="add-item.html#top" class="btn btn-back-to-top" title="Back to top"><span class="elusive icon-arrow-up"></span></a>

			</div>
		</footer>
		<!-- /Main page footer -->

		<!-- Bootstrap scripts -->
		<script src="<?php  echo base_url();?>js/bootstrap/bootstrap.min.js"></script>

		<!-- Wysihtml5 -->
		<script src="<?php echo base_url(); ?>js/plugins/wysihtml5/wysihtml5-0.3.0.js"></script>
		<script src="<?php echo base_url(); ?>js/plugins/wysihtml5/bootstrap-wysihtml5.js"></script>
		<script>
			$(document).ready(function() {

				$('.wysihtml').wysihtml5();
				
			});
		</script>

		<!-- Lightbox -->
		<script src="<?php echo base_url();?>js/plugins/lightbox/lightbox.min.js"></script>

		<!-- Gallery checkbox -->
		<script>
			$(document).ready(function() {
					
				// Highlight gallery item when checkbox is clicked
				$('.thumbnail-checkbox').click(function() {
					$(this).next('.thumbnail').toggleClass('active');
				});

				// Add .active class for checked checkboxes on page load (back button etc)
				$('.form-gallery .thumbnail-checkbox:checked').next('a').addClass('active');
				
			});
		</script>

	</body>
</html>

	
</body>
</html>
