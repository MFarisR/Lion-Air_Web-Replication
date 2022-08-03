	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lion Air</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/logo-button.png" />
    <!-- INCLUDE BOOTSTRAP CSS HERE -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-datepicker.css">



<style type="text/css">
.carousel-indicators li {
    border-radius: 100%;
    width: 10px;
    height: 10px;
    background-color: #ffffff;
    opacity: .5;
}

.contentbox {
        width: 90%;
        height: 16%;
        left: 10%;
        position: absolute;
        top: 9.9%;
        padding: 20px;
    }
.inner-content {
        width: 90%;
        float: center;
        height: 120%;
        background: white;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px; 
    }
}
</style>

<body>
	<div class="navbar">
		<div class="sticky-top container-fluid border-bottom" style="background-color: white;height: 80px">
			<div class="row align-items-end mx-auto p-3" style="width: 90%">
				<div class="col">
					<img src="<?= base_url(); ?>/assets/img/logoLA.png" alt="logo" width="180px" height="47.36px">
					<img class="align-bottom ml-1 mb-2" src="<?= base_url(); ?>/assets/img/slogan.png" alt="slogan" width="150px" height="11.11px">
				</div>
				<div class="col text-right align-self-center" style="font-size: .8em;font-family: Helvetica,Arial,sans-serif;">
					LION AIR PASSPORT CLUB
				</div>
				<div class="col-xs-3 align-self-center">
					<select class="form-control form-control-sm ml-4">
		  				<option>Indonesia</option>
		  				<option>English</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="slide-wrapper" style="margin-top: -0.5%">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		 	<ol class="carousel-indicators">
			   	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
		 	   	<li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
		 	</ol>
			<div class="carousel-inner">
			    <div class="carousel-item active">
			    	<img src="assets/img/1.jpeg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
				    <img src="assets/img/2.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
			    	<img src="assets/img/3.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				    <img src="assets/img/4.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				    <img src="assets/img/5.png" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
				    <img src="assets/img/6.png" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
				    <img src="assets/img/7.png" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
				    <img src="assets/img/8.png" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
				    <img src="assets/img/9.png" class="d-block w-100" alt="...">
			    </div>
				<div class="carousel-item">
				    <img src="assets/img/10.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				    <img src="assets/img/11.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				    <img src="assets/img/12.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				    <img src="assets/img/13.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				    <img src="assets/img/14.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				    <img src="assets/img/15.png" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" id="carouselcontrol" href="#carouselExampleIndicators" role="button" data-slide="prev" style="width: 8%">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" id="carouselcontrol" href="#carouselExampleIndicators" role="button" data-slide="next" style="width: 8%">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="contentbox">
			<div class="inner-content">
				<div class="container">
					<label class="radio-inline ml-2 mt-2"><input type="radio" name="optradio" checked="" value="oneway">One Way</label>
					<label class="radio-inline ml-3"><input type="radio" name="optradio" value="return">Return</label>
					<script type="text/javascript">
						$('input:radio[name="optradio"]').change(
    					function(){
        					if ($(this).is(':checked') && $(this).val() == 'return') {
           	 					$("#ReturnDate").show();
        					} else {
        						$("#ReturnDate").hide();
        					}
    					});
					</script>
					<div class="row">
						<div class="col">
							<select class="selectpicker" id="Flight" data-live-search="true">
								<option value="" selected disabled>From</option>
								<option>Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
						<div class="col" style="margin-left: -25px">
							<select class="selectpicker" data-live-search="true">
								<option value="" selected disabled>To</option>
								<option>Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
						<div class="col">
							<input class="form-control" id="DepartDate" placeholder="Depart Date">
	    					<script>
	        					$(function(){
   									$('#DepartDate').datepicker({
      									format: 'mm-dd-yyyy'
    								});
								});
	    					</script>
    					</div>
    					<div class="col">
							<input class="form-control" id="ReturnDate" placeholder="Return Date">
	    					<script>
	    						$('#ReturnDate').hide();
	        					$('#ReturnDate').datepicker({
	            				format: 'mm-dd-yyyy'
	        				});
	    					</script>
    					</div>	
    					<div class="col">
							<div class="dropdown" style="border : 1px solid #d3d3d3; border-radius: 5px">
								<button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Passenger
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 500px;margin-left: -150%">
									<div class="container">
										<div class="row">
											<div class="col">
												<label>Adults(+12)</label>	
									    	</div>
									    	<div class="col">
												<label>Children(2-12)</label>
									    	</div>
									    	<div class="col">
												<label>Infant(below 12)</label>
									    	</div>
									    </div>
								    	<div class="row">
								    		<div class="col">
								    			<input class="form-control" type="number" min="0" name="Adult" style="width: 100%">
								    		</div>
								    		<div class="col">
								    			<input class="form-control" type="number" min="0" name="Children" style="width: 100%">
								    		</div>
								    		<div class="col">
								    			<input class="form-control" type="number" min="0" name="Infant" style="width: 100%">
								    		</div>
								    	</div>
									</div>
								</div>
							</div>    						
    					</div>
    					<div class="col">
    						<button type="button" class="btn" style="color : white; background-color: #ED3237">Search Flight</button>
    					</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
</body>

<!-- Page Content -->