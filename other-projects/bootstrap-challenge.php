<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap Challenge</title>

		<!-- Bootstrap -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Title</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">

						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="./">Link 1<span class="sr-only">(current)</span></a>
							</li>
							<li>
								<a href="#">Link 2</a>
							</li>
							<li>
								<a href="#">Link 3</a>
							</li>
							<li>
								<a href="#">Link 4</a>
							</li>
						</ul>

					</div>
				</div>
			</nav>
			<div class="jumbotron">
				<h1 class="display-3">Hello, world!</h1>
				<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
				</p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<!-- Added here during class demonstration-->
				<img class="col-md-3 col-xs-8 col-xs-offset-2 img-responsive" src="https://placeimg.com/300/300/sepia"
					  alt="sepia
				man" />
				<p class="col-md-9 col-xs-12">
					You enjoyed that. For an android with no feelings, he sure managed to evoke them in others. Then maybe you should consider this: if anything happens to them, Starfleet is going to want a full investigation. My oath is between Captain Kargan and myself. Your only concern is with how you obey my orders. Or do you prefer the rank of prisoner to that of lieutenant? Well, I'll say this for him - he's sure of himself. The look in your eyes, I recognize it. You used to have it for me. I can't. As much as I care about you, my first duty is to the ship.
				</p>
			</div>
		</div>
		<div class="container main">
			<div class="row">
				<div class="col-lg-3 col-xs-12">
					<img class="img-circle" src="https://placeimg.com/300/300/nature" alt="nature" width="150" height="150"/>
					<div class="well">
						<p>
							And blowing into maximum warp speed, you appeared for an instant to be in two places at once. For an android with no feelings, he sure managed to evoke them in others. Sure. You'd be surprised how far a hug goes with Geordi, or Worf. When has justice ever been as simple as a rule book?
						</p>
					</div>
				</div>

				<div class="col-lg-3 col-xs-12">
					<img class="img-circle" src="https://placeimg.com/300/300/people" alt="person" width="150" height="150"/>
					<div class="well">
						<p>
							Besides, you look good in a dress. When has justice ever been as simple as a rule book? Ensign Babyface! You're going to be an interesting companion, Mr. Data. Wait a minute - you've been declared dead. You can't give orders around here. Our neural pathways have become accustomed to your sensory input patterns.
						</p>
					</div>
				</div>

				<div class="col-lg-3 col-xs-12">
					<img class="img-circle" src="https://placeimg.com/300/300/animals" alt="puppy" width="150" height="150"/>
					<div class="well">
						<p>
							You bet I'm agitated! I may be surrounded by insanity, but I am not insane. When has justice ever been as simple as a rule book? They were just sucked into space. Well, I'll say this for him - he's sure of himself. Worf, It's better than music. It's jazz. Maybe we better talk out here; the observation lounge has turned into a swamp.
						</p>
					</div>
				</div>

				<div class="col-lg-3 col-xs-12">
					<img class="img-circle" src="https://placeimg.com/300/300/arch" alt="night scene" width="150"
						  height="150"/>
					<div class="well">
						<p>
							The look in your eyes, I recognize it. You used to have it for me. Is it my imagination, or have tempers become a little frayed on the ship lately? The unexpected is our normal routine. Now, how the hell do we defeat an enemy that knows us better than we know ourselves?
						</p>
					</div>
				</div>
			</div>
		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>