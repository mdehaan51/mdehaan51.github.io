
<!DOCTYPE html>
<html>
	<head>
		<title>DeHaan Development Home Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel = "stylesheet" type="text/css" href = "main.css">
	</head>
	<body>
		<div class = "stars"></div>
		<div class = "twinkling"></div>
		<div id = "selectedAvatar">
			<img id = "playerAvatar" src = "./images/ufo.png"/>
		</div>
		<div id = "container-fluid">
			<div id = "maincontainer">
				<div id = "title">
					<h1>DeHaan Development</h1>
					<p>Electrical Engineer Turned Developer</p>
				</div>
				<div id = "charselectbox">
					<div id = "selectboxheader">
						<h1>Select your Avatar</h1>
					</div>
					
					<div id = "avatarcontainer" class = "container-fluid">
						<div class = "row">
							<div class = "col-sm-4">
								<div class = "avatarimage">
								<img class = "avatar" src = "./images/avatar-icons/uss_icon.png"></div>
								<button type = "button" class = "avatarbutton"> Potential Employer
								</button>
								
							</div>
							<div class = "col-sm-4">
								<div class = "avatarimage">
								<img class = "avatar" src = "./images/avatar-icons/futurama_icon.png"></div>
								<button type = "button" class = "avatarbutton">Freelance Client</button>
							</div>
							<div class = "col-sm-4">
								<div class = "avatarimage">
								<img class = "avatar" src = "./images/avatar-icons/xwing_icon.png"></div>
								<button type = "button" class = "avatarbutton">Friend</button>
							</div>
						</div>
						
						<div class = "row">
							<div class = "col-sm-4">
								<div class = "avatarimage">
								<img class = "avatar" src = "./images/avatar-icons/serenity_icon.png"></div>
								<button type = "button" class = "avatarbutton">Random Passerby</button>
							</div>
							<div class = "col-sm-4">
								<div class = "avatarimage">
								<img class = "avatar" src = "./images/avatar-icons/satellite_icon.png"></div>
								<button type = "button" class = "avatarbutton">Fellow Developer</button>
							</div>
							<div class = "col-sm-4">
								<div class = "avatarimage">
								<img class = "avatar" src = "./images/avatar-icons/spaceship_icon.png"></div>
								<button type = "button" class = "avatarbutton">UFO
								</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div id = "itemsContainer">
			<div id = "selection-header">
				<h1>Welcome</h1>
				<h3>Choose your destination</h3>
			</div>
			<!--<a href = "./portfolio/portfoliopage.html">-->
			<div class = "selectionItem" id = "portfolio">
			</div>
		</a>
		<div class = "menu-signs" id = "portfolio-sign">
		</div>
		<div class = "selectionItem" id = "about">
		</div>
		<div class = "menu-signs" id = "about-sign">
		</div>
		<div class = "selectionItem" id = "contact">
			
		</div>
		<div class = "menu-signs" id = "contact-sign">
		</div>
		<div class = "selectionItem" id = "resume">
			
		</div>
		<div class = "menu-signs" id = "resume-sign">
		</div>
	</div>
	<div id = "portfolio-modal" class = "modal fade" role = >
		<div class = "modal-dialog modal-lg">
			<div class = "modal-content">
				<div class = "modal-header">
					<h2>Portfolio</h2>
				</div>
				<div class = "modal-body portfolio-modal-body">
					<div class = "container-fluid">
						<div class = "row portfolio-row">
							<div class = col-sm-4>
								<img class = "portfolioimage"  src = "../dehaandevelopment/portfolio/twitch_leaderboard/screenshot.png">
							</div>
							<div class = col-sm-4>
								<img class = "portfolioimage"  src = "../dehaandevelopment/portfolio/skills-assessment/skill-assessment.png">
							</div>
							<div class = col-sm-4>
								<img class = "portfolioimage"  src = "../dehaandevelopment/portfolio/pomodoro-clock/pomodoro-clock.png">
							</div>
							
						</div>
						<div class = "row portfolio-row">
							<div class = col-sm-4>
								<img class = "portfolioimage"  src = "../dehaandevelopment/portfolio/skills-assessment/skill-assessment.png">
							</div>
							<div class = col-sm-4>
								<img class = "portfolioimage"  src = "../dehaandevelopment/portfolio/skills-assessment/skill-assessment.png">
							</div>
							<div class = col-sm-4>
								<img class = "portfolioimage"  src = "../dehaandevelopment/portfolio/skills-assessment/skill-assessment.png">
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id = "contact-modal" class = "modal fade" role = "dialog">
		<div class = "modal-dialog">
			<div class = "contact-modal modal-content">
				<div class = "modal-header">
					<h2>Contact Me</h2>
				</div>
				<div class = "modal-body">
					<form role = "form" id = "contact-form" method = "POST" action = "contact.php">
						<div class = "form-group">
							<label for = "name">Name:</label>
							<input name = "name" type = "text" class = "form-control" id = "name" form = "contact-form" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p>$errName</p>";?>
						</div>
						<div class = "form-group">
							<label for = "name">Email:</label>
							<input name = "sender-email" type = "email" class = "form-control" id = "name" form = "contact-form" value="<?php echo htmlspecialchars($_POST['sender-email']); ?>">
							<?php echo "<p>$errEmail</p>";?>
						</div>
						<div class = "form-group">
							<label for = "message">Message:</label>
							<textarea name = "message" form = "contact-form" class = "form-control" id = "message" placeholder = "How can I help you?" rows = "5" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							</textarea>
							<?php echo "<p>$errMessage</p>";?>
						</div>
						
					</div>
					<div class = "modal-footer">
						<button type = "submit" name = "submit" class = "btn btn-default" id = "submit-button">Submit</button>
						<?php echo $result;?>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id = "about-modal" class = "modal fade" role = "dialog">
		<div class = "modal-dialog">
			<div class = "contact-modal modal-content">
				<div class = "modal-header">
					<h2>About Mike DeHaan</h2>
				</div>
				<div class = "modal-body">
					<p> Hi, I'm Mike!<br><br>
						My path to development is a bit atypical. Growing up in Bozeman Montana I was never around much tech. I didn't grow up coding, nor did know anyone that did. Honestly the fact that I grew up with an interest in computers made me somewhat of an outlier amongst the other local kids, most of whom had zero interest in tech, so I tended to push it aside and never really considered coding to be a feasible option. <br><br>
						Upon graduating from High School, I went to Gonzaga University in Spokane, WA and got an engineering degree because what else are you supposed to do when your strengths have always been Math and Science? Long story short, after getting that degree and spending 5 years working as an engineer, I decided that was not the life for me and started pursueing something else.<br><br>
						I left my engineering job and started teaching myself coding from scratch. It was a daunting process solo learning but no doubt my engineering background has paid off because in a few short months I developed the skills to expand to working for other people. I am currently doing some work for a couple start ups, who's details I cant talk about yet, and am looking for more opportunities to expand my portfolio and my horizons. <br><br>
						If you wanna chat, go ahead and send me a messege by going to the icon in the bottom left!
					</p>
				</div>
				
			</div>
		</div>
	</div>
	<div id = "resume-modal" class = "modal fade" role = "dialog">
		<div class = "modal-dialog">
			<div class = "contact-modal modal-content">
				<div class = "modal-header">
					<h2>Mike DeHaan's Resume</h2>
				</div>
				<div class = "modal-body">
					<h3>Applicable Skills</h3>
					<p>-5 years of experience solving complex engineering problems as an Electrical Engineer<br>Competent developing apps with HTML, CSS, and JavaScript.<br>Exposure to Ruby on Rails, SQL, Python, AJAX, JSON, and React.<br>Experienced using GIT for version control.</p>
						
					</p>
				</div>
				
			</div>
		</div>
	</div>
</div>
<script type = "text/javascript" src="index.js"></script>
<script type = "text/javascript" src="main.js"></script>
<script type = "text/javascript" src="loadedpage.js"></script>
</body>
</html>