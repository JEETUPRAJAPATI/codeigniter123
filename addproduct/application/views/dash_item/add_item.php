<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<style>
	body {
		font-family: 'Lato', sans-serif;
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

	.card {
		margin-left: 10px;
		margin-right: 10px;
	}
</style>


<body>
	<div class="container">
		<div class=" text-center mt-5 ">

			<h1>Add New Product</h1>


		</div>


		<div class="row ">
			<div class="col-lg-7 mx-auto">
				<div class="card mt-2 mx-auto p-4 bg-light">
					<div class="card-body bg-light">

						<div class="container">
							<form id="contact-form" role="form" method="post" action="<?php echo base_url(); ?>dash_item_add/insert" enctype="multipart/form-data">



								<div class="controls">

									<div class="row">

										<div class="col-md-12">
											<div class="form-group">
												<label for="form_name">Product Type</label></br>

												<input type="radio" id="html" onclick="show1();" name="fav_language" value="HTML" checked>
												  <label for="html">Standerd</label>
												  <input type="radio" id="css" onclick="show2();" name="fav_language" value="CSS">
												  <label for="css">Media & Interactive</label>
											</div>	
										</div>

										<script>
											function show2() {
												document.getElementById('f1').style.display = 'block';
												document.getElementById('file').style.display = 'none';
											}

											function show1() {
												document.getElementById('f1').style.display = 'none';
												document.getElementById('file').style.display = 'block';
												document.getElementById('file1').style.display = 'none';

												document.getElementById('file2').style.display = 'none';
												document.getElementById('file3').style.display = 'none';
												document.getElementById('file4').style.display = 'none';
											}

											function fun1() {
												document.getElementById('file1').style.display = 'block';

												document.getElementById('file2').style.display = 'none';
												document.getElementById('file3').style.display = 'none';
												document.getElementById('file4').style.display = 'none';
											}

											function fun2() {
												document.getElementById('file1').style.display = 'none';

												document.getElementById('file2').style.display = 'block';
												document.getElementById('file3').style.display = 'none';
												document.getElementById('file4').style.display = 'none';
											}

											function fun3() {
												document.getElementById('file1').style.display = 'none';
												document.getElementById('file2').style.display = 'none';
												document.getElementById('file3').style.display = 'block';
												document.getElementById('file4').style.display = 'none';
											}

											function fun4() {
												document.getElementById('file1').style.display = 'none';
												document.getElementById('file2').style.display = 'none';
												document.getElementById('file3').style.display = 'none';
												document.getElementById('file4').style.display = 'block';
											}
										</script>
										<div class="row" id="f1" style="display:none" ;>
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

										<?php  
					error_reporting(0);
										?>
										<div class="col-md-6">
											<div class="form-group" id="file1" style="display:none" ;>
												<label for="form_name">text</label>
												<input id="form_lastname" type="file" name="image1" class="form-control" placeholder="Please  text enter url *" >
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group" id="file2" style="display:none" ;>
												<label for="form_name">image</label>
												<input id="form_lastname" type="file" name="image2" class="form-control" placeholder="Please enter image url *" >
											</div>
										</div>
											<div class="col-md-6">
											<div class="form-group" id="file3" style="display:none" ;>
												<label for="form_name">document</label>
												<input id="form_lastname" type="file" name="image3" class="form-control" placeholder="Please enter document url *" >
												
											</div>
											</div>
											<div class="col-md-6">
											<div class="form-group" id="file4" style="display:none" ;>
												<label for="form_name">video</label>
												<input id="form_lastname" type="file" name="image4" class="form-control" placeholder="Please enter video url *" >
											
											</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group" id="file" style="display:block" ;>
													<label for="form_name">image</label>
													<input id="form_name" type="file" name="image" class="form-control " placeholder="pleace select file*">
													
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="form_lastname">product name</label>
													<input id="form_lastname" type="text" name="name" class="form-control" placeholder="Please enter your name *" >
											
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="form_email">price *</label>
													<input id="form_email" type="number" name="price" class="form-control" placeholder="Pleace enter the price" >
												
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="form_need">Please Select quntity*</label>
													<select id="form_need" name="qnt" class="form-control">
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
													<textarea id="form_message" name="comment" class="form-control" placeholder="Write your message here." rows="4"  ></textarea>
												
												</div>

											</div>


											<div class="col-md-12">

												<input type="submit" name="submit" class="btn btn-success btn-send  pt-2 btn-block" value="insert">

											</div>

										</div>


									</div>
								</div>
							</form>
						</div>
					</div>


				</div>
				<!-- /.8 -->

			</div>
			<!-- /.row-->

		</div>
	</div>
</body>

</html>
