<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Dashboard | Sangoma Bootstrap Admin Template</title>
		<meta name="description" content="">
		<meta name="author" content="Walking Pixels | www.walkingpixels.com">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- FullCalendar Styles -->
		<link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>css/plugins/fullcalendar/fullcalendar.css">

		<!-- PrettyCheckable Styles -->
		<link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>css/plugins/prettycheckable/prettyCheckable.css">

		<!-- Styles -->
		<link rel="stylesheet" href="<?php echo  base_url(); ?>css/sangoma-blue.css">

		<!-- JS Libs -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery.js"><\/script>')</script>
		<script src="<?php  echo  base_url(); ?>js/libs/modernizr.js"></script>

		<!-- IE8 support of media queries and CSS 2/3 selectors -->
		<!--[if lt IE 9]>
			<script src="js/libs/respond.min.js"></script>
			<script src="js/libs/selectivizr.js"></script>
		<![endif]-->
		
		<script>
			$(document).ready(function(){
				
				// Tooltips
				$('[title]').tooltip();

				// Tabs
				$('.demoTabs a, .demoTabs2 a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
					$('.fullcalendar, .full-calendar-gcal').fullCalendar('render'); // Refresh jQuery FullCalendar for hidden tabs
				})
				
			});
		</script>
		
		<script type="text/javascript">
			var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-22557155-10"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();
		</script>
	</head>
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
								<li><a href="index.html#" title="Message inbox">inbox</a></li>
								<li><a href="index.html#" title="Account settings">settings</a></li>
								<li><a href="login.html" title="Logout">logout</a></li>
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
							<span class="elusive icon-home"></span>  Dashboard
						</button>
					</div>
					<!-- /Collapse navigation for mobile -->

					<!-- Navigation -->
					<div class="main-navigation-collapse collapse navbar-collapse">

						<!-- Navigation items -->
						<ul class="nav navbar-nav">

							<!-- Active navigation items -->
							<li class="active">
								<a href="<?php echo base_url();?>index.php"><span class="elusive icon-home"></span> Dashboard</a>
							</li>
							<!-- /Active navigation items -->

							<!-- Dropdown navigation items -->
							<li class="dropdown">
								<a href="<?php echo base_url(); ?>index.html#" class="dropdown-toggle" data-toggle="dropdown"><span class="elusive icon-asl"></span> Components <b class="caret"></b></a>
								<span class="badge">23</span>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url(); ?>tables.html"><span class="elusive icon-th-list"></span> Tables</a></li>
									<li><a href="<?php echo base_url(); ?>forms.html"><span class="elusive icon-align-left"></span> Forms</a></li>
									<li><a href="<?php echo base_url(); ?>calendar.html"><span class="elusive icon-calendar"></span> Calendar</a></li>
									<li><a href="<?php echo base_url(); ?>charts.html"><span class="elusive icon-graph"></span> Charts</a></li>
									<li><a href="<?php echo base_url(); ?>gallery.html"><span class="elusive icon-picture"></span> Gallery</a></li>
									<li><a href="<?php echo base_url(); ?>file-explorer.html"><span class="elusive icon-inbox"></span> File explorer</a></li>
									<li class="divider"></li>
									<li><a href="<?php echo  base_url(); ?>ui-buttons.html"><span class="elusive icon-cogs"></span> UI &amp; Buttons</a></li>
									<li><a href="<?php echo  base_url(); ?>typo.html"><span class="elusive icon-font"></span> Typography</a><span class="badge">7</span></li>
									<li><a href="<?php echo  base_url(); ?>grid.html"><span class="elusive icon-th"></span> Grid</a></li>
									<li><a href="<?php echo  base_url(); ?>goodies.html"><span class="elusive icon-heart"></span> Goodies</a></li>
								</ul>
							</li>
							<!-- /Dropdown navigation items -->

							<!-- Dropdown navigation with multi-level dropdown -->
							<li class="dropdown">
								<a href="<?php echo base_url(); ?>index.php#" class="dropdown-toggle" data-toggle="dropdown"><span class="elusive icon-file"></span> Extra <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url(); ?>eshop.html"><span class="elusive icon-file"></span> Online store</a></li>
									<li><a href="<?php echo base_url(); ?>add-item.html"><span class="elusive icon-file"></span> Add item / product</a></li>
									<li><a href="<?php echo base_url(); ?>invoice.html"><span class="elusive icon-file"></span> Invoice</a></li>
									<li><a href="<?php echo base_url(); ?>user-profile.html"><span class="elusive icon-file"></span> User profile</a></li>
									<li class="divider"></li>

									<!-- 2nd level dropdown -->
									<li class="dropdown-submenu">
										<a href="index.html#">Login Pages</a>
										<ul class="dropdown-menu">
											<li role="presentation" class="dropdown-header">Login Pages</li>
											<li><a href="<?php echo base_url(); ?>login.html"><span class="elusive icon-file"></span> Login page</a></li>
											<li><a href="<?php echo base_url(); ?>lost-password.html"><span class="elusive icon-file"></span> Lost password</a></li>
										</ul>
									</li>
									<!-- /2nd level dropdown -->

									<li class="dropdown-submenu">
										<a href="index.html#">Error Pages</a>
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
								<a href="docs/index.html"><span class="elusive icon-info-sign"></span> Docs</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>dash_item_add/dash_item"><span class="elusive icon-info-sign"></span>Dashboart_Item</a>
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

				<!-- Grid row -->
				<div class="row">
					
					<!-- Multi-level scaffolding example -->
					<div class="col-sm-8">

						<!-- Grid row -->
						<div class="row">

							<!-- Widget block -->
							<div class="col-sm-3 col-xs-6">
								<a class="data-block widget-block" href="<?php echo base_url(); ?>index.php#">
									<span class="widget-icon elusive icon-file-new-alt"></span>
									<strong>Add product</strong>
								</a>
							</div>
							<!-- /Widget block -->

							<!-- Widget block -->
							<div class="col-sm-3 col-xs-6">
								<a class="data-block widget-block" href="<?php echo base_url(); ?>index.php#">
									<span class="widget-icon elusive icon-address-book-alt"></span>
									<strong>Add contact</strong>
								</a>
							</div>
							<!-- /Widget block -->

							<!-- Widget block -->
							<div class="col-sm-3 col-xs-6">
								<a class="data-block widget-block" href="<?php echo base_url(); ?>index.php#">
									<span class="badge">3</span>
									<span class="widget-icon elusive icon-globe-alt"></span>
									<strong>Shipping</strong>
								</a>
							</div>
							<!-- /Widget block -->

							<!-- Widget block -->
							<div class="col-sm-3 col-xs-6">
								<a class="data-block widget-block" href="<?php echo base_url(); ?>index.php#">
									<span class="widget-icon elusive icon-shopping-cart-sign"></span>
									<strong>Orders</strong>
								</a>
							</div>
							<!-- /Widget block -->

						</div>
						<!-- /Grid row -->

						<!-- Grid row -->
						<div class="row">

							<!-- Data block -->
							<div class="col-sm-12">
								<div class="data-block">
									<section>
										<div id="demo-1" class="flot"></div>
									</section>
									<footer>
										<p><span class="elusive icon-idea"></span>  Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</footer>
								</div>
							</div>
							<!-- /Data block -->

						</div>
						<!-- /Grid row -->

					</div>
					<!-- /Multi-level scaffolding example -->

					<!-- Data block with TODO list widget -->
					<div class="col-sm-4">
						<div class="data-block todo-block">
							<header>
								<h2><span class="elusive icon-folder-open"></span> My TODO list</h2>
							</header>
							<section>
								<form>
									<table class="table">
										<tbody>
											<tr class="done">
												<td><input type="checkbox" value="done" checked></td>
												<td>
													<p>doItNow(); does not work as expected</p>
													<span>completed <time>Apr 12</time></span>
												</td>
											</tr>
											<tr>
												<td><input type="checkbox" value="done"></td>
												<td>
													<p>buy some more socks</p>
													<span>due <time>Apr 12</time></span>
												</td>
											</tr>
											<tr>
												<td><input type="checkbox" value="done"></td>
												<td>
													<p><span class="label label-danger">Important</span> meeting at 10:30 am</p>
													<span>due <time>Apr 12</time></span>
												</td>
											</tr>
											<tr>
												<td><input type="checkbox" value="done"></td>
												<td>
													<p>take out the trash</p>
													<span>due <time>Apr 17</time></span>
												</td>
											</tr>
											<tr>
												<td><input type="checkbox" value="done"></td>
												<td>
													<p><span class="label label-success">Party</span> Eric birthday</p>
													<span>due <time>Apr 22</time></span>
												</td>
											</tr>
											<tr>
												<td><input type="checkbox" value="done"></td>
												<td>
													<p>team meeting</p>
													<span>due <time>May 22</time></span>
												</td>
											</tr>
										</tbody>
									</table>
								</form>
							</section>
						</div>
					</div>
					<!-- /Data block with TODO list widget -->
					
				</div>
				<!-- /Grid row -->

				<!-- Alert -->
				<div class="alert alert-danger alert-dismissable fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true" title="Close alert">&times;</button>
					<strong>Error alert box!</strong> Nice red alert when something goes wrong.
				</div>
				<!-- /Alert -->

				<!-- Grid row -->
				<div class="row">
					
					<!-- Data block example with multiple blocks -->
					<article class="col-sm-4">

						<!-- Data block -->
						<div class="dark data-block">
							<header>
								<h2><span class="elusive icon-thumbs-up"></span> Made for Twitter Bootstrap</h2>
							</header>
							<section>
								<p class="lead">Sangoma is a Zulu term that is used to commonly describe all types of Southern African traditional healers.</p>
								<p>Sangoma relies primarily on divination for healing purposes and might also be considered a type of fortune teller. He perform a holistic and symbolic form of healing by drawing on the embedded beliefs that ancestors in the afterlife guide and protect the living.</p>
							</section>
						</div>
						<!-- /Data block -->

						<!-- Data block with collapsed panels -->
						<div class="data-block panel-group panel-group-collapsed" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="<?php echo base_url(); ?>index.php#collapseOne">
											Collapsed Panel Group #1
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="<?php echo base_url(); ?>index.php#collapseTwo">
											Collapsed Panel Group #2
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="<?php echo base_url(); ?>index.php#collapseThree">
											Collapsed Panel Group #3
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
						</div>
						<!-- /Data block with collapsed panels -->

						<!-- Data block with separated panels -->
						<div class="data-block panel-group" id="accordion2">
							<div class="panel panel-purple">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo base_url(); ?>index.php#collapseFour">
											Separated Panel Group #1
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="panel panel-purple">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo base_url(); ?>index.php#collapseFive">
											Separated Panel Group #2
										</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="panel panel-purple">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo base_url(); ?>index.php#collapseSix">
											Separated Panel Group #3
										</a>
									</h4>
								</div>
								<div id="collapseSix" class="panel-collapse collapse">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
						</div>
						<!-- /Data block with separated panels -->

					</article>
					<!-- /Data block example with multiple blocks -->

					<!-- Data block -->
					<article class="col-sm-8">
						<div class="turquoise data-block">
							<header>
								<h2><span class="elusive icon-calendar"></span> Calendar</h2>
								<ul class="data-header-actions">
									<li class="demoTabs active"><a href="<?php echo base_url(); ?>index.php#calendar">Calendar</a></li>
									<li class="demoTabs"><a href="index.html#table">Test results</a></li>
								</ul>
							</header>
							<section class="tab-content">

								<!-- Tab #calendar -->
								<div class="tab-pane active" id="calendar">

									<div class='full-calendar full-calendar-demo'></div>

								</div>
								<!-- /Tab #calendar -->
								
								<!-- Tab #table -->
								<div class="tab-pane" id="table">

									<table class="table table-stripped table-hover">
										<thead>
											<tr>
												<th>Nuclear test</th>
												<th>1<sup>st</sup> Yield (kT)</th>
												<th>2<sup>nd</sup> Yield (kT)</th>
												<th>Date</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Trinity</td>
												<td>18-20</td>
												<td>19-21</td>
												<td>1945-07-16</td>
											</tr>
											<tr>
												<td>Trinity</td>
												<td>18-21</td>
												<td>16-18</td>
												<td>1945-07-19</td>
											</tr>
											<tr>
												<td>Little Boy</td>
												<td>12-18</td>
												<td>14-16</td>
												<td>1945-08-06</td>
											</tr>
											<tr>
												<td>Fat Man</td>
												<td>18-23</td>
												<td>21-24</td>
												<td>1945-08-09</td>
											</tr>
										</tbody>
									</table>

								</div>
								<!-- /Tab #table -->

							</section>
							<footer>
								<p>Morbi vitae luctus dolor. Aliquam ut enim a mi scelerisque porttitor ac at tortor.</p>
							</footer>
						</div>
					</article>
					<!-- /Data block -->
					
				</div>
				<!-- /Grid row -->

				<!-- Grid row -->
				<div class="row">
					
					<!-- Data block -->
					<article class="col-sm-3 col-xs-6">
						<div class="data-block plan-block">
							<section>
								<span class="elusive icon-group"></span>
								<h3>Quisque mattis</h3>
								<p>Lorem ipsum dolor sit amet.</p>
								<a href="<?php echo base_url(); ?>index.php#" class="btn btn-block btn-lg btn-success">Subscribbe</a>
							</section>
						</div>
					</article>
					<!-- /Data block -->

					<!-- Data block -->
					<article class="col-sm-3 col-xs-6">
						<div class="data-block plan-block">
							<section>
								<span class="elusive icon-guidedog"></span>
								<h3>Suspend potenti</h3>
								<p>Donec quis velit in nisi posuere commodo quis at.</p>
								<a href="<?php echo base_url(); ?>index.php#" class="btn btn-block btn-lg btn-success">Download</a>
							</section>
						</div>
					</article>
					<!-- /Data block -->

					<!-- Data block -->
					<article class="col-sm-3 col-xs-6">
						<div class="data-block plan-block">
							<section>
								<span class="elusive icon-network"></span>
								<h3>Lorem es ipsum</h3>
								<p>Proin suscipit dignissim volutpat. Null ligula euismod.</p>
								<a href="<?php echo base_url(); ?>index.php#" class="btn btn-block btn-lg btn-success">Buy now</a>
							</section>
						</div>
					</article>
					<!-- /Data block -->

					<!-- Data block -->
					<article class="col-sm-3 col-xs-6">
						<div class="data-block plan-block">
							<section>
								<span class="elusive icon-fire"></span>
								<h3>Nullam et purus</h3>
								<p>Proin nulla nisl, elementum ut dignissim, mollis diam.</p>
								<a href="<?php echo base_url(); ?>index.php#" class="btn btn-block btn-lg btn-success">App Store</a>
							</section>
						</div>
					</article>
					<!-- /Data block -->
					
				</div>
				<!-- /Grid row -->

				<!-- Grid row -->
				<div class="row">
					
					<!-- Data block -->
					<article class="col-sm-4">
						<div class="data-block">
							<header>
								<h2>Donec non quam elit</h2>
								<ul class="data-header-actions">
									<li>
										<a href="<?php echo base_url(); ?>index.php#" class="dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>index.php#">Action</a></li>
											<li><a href="<?php echo base_url(); ?>index.php#">Another action</a></li>
											<li><a href="<?php echo base_url(); ?>index.php#">Something else here</a></li>
											<li class="divider"></li>
											<li class="dropdown-header">Dropdown Header</li>
											<li><a href="<?php echo base_url(); ?>index.php#">Separated link</a></li>
										</ul>
									</li>
								</ul>
							</header>
							<section>
								<form role="form">
									<div class="form-group">
										<label for="name">Contact Name</label>
										<input type="email" class="form-control" id="name" placeholder="Enter email">
										<p class="help-block">Example block-level help text.</p>
									</div>
									<div class="form-group">
										<label for="message">Message</label>
										<textarea id="message" class="form-control" rows="3"></textarea>
									</div>
									<button type="submit" class="btn btn-lg btn-default">Submit</button>
								</form>
							</section>
						</div>
					</article>
					<!-- /Data block -->

					<!-- Data block -->
					<article class="col-sm-4">
						<div class="data-block red">
							<header>
								<h2>Praesent et sem</h2>
								<form class="header-search">
									<input type="text" placeholder="Search…">
								</form>
							</header>
							<section>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="text1">
										<p>Vivamus posuere molestie nulla. Aliquam pulvinar eros id urna sollicitudin in viverra justo tristique.</p>
										<p>Praesent at quam et ligula scelerisque vehicula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec non quam elit, sit amet pretium magna.</p>
										<p>Donec venenatis justo vel est eleifend sollicitudin. Pellentesque mollis felis eu metus facilisis consectetur. Praesent et sem id dui euismod accumsan et quis lectus. Fusce eget erat mi, et laoreet nibh.</p>
									</div>
									<div class="tab-pane fade" id="text2">
										<h4>Aliquam pulvinar eros</h4>
										<p>Donec venenatis justo vel est eleifend sollicitudin. Pellentesque mollis felis eu metus facilisis consectetur. Praesent et sem id dui euismod accumsan et quis lectus. Fusce eget erat mi, et laoreet nibh.</p>
									</div>
									<div class="tab-pane fade" id="text3">
										<p class="lead">Pellentesque mollis felis eu metus facilisis consectetur. Praesent et sem id dui euismod accumsan et quis lectus.</p>
										<p>Praesent at quam et ligula scelerisque vehicula. Donec non quam elit, sit amet pretium magna.</p>
										<p>Donec venenatis justo vel est eleifend sollicitudin. Fusce eget erat mi, et laoreet nibh.</p>
									</div>
									<div class="tab-pane fade" id="text4">
										<p>Vivamus posuere molestie nulla. Aliquam pulvinar eros id urna sollicitudin in viverra justo tristique.</p>
										<p>Praesent at quam et ligula scelerisque vehicula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec non quam elit, sit amet pretium magna.</p>
										<a href="index.html#" class="btn btn-block btn-lg btn-success">Download</a>
									</div>
									<div class="tab-pane fade" id="text5">
										<div class="btn-toolbar">
											<div class="btn-group">
												<button class="btn btn-sm btn-default"><span class="elusive icon-ok"></span></button>
												<button class="btn btn-sm btn-default"><span class="elusive icon-remove"></span></button>
											</div>
											<div class="btn-group">
												<button class="btn btn-sm btn-default"><span class="elusive icon-tag"></span></button>
												<button class="btn btn-sm btn-default"><span class="elusive icon-print"></span></button>
												<button class="btn btn-sm btn-default"><span class="elusive icon-refresh"></span></button>
											</div>
										</div>
										<h4>Aliquam pulvinar eros</h4>
										<p>Praesent at quam et ligula scelerisque vehicula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec non quam elit, sit amet pretium magna.</p>
										<p>Donec venenatis justo vel est eleifend sollicitudin. Pellentesque mollis felis eu metus facilisis consectetur. Praesent et sem id dui euismod accumsan et quis lectus. Fusce eget erat mi, et laoreet nibh.</p>
									</div>
								</div>
								<div class="pagination-center">
									<ul class="pagination">
										<li class="demoTabs2 active"><a href="<?php echo base_url(); ?>index.php#text1">1</a></li>
										<li class="demoTabs2"><a href="<?php echo base_url(); ?>index.php#text2">2</a></li>
										<li class="demoTabs2"><a href="<?php echo base_url(); ?>index.php#text3">3</a></li>
										<li class="demoTabs2"><a href="<?php echo base_url(); ?>index.php#text4">4</a></li>
										<li class="demoTabs2"><a href="<?php echo base_url(); ?>index.php#text5">5</a></li>
									</ul>
								</div>

							</section>
						</div>
					</article>
					<!-- /Data block -->

					<!-- Data block -->
					<article class="col-sm-4">
						<div class="data-block dark">
							<header>
								<h2><span class="elusive icon-fire"></span> Morbi vulputate</h2>
								<ul class="data-header-actions">
									<li><span class="loading dark" title="Loading, please wait&hellip;">Loading&hellip;</span></li>
								</ul>
							</header>
							<section>
								<div class="alert alert-inverse alert-dismissable fade in">
									<button data-dismiss="alert" class="close">×</button>
									<strong>Gray alert box!</strong> This is default style. Nothing special to see.
								</div>
								<div class="well">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate nulla ut enim vestibulum vel porttitor odio euismod.</div>
								<p class="text-muted"><small>Etiam sem augue, auctor vel dapibus id, lobortis nec ante. Donec pharetra neque nec nibh semper aliquam. Morbi vulputate auctor lectus, sed porta sem sollicitudin a. Nunc lacinia rhoncus ligula non vestibulum. Donec quis purus nibh.</small></p>
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
				<a href="<?php echo base_url(); ?>index.html#top" class="btn btn-back-to-top" title="Back to top"><span class="elusive icon-arrow-up"></span></a>

			</div>
		</footer>
		<!-- /Main page footer -->

		<!-- Bootstrap scripts -->
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- jQuery FullCalendar -->
		<script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
		
		<script>
			$(document).ready(function() {
			
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();
				
				$('.full-calendar-demo').fullCalendar({
					header: {
						left: 'prev today',
						center: 'title',
						right: 'next'
					},
					buttonText: {
						prev: '<span class="elusive icon-chevron-left"></span>',
						next: '<span class="elusive icon-chevron-right"></span>'
					},
					editable: true,
					events: [
						{
							title: 'All Day Event',
							start: new Date(y, m, 1)
						},
						{
							title: 'Long Event',
							start: new Date(y, m, d-5),
							end: new Date(y, m, d-2),
							className: 'event-red'
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d-3, 16, 0),
							allDay: false,
							className: 'event-blue'
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d+4, 16, 0),
							allDay: false,
							className: 'event-green'
						},
						{
							title: 'Meeting',
							start: new Date(y, m, d, 10, 30),
							allDay: false,
							className: 'event-orange'
						},
						{
							title: 'Lunch',
							start: new Date(y, m, d, 12, 0),
							end: new Date(y, m, d, 14, 0),
							allDay: false,
							className: 'event-purple'
						},
						{
							title: 'Birthday Party',
							start: new Date(y, m, d+1, 19, 0),
							end: new Date(y, m, d+1, 22, 30),
							allDay: false,
							className: 'event-turquoise'
						},
						{
							title: 'Walking Pixels website',
							start: new Date(y, m, 28),
							end: new Date(y, m, 29),
							url: 'http://www.walkingpixels.com/',
							className: 'event-dark'
						}
					]
				});
				
			});
		</script>

		<!-- PrettyCheckable checkbox and radio -->
		<script src="<?php echo base_url(); ?>js/plugins/prettyCheckable/prettyCheckable.js"></script>
		<script>
			$(document).ready(function() {

				$('.todo-block input').prettyCheckable();

			});
		</script>

		<!-- Block TODO list -->
		<script>
			$(document).ready(function() {
				
				$('.todo-block input[type="checkbox"], .todo-block .prettycheckbox').click(function(){
					$(this).closest('tr').toggleClass('done');
				});
				$('.todo-block input[type="checkbox"]:checked').closest('tr').addClass('done');
				
			});
		</script>

		<!-- jQuery Flot Charts -->
		<!--[if lte IE 8]>
			<script language="javascript" type="text/javascript" src="js/plugins/flot/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url(); ?>js/plugins/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url(); ?>js/plugins/flot/jquery.flot.resize.min.js"></script>
		
		<script>
			$(document).ready(function() {
				
				// Demo #1
				// we use an inline data source in the example, usually data would be fetched from a server
				var data = [], totalPoints = 300;
				function getRandomData() {
					if (data.length > 0)
						data = data.slice(1);
				
					// do a random walk
					while (data.length < totalPoints) {
						var prev = data.length > 0 ? data[data.length - 1] : 50;
						var y = prev + Math.random() * 10 - 5;
						if (y < 0)
							y = 0;
						if (y > 100)
							y = 100;
						data.push(y);
					}
				
					// zip the generated y values with the x values
					var res = [];
					for (var i = 0; i < data.length; ++i)
						res.push([i, data[i]])
					return res;
				}
				
				// setup control widget
				var updateInterval = 30;
				$("#updateInterval").val(updateInterval).change(function () {
					var v = $(this).val();
					if (v && !isNaN(+v)) {
						updateInterval = +v;
					if (updateInterval < 1)
						updateInterval = 1;
					if (updateInterval > 2000)
						updateInterval = 2000;
					$(this).val("" + updateInterval);
					}
				});
				
				// setup plot
				var options = {
					series: {
						shadowSize: 0,
						color: '#c0392b',
						lines: {
							fill: true
						}
					}, // drawing is faster without shadows
					yaxis: { min: 0, max: 100 },
					xaxis: { show: false },
					grid: { backgroundColor: '#ffffff', borderColor: 'transparent' },
				};
				var plot = $.plot($("#demo-1"), [ getRandomData() ], options);
				
				function update() {
					plot.setData([ getRandomData() ]);
					// since the axes don't change, we don't need to call plot.setupGrid()
					plot.draw();
					setTimeout(update, updateInterval);
				}
				
				update();
			
			});
		</script>

	</body>
</html>
