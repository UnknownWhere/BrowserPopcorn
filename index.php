﻿<?php
require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/functions.php';
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>Popcorn Time in your browser!</title>
    <meta name="description" content="Popcorn Time now works in your browser! Watch the best movies instantly in HD, for free! " />
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Milan Kragujevic" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="language" content="english" />
    <meta name="google" content="notranslate" />
    <meta property="og:title" content="Popcorn Time" />
    <meta property="og:description" content="Popcorn Time now works in your browser! Watch the best movies instantly in HD, for free!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://popcorntimefree.info/" />
    <meta property="og:image" content="http://popcorntimefree.info/assets/graph-image.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="http://popcorntimefree.info/" />
    <meta name="twitter:domain" content="popcorntimefree.info" />
    <meta name="twitter:title" content="Popcorn Time" />
    <meta name="twitter:description" content="Popcorn Time now works in your browser! Watch the best movies instantly in HD, for free!" />
    <meta name="twitter:image" content="http://popcorntimefree.info/assets/icon152.png" />
    <meta name="twitter:site" content="@milankragujevic" />
    <meta name="twitter:creator" content="@milankragujevic" />
    <meta name="apple-mobile-web-app-title" content="Popcorn Time" />
    <link rel="apple-touch-icon-precomposed" href="http://popcorntimefree.info/assets/icon152.png" sizes="152x152" />
    <link rel="apple-touch-icon-precomposed" href="http://popcorntimefree.info/assets/icon144.png" sizes="144x144" />
    <link rel="apple-touch-icon-precomposed" href="http://popcorntimefree.info/assets/icon120.png" sizes="120x120" />
    <link rel="apple-touch-icon-precomposed" href="http://popcorntimefree.info/assets/icon114.png" sizes="114x114" />
    <link rel="apple-touch-icon-precomposed" href="http://popcorntimefree.info/assets/icon76.png" sizes="76x76" />
    <link rel="apple-touch-icon-precomposed" href="http://popcorntimefree.info/assets/icon72.png" sizes="72x72" />
    <link rel="apple-touch-icon-precomposed" href="http://popcorntimefree.info/assets/icon57.png" sizes="57x57" />
    <link rel="shortcut icon" href="/favicon.ico" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin" />
	<link rel="stylesheet" href="http://popcorntimefree.info/assets/style.css" />
	<script>window.www='http://popcorntimefree.info/'</script>
	<script src="http://popcorntimefree.info/assets/jquery.js"></script>
	<script src="http://popcorntimefree.info/assets/underscore.js"></script>
	<script src="http://popcorntimefree.info/assets/jwplayer/jwplayer.js"></script>
	<script src="http://popcorntimefree.info/assets/scripts.js"></script>
</head>
<body>
	<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-54551427-12','auto');ga('send','pageview');</script>
	<script>!function(e,t,r){var n,i=e.getElementsByTagName(t)[0];e.getElementById(r)||(n=e.createElement(t),n.id=r,n.src="//platform.twitter.com/widgets.js",i.parentNode.insertBefore(n,i))}(document,"script","twitter-wjs");</script>
	<script>$(document).ready(function(){$.get('http://api.popcorntimefree.info/?action=track&url=' + encodeURIComponent(window.location.href) + '&resolution=' + screen.width + 'x' + screen.height,function(){});});</script>
	<div class="wrapper">
		<div class="intro section">
			<div class="container">
				<h1>Popcorn Time</h1>
				<h4>The easiest way to stream movies in your browser!</h6>
			</div>
		</div>
		<div class="home section">
			<div class="container">
				<div class="search">
					<input type="text" class="search-box" placeholder="Search for movies..." />
					<div class="loading">
						<img src="http://popcorntimefree.info/assets/loading.gif" />
					</div>
				</div>
				<div class="content">
					<div class="no-results">
						Oops. It looks like we don't have that movie. Try another one.
					</div>
					<div class="movies"></div>
					<div class="player">
						<div class="player-object">
							<div id="playerXJXweHTdLqjJ"></div>
						</div>
						<div class="loading-player">
							<img src="http://popcorntimefree.info/assets/loading2.gif" /> <br> Downloading data. Please wait.
						</div>
						<div class="movie-infobox">
							<div class="movie-poster">
								<img src="" />
							</div>
							<div class="movie-details">
								<h3 class="movie-title"></h3>
								<div class="movie-description">
									<p></p>
								</div>
								<div class="movie-meta">
									<b>Rating</b>: <span class="movie-rating"></span>/10 (<span class="movie-votes"></span> votes) <br> <b>Released</b>: <span class="movie-released"></span>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="home-button">
							<img src="assets/home.png" />
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer section">
		<div class="container">
			<div class="twitter-buttons">
				<a href="https://twitter.com/share" class="twitter-share-button" data-text="Popcorn Time in the Browser - The easiest way to stream movies in your browser!" data-url="http://popcorntimefree.info/" data-count="none" data-via="milankragujevic" data-related="milankragujevic:Creator of BrowserPopcorn">Tweet</a> <a href="https://twitter.com/milankragujevic" class="twitter-follow-button" data-show-count="false" data-lang="en">@milankragujevic</a></span>
			</div>
			<div class="message">
				<a href="http://status.popcorntimefree.info/">Status page</a>. <a href="https://github.com/milankragujevic/BrowserPopcorn">Github</a>. Copyright &copy; BrowserPopcorn. Created by <a href="http://milankragujevic.com/">Milan Kragujević</a>. Technology by <a href="http://movbucket.com/">MovBucket</a>. 
			</div>
		</div>
	</div>
</body>
</html>