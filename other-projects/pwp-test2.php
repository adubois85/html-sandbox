<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Latest Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		<!--Font Awesome -->
		<link	type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
				  rel="stylesheet" />

		<!-- Custom CSS -->
		<link type="text/css" href="../stylesheets/pwp-style.css" rel="stylesheet" />
	</head>
	<body>
		<div	class="container">
  		<!--
			<div class="row">
				<a class="btn btn-default border fa fa-caret-down" href="#"></a>
				<i class="fa fa-caret-up section-test"></i>
				<button type="button" class="btn btn-primary" onclick="testAlert()">Click Me!</button>
			</div>
		</div>
		-->


		<section class="section-main">
			<div class="container">
				<div class="row justify-content-center p-0">
					<button type="button" class="btn btn-link" id="up-button">
						<i class="fa fa-caret-up align-self-start border pt-0" onclick="alertTest()" aria-hidden="true"></i>
					</button>
					<a class="btn btn-default border fa fa-caret-up d-inline" href="#"></a>
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<i class="fa fa-caret-left col-xs-4 col-md-1 border p-0" aria-hidden="true"></i>
					<p class="col-xs-4 col-md-2 align-self-center border" >This is my webpage.  Click on the arrows to
						navigate.</p>
					<i class="fa fa-caret-right col-xs-4 col-md-2 border" aria-hidden="true"></i>
				</div>
				<div class="row justify-content-center">
					<i class="fa fa-caret-down border" aria-hidden="true"></i>
				</div>
			</div>

			<!-- pulled from the main PWP file -->
<!--			<i class="fa fa-caret-left" aria-hidden="true"></i>-->

		</section>


		<section class="modal-test hidden">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<p>Test modal dialog</p>
					</div>
				</div>
			</div>
		</section>
		<section>

			<div class="container">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
					Launch demo modal
				</button>

				<!-- Modal -->
				<div class="modal fade col-xs-12" id="exampleModalLong" tabindex="-1" role="dialog"
					  aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>Modal body text goes here.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#custom-id">
				Launch demo modal
			</button>

			<div class="modal fade" id="custom-id">
				<div class="modal-dialog custom-class modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-header-text">Text</h3>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							This is some text.
						</div>
						<div class="modal-footer">
							This is some text.
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		</section>






		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="../scripts/script.js"></script>

	</body>
</html>