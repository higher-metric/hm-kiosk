<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HM University - Harris Center - Kiosk</title>
		<meta name="robots" content="noindex, nofollow">
		<meta name="googlebot" content="noindex, nofollow">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%7COswald&amp;ver=1.0.0" type="text/css" media="all">
		<link rel="stylesheet" href="assets/css/app.min.css">
		<script type="text/javascript" src="https://unpkg.com/vue@latest/dist/vue.js"></script>
		<script type="text/javascript" src="assets/js/app.min.js"></script>
	</head>
	<body>
		<div id="app">
			<div class="container">
				<div class="header clearfix">
					<span class="date"><?php echo date( 'l, F j' ); ?></span>
					<span class="weather">Today's Weather: <i class="fa fa-sun-o" aria-hidden="true"></i> <span class="forecast">Sunny and 74 degrees</span></span>
					<a class="logo" href="#">Welcome to The Harris Center</a>
				</div>
				<div class="content-wrap clearfix">
					<div class="content">
						<div class="interactive-map">
							<h2>Harris Center Interactive Map</h2>
							<img src="assets/img/map.png" alt="Harris Center Map" />
						</div>
						<div class="posts">
							<h2>Harris Center Research</h2>
							<div class="posts-wrapper clearfix">
								<div class="post">
									<div class="thumb"><a href="#"><span class="placeholder"></span></a></div>
									<h3 class="title"><a href="#">The Amazing Hubble</a></h3>
								</div>
								<div class="post">
									<div class="thumb"><a href="#"><span class="placeholder"></span></a></div>
									<h3 class="title"><a href="#">Radio Astronomy</a></h3>
								</div>
								<div class="post">
									<div class="thumb"><a href="#"><span class="placeholder"></span></a></div>
									<h3 class="title"><a href="#">Space The Final Frontier</a></h3>
								</div>
								<div class="post">
									<div class="thumb"><a href="#"><span class="placeholder"></span></a></div>
									<h3 class="title"><a href="#">How To Look Up</a></h3>
								</div>
							</div>
						</div>
					</div>
					<div class="sidebar">
						<h2>Harris Center Events</h2>
						<div class="events">
							<a href="#" class="event">
								<h3 class="event-title">Welcome Address for Students & Family</h3>
								<span class="event-meta">
									<span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="time-text">10:00am</span></span>
									<span class="sep">|</span>
									<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="location-text">Main Auditorium</span></span>
								</span>
							</a>
							<a href="#" class="event">
								<h3 class="event-title">Welcome Address for Students & Family</h3>
								<span class="event-meta">
									<span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="time-text">10:00am</span></span>
									<span class="sep">|</span>
									<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="location-text">Main Auditorium</span></span>
								</span>
							</a>
							<a href="#" class="event">
								<h3 class="event-title">Welcome Address for Students & Family</h3>
								<span class="event-meta">
									<span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="time-text">10:00am</span></span>
									<span class="sep">|</span>
									<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="location-text">Main Auditorium</span></span>
								</span>
							</a>
							<a href="#" class="event">
								<h3 class="event-title">Welcome Address for Students & Family</h3>
								<span class="event-meta">
									<span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="time-text">10:00am</span></span>
									<span class="sep">|</span>
									<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="location-text">Main Auditorium</span></span>
								</span>
							</a>
							<a href="#" class="event">
								<h3 class="event-title">Welcome Address for Students & Family</h3>
								<span class="event-meta">
									<span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="time-text">10:00am</span></span>
									<span class="sep">|</span>
									<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="location-text">Main Auditorium</span></span>
								</span>
							</a>
							<a href="#" class="event">
								<h3 class="event-title">Welcome Address for Students & Family</h3>
								<span class="event-meta">
									<span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="time-text">10:00am</span></span>
									<span class="sep">|</span>
									<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="location-text">Main Auditorium</span></span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="footer">&copy; <?php echo date( 'Y' ); ?> HM University. All rights reserved.</div>
			</div>
		</div>
	</body>
</html>
