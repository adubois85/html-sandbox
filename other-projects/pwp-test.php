<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Custom CSS -->
		<link type="text/css" href="../stylesheets/pwp-style.css" rel="stylesheet" />


		<title>Alexander DuBois</title>
	</head>
	<body>
		<!-- javascript testing area -->
		<script>
			function alertThis() {
				alert("hello");
			}

			$(".fa-caret-down").on("click", function() {
				$("section-").toggle(2000);
			})
		</script>

		<a class="btn btn-default border fa fa-caret-down" href="#"></a>

		<section class="section-main">

			<!-- top caret -->
			<div class="container">
				<div class="row justify-content-center p-0">
					<button type="button" class="btn btn-link" id="up-button">
						<i class="fa fa-caret-up align-self-start border pt-0" onclick="toggleTop()"
							aria-hidden="true"></i>
					</button>
					<a class="btn btn-default border fa fa-caret-up d-inline" href="#"></a>

					<span onclick="alertThis()" >
						<i class="fa fa-caret-down border btn"></i>
					</span>
				</div>
			</div>

			<!-- left caret, center text, right caret -->
			<div class="container">
				<div class="row justify-content-center">
					<i class="fa fa-caret-left col-xs-4 col-md-1 border p-0" aria-hidden="true"></i>
					<p class="col-xs-4 col-md-2 align-self-center border" >This is my webpage.  Click on the arrows to
						navigate.</p>
					<i class="fa fa-caret-right col-xs-4 col-md-2 border" aria-hidden="true"></i>

					<span >

					</span>
				</div>

				<!-- down caret -->
				<div class="row justify-content-center">
					<i class="fa fa-caret-down border" aria-hidden="true"></i>
				</div>

			</div>
		</section>

		<section class="section-test">
			<p>This is a test section.</p>
		</section>

		<ul id="category-tabs">
			<li><a href="javascript:void"><i class="fa fa-fw"></i>Category 1</a>
				<ul>
					<li><a href="javascript:void">item 1</a></li>
					<li><a href="javascript:void">item 2</a></li>
					<li><a href="javascript:void">item 3</a></li>
				</ul>
			</li>
		</ul>
 		<script>
			$('#category-tabs li a').click(function(){
				$(this).next('ul').slideToggle('500');
				$(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
			});
		</script>

		<script>
			function highlight(text) {
				inputText = document.getElementById("inputText")
				var innerHTML = inputText.innerHTML
				var index = innerHTML.indexOf(text);
				if ( index >= 0 ) {
					innerHTML = innerHTML.substring(0,index) + "<span class='highlight'>" + innerHTML.substring(index,index+text.length) + "</span>" + innerHTML.substring(index + text.length);
					inputText.innerHTML = innerHTML
				}
			}
		</script>

		<button onclick="highlight('fox')">Highlight</button>
		<style>
			.highlight {
				background-color:yellow;
			}
		</style>

		<div id="inputText">
			The fox went over the fence
		</div>


		<!-- Optional JavaScript -->
		<!-- <script src="scripts/script.js"></script> -->

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>