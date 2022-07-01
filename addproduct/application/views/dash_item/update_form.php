<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Document</title>
</head>
<style>
	img {width:100%;}
</style>
<body>


<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body" style="border:1px solid black;">
						<ul style="list-style-type:none;">
							<li style="margin-top:30px;">Image:       <?php echo $item['image'];  ?></li>
							<li style="margin-top:30px;">Name:        <?php echo $item['name'];  ?></li>
							<li style="margin-top:30px;">Price:      <?php echo $item['price'];  ?>     </li>
							<li style="margin-top:30px;">Qntity:     <?php echo $item['qnt'];  ?>      </li>
							<li style="margin-top:30px;">Message:    <?php echo $item['info'];  ?>      </li>
						
						
							
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="post" action="<?php echo base_url(); ?>dash_item_add/update_record/<?php echo $item['id']; ?>">
				<input type="hidden" name="" value="<?php echo $item['id'];  ?>">
				
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="text" name="image" placeholder="image name" value=<?php echo $item['image'];?> class="form-control" type="text">
                        </div>

                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="name" value=<?php echo $item['name']; ?>>
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="number" name="price" class="form-control" required="required" value="<?php echo $item['price']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                                   
                                  <select id="inputState" name="qnt"  class="form-control">
                                    <option selected><?php echo $item['qnt']; ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									
									
                                  </select>
                        </div>
                        <div class="form-group col-md-12">
                                  <textarea id="comment" name="comment" cols="40" rows="5" class="form-control"><?php echo $item['info']; ?> </textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div>
                    
                    <div class="form-row">
							<input type="submit" name="submit" value="update" class="btn btn-dangure">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


</body>
</html>
