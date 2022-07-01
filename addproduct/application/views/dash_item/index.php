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

		
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/sangoma-purple.css">
		<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> -->
		<!-- JS Libs -->
	
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

.form_wrapper {
  background: #fff;
  width: 400px;
  max-width: 100%;
  box-sizing: border-box;
  padding: 25px;
  margin: 8% auto 0;
  position: relative;
  z-index: 1;
  border-top: 5px solid #f5ba1a;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  -webkit-transition: none;
  transition: none;
  -webkit-animation: expand 0.8s 0.6s ease-out forwards;
  animation: expand 0.8s 0.6s ease-out forwards;
  opacity: 0;
}
.form_wrapper h2 {
  font-size: 1.5em;
  line-height: 1.5em;
  margin: 0;
}
.form_wrapper .title_container {
  text-align: center;
  padding-bottom: 15px;
}
.form_wrapper h3 {
  font-size: 1.1em;
  font-weight: normal;
  line-height: 1.5em;
  margin: 0;
}
.form_wrapper label {
  font-size: 12px;
}
.form_wrapper .row {
  margin: 10px -15px;
}
.form_wrapper .row > div {
  padding: 0 15px;
  box-sizing: border-box;
}
.form_wrapper .col_half {
  width: 50%;
  float: left;
}
.form_wrapper .input_field {
  position: relative;
  margin-bottom: 20px;
  -webkit-animation: bounce 0.6s ease-out;
  animation: bounce 0.6s ease-out;
}
.form_wrapper .input_field > span {
  position: absolute;
  left: 0;
  top: 0;
  color: #333;
  height: 100%;
  border-right: 1px solid #cccccc;
  text-align: center;
  width: 30px;
}
.form_wrapper .input_field > span > i {
  padding-top: 10px;
}
.form_wrapper .textarea_field > span > i {
  padding-top: 10px;
}
.form_wrapper input[type=text], .form_wrapper input[type=email], .form_wrapper input[type=password] {
  width: 100%;
  padding: 8px 10px 9px 35px;
  height: 35px;
  border: 1px solid #cccccc;
  box-sizing: border-box;
  outline: none;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.form_wrapper input[type=text]:hover, .form_wrapper input[type=email]:hover, .form_wrapper input[type=password]:hover {
  background: #fafafa;
}
.form_wrapper input[type=text]:focus, .form_wrapper input[type=email]:focus, .form_wrapper input[type=password]:focus {
  -webkit-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
  -moz-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
  box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
  border: 1px solid #f5ba1a;
  background: #fafafa;
}
.form_wrapper input[type=submit] {
  background: #f5ba1a;
  height: 35px;
  line-height: 35px;
  width: 100%;
  border: none;
  outline: none;
  cursor: pointer;
  color: #fff;
  font-size: 1.1em;
  margin-bottom: 10px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.form_wrapper input[type=submit]:hover {
  background: #e1a70a;
}
.form_wrapper input[type=submit]:focus {
  background: #e1a70a;
}
.form_wrapper input[type=checkbox], .form_wrapper input[type=radio] {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.form_container .row .col_half.last {
  border-left: 1px solid #cccccc;
}

.checkbox_option label {
  margin-right: 1em;
  position: relative;
}
.checkbox_option label:before {
  content: "";
  display: inline-block;
  width: 0.5em;
  height: 0.5em;
  margin-right: 0.5em;
  vertical-align: -2px;
  border: 2px solid #cccccc;
  padding: 0.12em;
  background-color: transparent;
  background-clip: content-box;
  transition: all 0.2s ease;
}
.checkbox_option label:after {
  border-right: 2px solid #000000;
  border-top: 2px solid #000000;
  content: "";
  height: 20px;
  left: 2px;
  position: absolute;
  top: 7px;
  transform: scaleX(-1) rotate(135deg);
  transform-origin: left top;
  width: 7px;
  display: none;
}
.checkbox_option input:hover + label:before {
  border-color: #000000;
}
.checkbox_option input:checked + label:before {
  border-color: #000000;
}
.checkbox_option input:checked + label:after {
  -moz-animation: check 0.8s ease 0s running;
  -webkit-animation: check 0.8s ease 0s running;
  animation: check 0.8s ease 0s running;
  display: block;
  width: 7px;
  height: 20px;
  border-color: #000000;
}

.radio_option label {
  margin-right: 1em;
}
.radio_option label:before {
  content: "";
  display: inline-block;
  width: 0.5em;
  height: 0.5em;
  margin-right: 0.5em;
  border-radius: 100%;
  vertical-align: -3px;
  border: 2px solid #cccccc;
  padding: 0.15em;
  background-color: transparent;
  background-clip: content-box;
  transition: all 0.2s ease;
}
.radio_option input:hover + label:before {
  border-color: #000000;
}
.radio_option input:checked + label:before {
  background-color: #000000;
  border-color: #000000;
}

.select_option {
  position: relative;
  width: 100%;
}
.select_option select {
  display: inline-block;
  width: 100%;
  height: 35px;
  padding: 0px 15px;
  cursor: pointer;
  color: #7b7b7b;
  border: 1px solid #cccccc;
  border-radius: 0;
  background: #fff;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  transition: all 0.2s ease;
}
.select_option select::-ms-expand {
  display: none;
}
.select_option select:hover, .select_option select:focus {
  color: #000000;
  background: #fafafa;
  border-color: #000000;
  outline: none;
}

.select_arrow {
  position: absolute;
  top: calc(50% - 4px);
  right: 15px;
  width: 0;
  height: 0;
  pointer-events: none;
  border-width: 8px 5px 0 5px;
  border-style: solid;
  border-color: #7b7b7b transparent transparent transparent;
}

.select_option select:hover + .select_arrow, .select_option select:focus + .select_arrow {
  border-top-color: #000000;
}

.credit {
  position: relative;
  z-index: 1;
  text-align: center;
  padding: 15px;
  color: #f5ba1a;
}
.credit a {
  color: #e1a70a;
}

@-webkit-keyframes check {
  0% {
    height: 0;
    width: 0;
  }
  25% {
    height: 0;
    width: 7px;
  }
  50% {
    height: 20px;
    width: 7px;
  }
}
@keyframes check {
  0% {
    height: 0;
    width: 0;
  }
  25% {
    height: 0;
    width: 7px;
  }
  50% {
    height: 20px;
    width: 7px;
  }
}
@-webkit-keyframes expand {
  0% {
    -webkit-transform: scale3d(1, 0, 1);
    opacity: 0;
  }
  25% {
    -webkit-transform: scale3d(1, 1.2, 1);
  }
  50% {
    -webkit-transform: scale3d(1, 0.85, 1);
  }
  75% {
    -webkit-transform: scale3d(1, 1.05, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    opacity: 1;
  }
}
@keyframes expand {
  0% {
    -webkit-transform: scale3d(1, 0, 1);
    transform: scale3d(1, 0, 1);
    opacity: 0;
  }
  25% {
    -webkit-transform: scale3d(1, 1.2, 1);
    transform: scale3d(1, 1.2, 1);
  }
  50% {
    -webkit-transform: scale3d(1, 0.85, 1);
    transform: scale3d(1, 0.85, 1);
  }
  75% {
    -webkit-transform: scale3d(1, 1.05, 1);
    transform: scale3d(1, 1.05, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
    opacity: 1;
  }
}
@-webkit-keyframes bounce {
  0% {
    -webkit-transform: translate3d(0, -25px, 0);
    opacity: 0;
  }
  25% {
    -webkit-transform: translate3d(0, 10px, 0);
  }
  50% {
    -webkit-transform: translate3d(0, -6px, 0);
  }
  75% {
    -webkit-transform: translate3d(0, 2px, 0);
  }
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}
@keyframes bounce {
  0% {
    -webkit-transform: translate3d(0, -25px, 0);
    transform: translate3d(0, -25px, 0);
    opacity: 0;
  }
  25% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
  }
  50% {
    -webkit-transform: translate3d(0, -6px, 0);
    transform: translate3d(0, -6px, 0);
  }
  75% {
    -webkit-transform: translate3d(0, 2px, 0);
    transform: translate3d(0, 2px, 0);
  }
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}
@media (max-width: 600px) {
  .form_wrapper .col_half {
    width: 100%;
    float: none;
  }

  .bottom_row .col_half {
    width: 50%;
    float: left;
  }

  .form_container .row .col_half.last {
    border-left: none;
  }

  .remember_me {
    padding-bottom: 20px;
  }
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
								<a href="<?php echo base_url(); ?>dash_item_add"><span class="elusive icon-home"></span> Dashboard</a>
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

<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Responsive Registration Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form method="post">
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="file" name="image" placeholder="select image"  />
				
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="name" placeholder="Enter Product Name"  />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="price" placeholder="Enter the Price"  />
          </div>
          <div class="row clearfix">
					<div class="input_field select_option">
                <select name="qnt" >
                  <option>Select a quntity</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
                </select>
                <div class="select_arrow"></div>
              </div>

           
						<div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
							<textarea id="comment" name="comment" cols="40" rows="5" class="form-control" placeholder="Enter the Message..."></textarea>
              </div>
   
            
          </div>
            
             
           
	<input type="submit" value="insert" class="button">
        </form>
      </div>
    </div>
  </div>
</div>

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
						
																			
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
								
								
									<ul class="pagination">
										<li class="page-item disabled">
										<span class="page-item"><?php echo $links; ?></span>
										</li>
									</ul>

								
										<div class="collapse navbar-collapse" id="navbarSupportedContent" style="float:right;">										
											<form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url(); ?>dash_item_add/search">
													<input class="form-control mr-sm-2" name="search_text" type="search" placeholder="Search">
													<input type="submit" class="btn btn-outline-success my-2 my-sm-0" name="submit"  value="search"  >
											</form>
										</div>
									</nav>
							
									

								<table class="table table-striped table-condensed table-hover">
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
									<tbody>
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
