<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<title>Sulit.com.ph</title>

		<!-- Sets initial viewport load and disables zooming	-->
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

		<!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<!-- Set Apple icons for when prototype is saved to home screen -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="touch-icons/114x114.png">
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="touch-icons/120x120.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="touch-icons/72x72.png">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="touch-icons/57x57.png">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<!-- Include the base Snap.js CSS -->
		<link rel="stylesheet" href="css/snap.css">
		
		<!-- Include the compiled Ratchet CSS -->
		<link rel="stylesheet" href="../../dist/ratchet.css">
		<link href="css/screen.css" rel="stylesheet" type="text/css" />
		<!-- Include the compiled Ratchet JS -->
		<script src="../../dist/ratchet.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<!-- Intro paragraph styles. Delete once you start using this page -->
	<script type="text/javascript">
	
		$(document).ready(function(){
			var viewportWidth = $(window).width();
			alert(viewportWidth/2);
			$('.fullwidth').css('width', viewportWidth);
			$('.halfwidth').css('width', viewportWidth/2)
			/*$('#search').focus(function(){
				$('#search').css('width', '100');
				$('.button').hide();
			});
			$('#search').focusout(function(){
				$('.button').show();
			});*/
			
		});		
	</script>
		<style type="text/css">
			.snap-drawers .list{margin: 0;}

			.welcome {
				line-height: 1.5;
				color: #555;
			}
			h2{
				padding: 15px;
				font-weight: normal;
				font-size: 36px;
			}
		</style>

	</head>
	<body>
	<!-- this is a test commit -->
	<!--- snap js drawers -->
	<div class="snap-drawers">
		<div class="snap-drawer snap-drawer-left" id="left-drawer">
			<?php include('includes/nav-login.php'); ?>
		</div>
		<div class="snap-drawer snap-drawer-right" id="right-drawer">
			<ul class="list">
			  <li>List item 1 <span class="chevron"></span></li>
			  <li>List item 2 <span class="chevron"></span></li>
			  <li>List item 3 <span class="chevron"></span></li>
			  <li>List item 4 <span class="chevron"></span></li>
			  <li>List item 5 <span class="chevron"></span></li>
			  <li>List item 6 <span class="chevron"></span></li>
			  <li>List item 7 <span class="chevron"></span></li>
			  <li>List item 8 <span class="chevron"></span></li>
			  <li>List item 9 <span class="chevron"></span></li>
			  <li>List item 10 <span class="chevron"></span></li>
			  <li>List item 1 <span class="chevron"></span></li>
			  <li>List item 12 <span class="chevron"></span></li>
			  <li>List item 13 <span class="chevron"></span></li>
			  <li>List item 14 <span class="chevron"></span></li>
			  <li>List item 15 <span class="chevron"></span></li>
			  <li>List item 16 <span class="chevron"></span></li>
			  <li>List item 17 <span class="chevron"></span></li>
			  <li>List item 18 <span class="chevron"></span></li>
			  <li>List item 19 <span class="chevron"></span></li>
			  <li>List item 20 <span class="chevron"></span></li>
			</ul>
		</div>
	</div>
	
	<div id="content" class="snap-content">
<!-- <nav class="bar-tab">
  <ul class="tab-inner">
    <li class="tab-item active">
      <a href="#">
        <img class="tab-icon" src="img/icon-home.png">
        <div class="tab-label">Home</div>
      </a>
    </li>
    <li class="tab-item">
      <a href="#">
        <img class="tab-icon" src="img/icon-profile.png">
        <div class="tab-label">Post an Ad</div>
      </a>
    </li>
    <li class="tab-item">
      <a href="#">
        <img class="tab-icon" src="img/icon-messages.png">
        <div class="tab-label">Messages</div>
      </a>
    </li>
    <li class="tab-item">
      <a href="#">
        <img class="tab-icon" src="img/icon-hamburger.png">
        <div class="tab-label">History</div>
      </a>
    </li>
  </ul>
</nav> -->
		<!-- Make sure all your bars are the first things in your <body> -->
		<header class="bar-title">
			<button class="button menu" id="toggle-left"><i class="icon-reorder"></i> Menu</button>
			<h1 class="title">Login</h1>
			<button class="button sell-button" id="toggle-right"><i class="icon-pushpin icon-rotate-60"></i> Sell</button>
		</header>
	
		<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
		<div class="content">
			<a href="" class="button-block facebook">Login via Facebook</a>
		
			<form>
				<div class="input-group login">
					<input type="text" placeholder="Email">
					<input type="email" placeholder="Password">
				</div>
			</form>
			<a href="" class="button-block">Login</a>
			
		</div>
	</div>
	<script type="text/javascript" src="javascripts/snap.js"></script>
	<script type="text/javascript">
	
		var 
		
		// Helper
		$ = function(id){
			return document.getElementById(id);
		},
		
		// Instance
		snapper = new Snap({
			element: document.getElementById('content')
		}),
		
		// 
		UpdateDrawers = function(){
			var state = snapper.state(),
				towards = state.info.towards,
				opening = state.info.opening;
			if(opening=='right' && towards=='left'){
				$('right-drawer').classList.add('active-drawer');
				$('left-drawer').classList.remove('active-drawer');
			} else if(opening=='left' && towards=='right') {
				$('right-drawer').classList.remove('active-drawer');
				$('left-drawer').classList.add('active-drawer');
			}
		};
		
		snapper.on('drag', UpdateDrawers);
		snapper.on('animating', UpdateDrawers);
		snapper.on('animated', UpdateDrawers);
		
		$('toggle-left').addEventListener('click', function(){
			snapper.open('left');
		});
		
		$('toggle-right').addEventListener('click', function(){
			snapper.open('right');
		});
		
	</script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    </body>
</html>
