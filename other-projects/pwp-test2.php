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
			</div> -->

			<!--		 This is the main section; it acts as a navigation hub for the other sections -->
			<section class="section-main">
				<div class="container">
					<div class="row justify-content-center">
						<i class="fa fa-caret-up border" id="test-slideout"></i>
					</div>
					<div class="row justify-content-center">
						<a class="btn btn-default border fa fa-caret-left col-xs-3" href="#"></a>
						<p class="border col-xs-3">This is my webpage.  Click on the arrows to navigate.</p>
						<a class="btn btn-default border fa fa-caret-right col-xs-3" href="#"></a>
					</div>
					<div class="row justify-content-center">
						<a class="btn btn-default border fa fa-caret-down d-inline" href="#"></a>
					</div>
				</div>
			</section>

				<!-- pulled from the main PWP file -->
	<!--			<i class="fa fa-caret-left" aria-hidden="true"></i>-->


			<section>

				<!-- Adapted from the demo here, building a modal box with straight HTML and CSS
				https://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3/ -->

			<!--	<i class="fa fa-caret-down btn btn-primary"></i>

				<div id="openModal" class="modalDialog hidden modal-test">
					<div>
						<a href="#close" title="Close" class="close">X</a>
						<h2>Modal Box</h2>
						<p>This is a sample modal box that can be created using the powers of CSS3.</p>
						<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
					</div>
				</div>
			</section>

			<section>
				<span id='clickableAwesomeFont' class="fa fa-caret-up border"></span>
			</section>
		</div>


		<div class="container">
			<div class="row">
				<button class="btn btn-lg">Button</button>
				<p class="inactive" id="#job-details-flyout-overlay">
					Bacon ipsum dolor amet burgdoggen ball tip corned beef hamburger jowl, frankfurter chuck cupim strip steak. Beef swine venison biltong capicola, shank shankle short loin picanha pancetta pork chop pork belly jowl jerky frankfurter. Bacon spare ribs swine, salami kielbasa ball tip alcatra hamburger tri-tip boudin venison pork turkey. Boudin rump ball tip beef fatback leberkas shoulder turducken hamburger ground round sausage venison alcatra. Meatloaf prosciutto meatball tail. Leberkas burgdoggen tri-tip tail jowl.
				</p>

"
			</div>
		</div> -->
	<section>
		<div class="container">
			<div class="row justify-content-center">
				<a href="#" class="fa fa-caret-down btn btn-default"></a>
			</div>
			<div id="#">
				<form>
					<textarea class="form-control"></textarea>
					<input class="btn btn-primary" type="submit" value="Post feedback"></input>
				</form>
			</div>
		</div>
	</section>


	<section class="section-about-me">
		<div class="container" id="slideout">
			<p>Test placeholder text.</p>
		</div>
	</section>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="../scripts/script.js"></script>

	</body>
</html>